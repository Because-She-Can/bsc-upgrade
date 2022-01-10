<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


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
        $volunteer->volunteer_role=json_encode($request->input('role'));
        $volunteer->availability=json_encode($request->input('availability'));
        $volunteer->volunteer_hours=$request->input('hours');
        $volunteer->save();

        return redirect()->back()->with(['status'=>'Your details have successfully been sent. We will contact you via email. Thank you']);
    }


    public function volunteers($type){

        if (request()->wantsJson()) {
            return DataTables::of(Volunteer::all())
                ->removeColumn([
                    'updated_at'
                ])
                ->addColumn('action', function ($volunteer) {
                    $data = json_encode([
                        'id' => $volunteer->id
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

        return view('admin.volunteers');
    }

}
