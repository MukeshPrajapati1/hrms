<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MissingAttendance;

class MissingAttendanceController extends Controller
{
    public function create(request $request)
    {
        $request->validate([
            "date" => 'required'

        ]);
        $data = new MissingAttendance();
        $data->date = $request->date;
        $data->save();
        toastr()->success('Missing Attendance Search Successfully');
        return back();
    }

    public function show()
    {
        $missingattendancedata =  MissingAttendance::all();
        return view('frontend.attendance.missingattendance', compact('missingattendancedata'));
    }
}
