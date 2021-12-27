<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DonateInfo;

class DonateInfoController extends Controller
{
    public function submitDonate(Request $request){
    	// dd($request->all());

    	$donate_data = $request->all();
    	$donate_info = new DonateInfo();
    	//name, email... etc all of them is the column of database
    	$donate_info->name = $donate_data['user_name'];
		$donate_info->email = $donate_data['user_email'];
		$donate_info->contact_number = $donate_data['user_contact'];
		$donate_info->dob = $donate_data['user_dob'];
		$donate_info->occupation = $donate_data['user_name'];
		$donate_info->membership = $donate_data['user_membership'];
		$donate_info->aggrement = $donate_data['user_aggrement'];
		$donate_info->donate_amount = $donate_data['user_amount'];

		$donate_info->save();
		
		return redirect('/');
    }
}
