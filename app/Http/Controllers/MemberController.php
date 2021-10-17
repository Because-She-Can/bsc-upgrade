<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //
    public function store(Request $request){
        $member= new Member();
        $member->full_name=$request->input('name');
        $member->email_address=$request->input('email');
        $member->phone_number=$request->input('phone');
        $member->reference_contact=$request->input('reference');
        $member->comment=$request->input('msg');
        $member->save();

        return redirect()->back()->with(['status'=>'Your details have successfully been sent. We will contact you via email. Thank you']);
    }

}
