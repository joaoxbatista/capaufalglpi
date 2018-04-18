<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sector;
use App\Models\SectorCategory;

class SectorCategoriesController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
    	$sectors = Sector::all();
        return view('dashboard.sectorcategory.create', compact('sectors'));
    }

    public function store(Request $request)
    {

        sectorcategory::create($request->except('_token'));
        return redirect()->route('static.home');
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function remove()
    {

    }

    public function delete()
    {

    }
}
