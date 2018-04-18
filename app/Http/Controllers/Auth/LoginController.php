<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Adldap\Laravel\Facades\Adldap;
use Illuminate\Http\Request;
use App\Models\GlpiRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->redirectTo = route('static.home');
    }

    public function username() {
        return config('adldap_auth.usernames.eloquent');
    }

    protected function validateLogin(Request $request) {
        $this->validate($request, [
            $this->username() => 'required|string|regex:/^\w+$/',
            'password' => 'required|string',
        ]);
    }

    protected function attemptLogin(Request $request) {
        $credentials = $request->only($this->username(), 'password');

        $username = $credentials[$this->username()];
        $password = $credentials['password'];



        $user_format = env('ADLDAP_USER_FORMAT', 'cn=%s,'.env('ADLDAP_BASEDN', ''));
        $userdn = sprintf($user_format, $username);
        
        if(Adldap::auth()->attempt($userdn, $password, $bindAsUser = true)) {
            // the user exists in the LDAP server, with the provided password
            $user = \App\Models\User::where($this->username(), $username) -> first();
            if ( !$user ) {
                // the user doesn't exist in the local database
                $user = new \App\Models\User();
                $user->name = $username;
                $user->username = $username;
                $user->password = '';
            }
            // by logging the user we create the session so there is no need to login again (in the configured time)
            $this->guard()->login($user, true);

            /*Glpi Autenticação*/

            //1 - Instanciar classe que manipuça as informações do GLPI
            $GLPIAuth = new GlpiRequest();

            //2 - Setar as credenciais
            $GLPIAuth->setCredentials($username, $password);

            //3 - Obtem o token
            $GLPIToken = $GLPIAuth->getSessionToken();

            //4 - Adicionar token a sessão
            session()->push('glpi_session_token', $GLPIToken);


            return true;
        }
        
        // the user doesn't exist in the LDAP server or the password is wrong
        return false;
    }
}
