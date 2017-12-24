<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank;
use Illuminate\Support\Facades\Mail;

class BankController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addBank(Request $request)
    {
    	$bankObject = Bank::create($request->all());
    	return redirect('/showbanks')->with('status','true'); 
    }

    public function showForm()
    {
    	return view('addbank');
    }

    public function showBank()
    {
        $bank = new Bank;
        $banks = $bank->all();
        return view('showBanks')->with('data',$banks)->with('status','false');
    }

    public function deleteBank($id)
    {
        Bank::destroy($id);
        //echo "boom";
        return redirect('/showbanks'); 

    }

    public function editBank($id)
    {
        $bankData = Bank::where('id', $id)->get();
        //dd($bankData[0]);
        return view('updatebank')->with('data',$bankData[0]);
    }

    public function update(Request $request)
    {
        //$bank = Bank::where('id', $request->id)->get();
        //dd($request->id);
        $bankId = (int)$request->id;
        $bank = Bank::find($bankId);

        //dd($bank);
        //$bank = $bank[0];

        $bank->bankName = $request->bankName;
        $bank->bankBranch = $request->bankBranch;
        $bank->ifsc = $request->ifsc;
        $bank->location = $request->location;

        $bank->save();

        return redirect('/showbanks'); 
    }

}
