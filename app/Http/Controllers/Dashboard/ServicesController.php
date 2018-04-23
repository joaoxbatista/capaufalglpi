<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;
// use App\Models\GlpiRequest as GlpiRequest;
use App\Models\Service;
use App\Models\Sector;

class ServicesController extends Controller
{

	public function show($id)
	{
		$service = Service::find($id);
		return view('dashboard.service.view', compact('service'));		
	}

	public function create(Request $request)
	{
		$sectors = Sector::all();
		$categories = [];
		
		foreach ($sectors as $sector) {
			foreach ($sector->sector_categories as $category) {
				$categories[$category->id] = "{$sector->name} - {$category->name}";
			}
		}

		return view('dashboard.service.create', compact('categories'));
	}

	public function store(Request $request)
	{	
		$service = $request->except('_token');
		$service_updated['localizable'] = isset($service_updated['localizable']) ? true : false;
		Service::create($service);
		return redirect()->route('static.home');
	}


	public function remove(Request $request)
	{
		$service = Service::find($request->get('service_id'));
		$service->delete();
		return redirect()->route('static.home');
	}

	public function edit(Request $request)
	{
		$service_id = $request->get('service_id');
		$service = Service::find($service_id);
		$sectors = Sector::all();
		foreach ($sectors as $sector) {
			foreach ($sector->sector_categories as $category) {
				$categories[$category->id] = "{$sector->name} - {$category->name}";
			}
		}
		return view('dashboard.service.edit', compact(['service', 'categories']));
	}
	
	public function update(Request $request) 
	{	
		$service = Service::find($request->get('id'));
		$service_updated = $request->except('_token');
		$service_updated['localizable'] = isset($service_updated['localizable']) ? true : false;
		$service->update($service_updated);
		return redirect()->route('dashboard.services.view', ['id' => $service->id]);
	}

	public function getLocation(Request $request)
	{
		
	}
}
