<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function create(request $request)
    {

        if (!$request->name) {
            return response()->json([
                "error" => true,
                "message" => "name not found",
                "key" => "name",
            ]);
        }
        if (!$request->DoB) {
            return response()->json([
                "error" => true,
                "message" => "DoB not found",
                "key" => "DoB",
            ]);
        }
        if (!$request->gender) {
            return response()->json([
                "error" => true,
                "message" => "gender not found",
                "key" => "gender",
            ]);
        }
        if (!$request->marital_status) {
            return response()->json([
                "error" => true,
                "message" => "marital_status not found",
                "key" => "marital_status",
            ]);
        }
        if (!$request->personal_no) {
            return response()->json([
                "error" => true,
                "message" => "personal_no not found",
                "key" => "personal_no",
            ]);
        }
        if (!$request->office_no) {
            return response()->json([
                "error" => true,
                "message" => "office_no not found",
                "key" => "office_no",
            ]);
        }
        if (!$request->email) {
            return response()->json([
                "error" => true,
                "message" => "email not found",
                "key" => "email",
            ]);
        }
        if (!$request->address) {
            return response()->json([
                "error" => true,
                "message" => "address not found",
                "key" => "address",
            ]);
        }
        if (!$request->image) {
            return response()->json([
                "error" => true,
                "message" => "image not found",
                "key" => "image",
            ]);
        }

        $user = new User();
        $user->name = $request->name;
        $user->DoB = $request->DoB;
        $user->gender = $request->gender;
        $user->marital_status = $request->marital_status;
        $user->personal_no = $request->personal_no;
        $user->office_no = $request->office_no;
        $user->email = $request->email;
        $user->address = $request->address;
        // $user->image = $request->image;

        if ($request->hasfile('image')) {

            $image = $request->file('image');

            $ext = $image->getClientOriginalExtension();

            $image_name = date('y-m-d').'-'.rand().'.'.$ext;

            $image->move('upload/document/', $image_name);

            $user->image = $image_name;
        }
        $user->save();
        return response()->json([
            'error' => false,
            'message' => 'enquiry created successfully',
            'data' => $user
        ]);

    }

    public function profile_update(request $request, $id)
    {

        if (!$request->name) {
            return response()->json([
                "error" => true,
                "message" => "name not found",
                "key" => "name",
            ]);
        }
        if (!$request->DoB) {
            return response()->json([
                "error" => true,
                "message" => "DoB not found",
                "key" => "DoB",
            ]);
        }
        if (!$request->marital_status) {
            return response()->json([
              "error" => true,
              "message" => "marital_status not found",
              "key" => "marital_status",
          ]);
        }
        if (!$request->personal_no) {
            return response()->json([
              "error" => true,
              "message" => "personal_no not found",
              "key" => "personal_no",
          ]);
        }
        if (!$request->office_no) {
            return response()->json([
              "error" => true,
              "message" => "office_no not found",
              "key" => "office_no",
          ]);
        }
        if (!$request->email) {
            return response()->json([
              "error" => true,
              "message" => "email not found",
              "key" => "email",
          ]);
        }
        if (!$request->address) {
            return response()->json([
                "error" => true,
                "message" => "address not found",
                "key" => "address",
            ]);
        }

        $data = User::where('id', $id)->first();
        $data->name = $request->name;
        $data->DoB = $request->DoB;
        $data->marital_status = $request->marital_status;
        $data->personal_no = $request->personal_no;
        $data->office_no = $request->office_no;
        $data->email = $request->email;
        $data->address = $request->address;

        if ($request->hasfile('image')) {

            $image = $request->file('image');

            $ext = $image->getClientOriginalExtension();

            $image_name = date('y-m-d').'-'.rand().'.'.$ext;

            $image->move('upload/document/', $image_name);

            $data->image = $image_name;
        }
        $data->update();
        return response()->json([
            'error' => false,
            'message' => 'enquiry created successfully',
            'data' => $data
        ]);
    }

    public function check_in(request $request, $id)
    {
        if (!$request->time) {
            return response()->json([
              "error" => true,
              "message" => "time not found",
              "key" => "time",
          ]);
        }

        $data = User::where('id', $id)->first();
        $data->time = $request->time;

        $data->update();
        return response()->json([
            'error' => false,
            'message' => 'enquiry created successfully',
            'data' => $data
        ]);
    }

    public function check_out(request $request, $id)
    {
        if (!$request->time) {
            return response()->json([
              "error" => true,
              "message" => "time not found",
              "key" => "time",
          ]);
        }

        $data = User::where('id', $id)->first();
        $data->time = $request->time;

        $data->update();
        return response()->json([
            'error' => false,
            'message' => 'enquiry created successfully',
            'data' => $data
        ]);
    }
}
