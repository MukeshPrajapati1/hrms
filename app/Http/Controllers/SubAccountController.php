<?php

namespace App\Http\Controllers;
use App\Models\SubAccount;

use Illuminate\Http\Request;

class SubAccountController extends Controller
{
    public function create(request $request)
    {
        $data = new  SubAccount();
        $data->sub_type = $request->sub_type;
        $data->account_name = $request->account_name;
        $data->create_date = $request->create_date;
        $data->save();
        toastr()->success('Sub Type Added Successfully');
        return back();
    }

    public function show()
    {
        $subaccountdata =  SubAccount::all();
        return view('frontend.accounts.subaccount', compact('subaccountdata'));
    }

    public function delete($id)
    {
        $temp =  SubAccount::find($id);
        $temp->delete();
        toastr()->success('Data Deleted Successfully');
        return back();
    }

    public function update(request $request, $id)
    {
        $data =   SubAccount::find($id);
        $data->subtype = $request->subtype;
        $data->account_name = $request->account_name;
        $data->create_date = $request->create_date;
        $data->update();
        toastr()->success('Sub Account Updated Successfully');
        return back();
    }
}
