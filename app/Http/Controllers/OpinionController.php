<?php

namespace App\Http\Controllers;

use App\Opinion;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OpinionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index($user)
    {
    	$userOpinion = Opinion::where('user_id',Auth::user()->id)->first();
    	if (!empty($userOpinion)) {
    		$opinion = $userOpinion;
    		
    		return redirect()->route('opinion.edit',[Auth::user()->name,$opinion->id]);
    	}
    	else{
    		return view('tutor.opinion.index');
    	}
    }

    public function store(Request $request, $user)
    {
    	$this->validate($request, [
    		'opinion' => ['required', 'string', 'min:55', 'max:555']
    	]);
        
    	$dataStored = Opinion::create([
    		'user_id' => Auth::user()->id,
    		'opinion' => $request->opinion
    	]);

    	if ($dataStored == true) {
    		Toastr::success(__('Record Successfully Stored'));
    		return redirect()->route('home');
    	}
    	else{
    		Toastr::error(__('Record Stored Failed!'));
    		return redirect()->back();
    	}
    }

    public function edit($user, $opinion)
    {
    	$findOpinion = Opinion::where('id', $opinion)->where('user_id',Auth::user()->id)->first();
    	if (!empty($findOpinion)) {
    		$opinion = $findOpinion;

    		return view('tutor.opinion.edit',compact('opinion'));
    	}
    	else{
    		Toastr::warning(__('Record Not Found!'));
    		return redirect()->route('home');
    	}
    }

    public function update(Request $request, $user, $opinion)
    {
    	$this->validate($request, [
    		'opinion' => ['required', 'string', 'min:55', 'max:555']
    	]);

    	$findOpinion = Opinion::where('id', $opinion)->where('user_id',Auth::user()->id)->first();
    	if (!empty($findOpinion)) {
	    		$dataUpdated = $findOpinion->update([
    			'opinion' => $request->opinion
	    	]);

	    	if ($dataUpdated == true) {
	    		Toastr::success(__('Record Successfully Updated'));
	    		return redirect()->route('home');
	    	}
	    	else{

	    		Toastr::error(__('Record Update Failed!'));
	    		return redirect()->back();
	    	}

    	}
    	else{
    		 Toastr::warning(__('Record Not Found!'));
    		return redirect()->back();
    	}
    }

    public function destroy($user, $opinion)
    {
    	$findOpinion = Opinion::where('id', $opinion)->where('user_id',Auth::user()->id)->first();
    	if (!empty($findOpinion)) {
    		$dataDeleted = $findOpinion->delete();
    		if ($dataDeleted == true) {
    			Toastr::success(__('Record Successfully Destroyed'));
    			return redirect()->route('home');
    		}
    		else{
    			Toastr::error(__('Record Destroy Failed!'));
    			return redirect()->back();
    		}
    	}
    	else{
    		Toastr::warning(__('Record Not Found!'));
    		return redirect()->route('home'); 
    	}
    	
    }
}
