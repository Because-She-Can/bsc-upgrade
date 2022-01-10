<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


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


    public function members($type){

        if (request()->wantsJson()) {
            return DataTables::of(Member::all())
                ->removeColumn([
                    'updated_at'
                ])
                ->addColumn('action', function ($member) {
                    $data = json_encode([
                        'id' => $member->id
                    ]);

                    return "<button class='btn btn-dark btn-sm crud-button'
                            id='car_dealer_type_update'
                            data-original-title='Edit Car Dealer Type'
                            data-route='" . route('home') . "'
                            data-data='$data' data-toggle='modal' data-target='#car_dealer_type_update_modal'><i class='fa fa-edit'></i></button>
                            ";
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('admin.members');
    }

}
