<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\GlpiRequest;
use Auth;
class CallsController extends Controller
{
    public function create(Request $request)
    {
        $service_id = $request->get('service_id');
        $service = Service::find($service_id);
        
        return view('dashboard.calls.create', compact('service'));
    }

    public function store(Request $request)
    {
        $service  = Service::find($request->get('service_id'));
        $user_settings = Auth::user()->settings;
        
        $data = "            
        [
            {
                \"slts_tto_id\": {$request->get('service_id')},
                \"name\": \"{$service->name}\",
                \"content\": \" Nome: {$user_settings->first_name} {$user_settings->last_name} \\nE-mail: {$user_settings->email} \\nTelefone 1: {$user_settings->phone1} \\nTelefone 2: {$user_settings->phone2} \\nDescrição: {$request->get('description')} \"    
            }
        ]";

        echo $data;

        

        $GlpiRequest = new GlpiRequest();
        $glpi_token = session()->get('glpi_session_token');

        if($glpi_token)
        {
            $message = $GlpiRequest->store($glpi_token, 'Ticket', json_decode($data));

            return redirect()->route('static.home')->with('msg', 'Chamado realizado com sucesso!');
        }

        

        
    }
}
