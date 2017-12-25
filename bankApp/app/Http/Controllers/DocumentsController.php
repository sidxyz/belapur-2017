<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Document;
use App\User;


class DocumentsController extends Controller
{
    public function show()
    {
    	return view('updateadditionalform');
    }

    public function store(Request $request)
    {
    	//uploading pan info
    	$panDocument = new Document;
    	$panDocument->name ='pan';

    	$file = $request->file('pan');
    	$filename = $file->getClientOriginalName();
        $file->move('uploads',$filename ); 

        $panDocument->url = "uploads/" . $filename;
        $panDocument->user_id = Auth::id();

        $panDocument->save();

        //uploading adhar info
    	$adharDocument = new Document;
    	$adharDocument->name ='adhar';

    	$file = $request->file('adhar');
    	$filename = $file->getClientOriginalName();
        $file->move('uploads', $filename); 

        $adharDocument->url = "uploads/" . $filename;
        $adharDocument->user_id = Auth::id();

        $adharDocument->save();

        return redirect('/home');

    }

    public function showDocsById($id)
    {
        $document =  Document::where('user_id',$id)->get();
        return view('showprofile')->with('data',$document);
    }

    public function approveProfileById($id)
    {
        $userId = (int)$id;
        $user = User::find($userId);
        $user->status = 'approved';
        $user->save();
        
        return redirect('/approvals');

    }
}
