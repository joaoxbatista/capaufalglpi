<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserSettings;
use Auth;


class UserController extends Controller
{
    public function settings(Request $request)
    {
        $user_settings = Auth::user()->settings ?? new UserSettings;
    	
        return view('dashboard.user.settings', compact(['user_settings']));
    }

    public function settingsUpdate(Request $request)
    {
        $data = $request->except(['_token']);
        //Verifica se o usuário já possui configuração já cadastrada
        if(Auth::user()->settings)
        {
            echo "Já possui configuração cadastrada";
            Auth::user()->settings()->update($data);
        }
        else
        {
            echo "Não possui configuração cadastrada";
            UserSettings::create($data);
        }

//        return redirect()->route('dashboard.user.settings');
    }
}
