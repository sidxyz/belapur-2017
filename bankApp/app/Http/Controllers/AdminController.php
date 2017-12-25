<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function showPendingApprovals()
    {
    	$user = User::where('type','user')->where('status','guest')->get();
    	
    	// because we will get multiple users
    	$filteredUser = [];

    	for($i=0;$i<count($user);$i++)
    	{
    		if($user[$i]->isDocumentUploaded() == 'true')
    		{
    			array_push($filteredUser, $user[$i]);
    		}
    	}

    	return view('approvals')->with('data',$filteredUser);
    }
}
