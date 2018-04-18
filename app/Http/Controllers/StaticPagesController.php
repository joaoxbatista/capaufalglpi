<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sector;

class StaticPagesController extends Controller
{
    public function index() {
        $sectors = Sector::all();
    	return view('static.home', compact('sectors'));
    }
}
