<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;
// use App\Models\GlpiRequest as GlpiRequest;
use App\Models\Service;
use App\Models\Sector;

class ServicesController extends Controller
{
	// public function index() 
	// {
	//     $services = [
	//         ['id' => 1, 'nome' => 'Serviço 01', 'tipo_id' => 1, 'categoria_id' => 1, 'grupo_id' => 1],
    //         ['id' => 2, 'nome' => 'Serviço 02', 'tipo_id' => 1, 'categoria_id' => 1, 'grupo_id' => 1],
    //         ['id' => 3, 'nome' => 'Serviço 03', 'tipo_id' => 1, 'categoria_id' => 1, 'grupo_id' => 1],

    //     ];
	// 	return view('dashboard.service.index', compact('services'));
	// }

	// public function store(Request $request)
	// {

	// 	$data = $request->except('_token');

	// 	$GlpiRequest = new GlpiRequest();
			
	// 	$message = $GlpiRequest->store($request->session()->get('session_token'), 'Ticket', $data);

	// 	return redirect()->route('dashboard.services.success');
		
	// }

	// public function success(Request $request)
	// {
	// 	return view('dashboard.service.success_message');
	// }

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
		return view('dashboard.service.edit', compact(['service', 'sectors']));
	}
	
	public function update(Request $request) 
	{	
		$service = Service::find($request->get('id'));
		$service->update($request->except('_token'));
		return redirect()->route('dashboard.services.view', ['id' => $service->id]);
	}
}
