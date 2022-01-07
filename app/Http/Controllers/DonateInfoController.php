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
		$donate_info->occupation = $donate_data['user_occupation'];
		$donate_info->donation_amount = $donate_data['user_amount'];

		$donate_info->save();
		
		return redirect('/');
    }
}
