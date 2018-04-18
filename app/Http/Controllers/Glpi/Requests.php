<?php

namespace App\Http\Controllers\Glpi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GlpiRequest as GlpiRequest;

class Requests extends Controller
{
    public function login(Request $request)
    {
        return redirect()->route('dashboard.services.create');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->back();
    }


}
