<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$contactview = Contact::paginate(5);
        return view('contactview.index', compact('contactview'));
    }

	public function servicescontact()
	{
		return view('servicescontact');
	}

	public function store(ContactRequest $request)
	{
		
		Contact::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
			'email' => $request->email,
			'address' => $request->address,
			'telephone' => $request->telephone,
			'comment' => $request->message,
			'status' => 0
        ]);
		
		return redirect()->route('servicescontact');
	}

    public function create()
    {
        //
    }

	
	public function edit($id)
    {
		$contactview = Contact::find($id);
		
		if($contactview){
			$contactview->update([
				'status' => 1
			]);
		}
		
        return view('contactview.edit' ,compact('contactview'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
