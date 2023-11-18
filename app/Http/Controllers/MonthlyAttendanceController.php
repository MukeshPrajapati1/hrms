<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\MonthlyAttendance;
use App\Models\User;

class MonthlyAttendanceController extends Controller
{
    public function create(request $request)
    {
        $request->validate([
            "employee_name" => 'required',
            "year" => 'required',
            "month" => 'required',
            "in_time" => 'required',
            "out_time" => 'required'
        ]);
        $data = new  MonthlyAttendance();
        $data->employee_name = $request->employee_name;
        $data->year = $request->year;
        $data->month = $request->month;
        $data->in_time = $request->in_time;
        $data->out_time = $request->out_time;
        $data->save();
        toastr()->success('Monthly Attendance Type Added Successfully');
        return back();
    }

    // public function show()
    // {
    //     $monthlyattendancedata =  MonthlyAttendance::all();
    //     $user = User::all();
    //     return view('frontend.attendance.monthlyattendance', compact('monthlyattendancedata','user'));
    // }

    public function show()
    {
        $MonthlyAttendance = MonthlyAttendance::all();
        $userData = User::all();

        // Initialize an empty array to store combined data
        $combinedData = [];

        foreach ($MonthlyAttendance as $attendance) {
            $userId = $attendance->user_id; // Adjust this based on your actual relationship

            // Find the user data for the corresponding user_id
            $user = $userData->where('id', $userId)->first();

            // Add the combined data to the array
            $monthlyAttendanceData[] = [
                'attendance' => $attendance,
                'user' => $user,
            ];
        }

        return view('frontend.attendance.monthlyattendance', compact('monthlyAttendanceData'));
    }

}
