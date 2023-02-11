<?php

namespace App\Http\Controllers;

use App\Models\Attendances;
use App\Models\Leaves;
use App\Models\User;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    
    public function selfAttendance(Request $request)
    {
        $users = User::where('id' ,$request->user()->id )->get() ;
        return view('pages.attandance.attendance.indexsheet')->with(['users' => $users]);
    }

    
    public function checkStaff()
    {
        $users = User::whereIn('role_type' , ['manager' , 'incharge' , 'classteacher','teacher'])->get() ;
        return view('pages.attandance.attendance.index')->with(['users' => $users]);
    }

    public function index()
    {
        $users = User::where('role_type' , 'student')->get() ;
        return view('pages.attandance.attendance.index')->with(['users' => $users]);
    }

    public function CheckStore(Request $request)
    {
        // dd($request) ; 
        if (isset($request->attd)) {
            foreach ($request->attd as $keys => $values) {
                foreach ($values as $key => $value) {
                    if ($User = User::where('id' , request('user_id'))->first()) {
                       // dd($User) ;
                        if (
                            !Attendances::where('attendance_date' ,$keys)
                              ->where('user_id' , $key)    
                             
                                ->where('type' , 0)
                                ->first()
                        ) {
                            $att_type = 'P' ;
                            if(isset($value['A'] )){
                                $att_type = 'A' ;
                            }
                            
                            $data = new Attendances();
                            
                            $data->user_id = $key;
                            
                            $user_req = User::where('id',$key)->first();
                            //dd($user_req->schedules->first()) ;
                            $data->attendance_time = date('H:i:s', strtotime($user_req->schedules->first()->time_in));
                            $data->attendance_date = $keys;
                            $data->att_type = $att_type ;
                            // $users = date('H:i:s', strtotime($User->schedules->first()->time_in));
                            // if (!($users >= $data->attendance_time)) {
                            //     $data->status = 0;
                           
                            // }
                            $data->save();
                        }
                    }
                }
            }
        }
        if (isset($request->leave)) {
            foreach ($request->leave as $keys => $values) {
                foreach ($values as $key => $value) {
                    if ($User = User::where('id' , request('user_id'))->first()) {
                        if (
                            !Leaves::where('leave_date' , $keys)
                                ->where('user_id' , $key)
                                ->where("type" , 1)
                                ->first()
                        ) {
                            $att_type = 'AP' ;
                            if(isset($value['HDL'] )){
                                $att_type = 'HDL' ;
                            }
                            
                            $data = new Leaves();
                            $data->user_id = $key;
                            $user_req = User::where('id',$data->user_id)->first();
                            $data->leave_time = $user_req->schedules->first()->time_out;
                            $data->leave_date = $keys;
                            $data->att_type = $att_type ;
                            // if ($User->schedules->first()->time_out <= $data->leave_time) {
                            //     $data->status = 1;
                                
                            // }
                            // 
                            $data->save();
                        }
                    }
                }
            }
        }
        return back()->with('success', 'You have successfully submited the attendance !');

      
    }
    public function sheetReport()
    {

    return view('admin.sheet-report')->with(['Users' => User::all()]);
    }
}
