<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AttendanceForm;

class AttendanceFormController extends Controller
{
    public function create(request $request)
    {
        $request->validate([
            "from" => 'required',
            "to" => 'required',
            "employee_name" => 'required',
            "punch_time" => 'required'
        ]);
        $data = new  AttendanceForm();
        $data->from = $request->from;
        $data->to = $request->to;
        $data->employee_name = $request->employee_name;
        $data->punch_time = $request->punch_time;
        // return $data;
        $data->save();
        toastr()->success('Attendance Form Added Successfully');
        return back();
    }

    public function show()
    {
        $attendanceformdata=  AttendanceForm::all();
        return view('frontend.attendance.attendanceform', compact('attendanceformdata'));
    }



    public function add_attendance(request $request)
    {
        $request->validate([
            "image" => 'required',
        ]);
        // return $request->all();
        $data = new  AttendanceForm();


        if ($request->hasfile('image')) {

            $image = $request->file('image');

            $ext = $image->getClientOriginalExtension();

            $image_name = date('y-m-d').'-'.rand().'.'.$ext;

            $image->move('upload/document/', $image_name);

            $data->image = $image_name;
        }
        $data->save();
        toastr()->success('Attendance Form Upload Successfully');
        return back();
    }
}
