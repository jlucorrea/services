<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::paginate(5);
		return view('services.index' ,compact('services'));
    }

	public function servicesinfo()
	{
		$services = Service::get();
		return view('servicesinfo' ,compact('services'));
	}

    public function create()
    {
        return view('services.crear');
    }

    public function store(Request $request)
    {
		request()->validate([
			'title' => 'required',
			'description' => 'required',
			'price' => 'required'
		]);
		Service::create($request->all());
		return redirect()->route('services.index');
    }

    public function edit($id)
    {
		$service = Service::find($id);
		
        return view('services.edit' ,compact('service'));
    }

    public function update(Request $request, $id)
    {
		$service = Service::find($id);
		if($service){
			$service->update([
				'title' =>$request->title,
				'description' => $request->description,
				'price' => $request->price
			]);
		}
		return redirect()->route('services.index');
    }
	
    public function destroy($id)
    {
        Service::find($id)->delete();
		return redirect()->route('services.index');
    }
}
