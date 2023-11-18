<?php

namespace App\Http\Controllers;
use App\Models\OpeningBalance;

use Illuminate\Http\Request;

class OpeningBalanceController extends Controller
{
    public function create(request $request)
    {

        $request->validate([
            "financial_year" => 'required',
            "date" => 'required',
            "account_name" => 'required',
            "subtype" => 'required',
            "debit" => 'required',
            "credit" => 'required',
            "account" => 'required',
            "action" => 'required',
        ]);

        $data = new  OpeningBalance();
        $data->financial_year = $request->financial_year;
        $data->date = $request->date;
        $data->account_name = $request->account_name;
        $data->subtype = $request->subtype;
        $data->debit = $request->debit;
        $data->credit = $request->credit;
        $data->account = $request->account;
        $data->action = $request->action;
        $data->save();
        toastr()->success('Sub Type Added Successfully');
        return back();


    }



    public function show()
    {
        $openingbalancedata =  OpeningBalance::all();
        return view('frontend.accounts.openingbalance', compact('openingbalancedata'));
    }

    public function delete($id)
    {
        $temp =  OpeningBalance::find($id);
        $temp->delete();
        toastr()->success('Data Deleted Successfully');
        return back();
    }

    public function update(request $request, $id)
    {
        $data =   OpeningBalance::find($id);
        $data->financial_year = $request->financial_year;
        $data->date = $request->date;
        $data->account_name = $request->account_name;
        $data->subtype = $request->subtype;
        $data->debit = $request->debit;
        $data->credit = $request->credit;
        $data->account = $request->account;
        $data->action = $request->action;
        $data->update();
        toastr()->success('Opening Balance Updated Successfully');
        return back();
    }
}
