<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //
    public function store(Request $request){
        $member= new Member();
        $member->first_name=$request->input('first_name');
        $member->last_name=$request->input('last_name');
        $member->member_email=$request->input('member_email');
        $member->member_phone=$request->input('member_phone');
        $member->country=$request->input('country');
        $member->it_stage=$request->input('it_stage');
        $member->msg=$request->input('msg');
        $member->save();

        return redirect()->back()->with(['status'=>'Your details have successfully been sent. We will contact you via email. Thank you']);
    }

}
