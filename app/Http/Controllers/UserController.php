<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileUpdateRequest;

class UserController extends Controller
{
    public function index()
	{
		$users = User::paginate(5);
		return view('users.index', compact('users'));
	}

	public function create()
	{
		return view('users.crear');
	}

	public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('users.index');
    }

	public function edit($id)
    {
        $user = User::find($id);
		return view('users.edit', compact('user'));
    }

	public function update(ProfileUpdateRequest $request, $id)
    {
		$user = User::find($id);
		if($user){
			$user->update([
				'name' =>$request->name,
				'email' => $request->email,
				'password' => !empty($request->password) ? Hash::make($request->password) : $user->password
			]);
		}
        return redirect()->route('users.index');
    }
	public function destroy($id)
    {
        User::find($id)->delete();
		return redirect()->route('users.index');
    }
}
