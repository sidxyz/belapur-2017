<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function show()
    {
    	return view('custom-registration');
    }

    public function store(Request $request)
    {
    	$userObject = new User;

    	$userObject->name = $request->name;
    	$userObject->email = $request->email;
    	$userObject->password = bcrypt($request->password);
    	$userObject->mobile = $request->mobile;
    	$userObject->pan = $request->pan;
    	$userObject->address = $request->address;
        $userObject->status = 'guest';
        $userObject->type = 'user';

        $file = $request->file('photo');
        $file->move('uploads', $file->getClientOriginalName()); 

        $userObject->photo = "uploads/" . $file->getClientOriginalName();

    	$userObject->save();

    	return redirect('/login');

    }
}
