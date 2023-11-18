<?php

namespace App\Http\Controllers;

use App\Models\FinancialYear;

use Illuminate\Http\Request;

class FinancialYearController extends Controller
{
    public function create(request $request)
    {
        $data = new FinancialYear();
        $data->financial_year = $request->financial_year;
        $data->financial_year_start_date = $request->financial_year_start_date;
        $data->financial_year_end_date = $request->financial_year_end_date;
        $data->save();
        toastr()->success('Financial Year Added Successfully');
        return back();
    }

    public function show()
    {
        $finalyeardata = FinancialYear::all();
        return view('frontend.accounts.financialYear', compact('finalyeardata'));
    }

    public function delete($id)
    {
        $temp = FinancialYear::find($id);
        $temp->delete();
        toastr()->success('Data Deleted Successfully');
        return back();
    }

    public function update(request $request, $id)
    {
        $data =  FinancialYear::find($id);
        $data->financial_year = $request->financial_year;
        $data->financial_year_start_date = $request->financial_year_start_date;
        $data->financial_year_end_date = $request->financial_year_end_date;
        $data->update();
        toastr()->success('Financial Year Updated Successfully');
        return back();
    }



}
