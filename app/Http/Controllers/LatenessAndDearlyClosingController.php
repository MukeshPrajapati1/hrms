<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LatenessAndDearlyClosing;

class LatenessAndDearlyClosingController extends Controller
{


    public function create(request $request)
    {
        $request->validate([
            "employee_name" => 'required',
            "year" => 'required',
            "month" => 'required'
        ]);
        $data = new LatenessAndDearlyClosing();
        $data->employee_name = $request->employee_name;
        $data->year = $request->year;
        $data->month = $request->month;
        $data->save();
        toastr()->success('Lateness And Early Closing Details Successfully');
        return back();
    }

    public function show()
    {
        $latenessAndEarlyClosingdata =  LatenessAndDearlyClosing::all();
        return view('frontend.attendance.latenessandearlyclosing', compact('latenessAndEarlyClosingdata'));
    }

}
