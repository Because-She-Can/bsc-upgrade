<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;

class volunteerControler extends Controller
{
    //
    public function storevolunteer(Request $request){
        $volunteer= new Volunteer();
        $volunteer->first_name=$request->input('first_name');
        $volunteer->last_name=$request->input('last_name');
        $volunteer->volunteer_email=$request->input('email');
        $volunteer->phone_number=$request->input('phone');
        $volunteer->volunteer_country=$request->input('country');
        $volunteer->experience_msg=$request->input('msg');
        $volunteer->zip=$request->input('zip');
        $volunteer->volunteer_role=$request->input('role');
        $volunteer->availability=$request->input('availability');
        $volunteer->volunteer_hours=$request->input('hours');
        $volunteer->save();

        return redirect()->back()->with(['status'=>'Your details have successfully been sent. We will contact you via email. Thank you']);
    }

}
