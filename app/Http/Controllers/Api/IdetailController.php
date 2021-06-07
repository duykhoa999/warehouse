<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Idetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = 1;
        $data = Idetail::all();
        if ($data->isEmpty()) {
            $status = -1;
            $message = "No Data";
        }
        else {
            $message = "Successful!";
            return response()->json([
                'status' => $status,
                'message' => $message,
                'data' => $data,
            ]);
        }
        return response()->json([
            'status' => $status,
            'message' => $message,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'import_id' => 'required|numeric',
            'product_id' => 'required|numeric',
            'amount' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => -2,
                'errors' => $validator->errors()->toArray(),
            ]);
        }
        $idetail = Idetail::create($request->all());

        return response()->json([
            'status' => 1,
            'data' => $idetail,
            'message' => "Create Export Detail Successful!",
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Idetail  $idetail
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $status = 1;
        $importDetail = Idetail::find($id);
        if ($importDetail == null) {
            $status = -1;
            $message = "Cannot find this detail!";
        }
        else {
            $message = "Successful!";
            return response()->json([
                'status' => $status,
                'message' => $message,
                'data' => $importDetail,
            ]);
        }
        return response()->json([
            'status' => $status,
            'message' => $message,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Idetail  $idetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $status = 1;
        $importDetail = Idetail::find($id);
        if ($importDetail == null) {
            $status = -1;
            $message = "Cannot find this detail!";
        }
        else {
            $importDetail->update($request->all());
            $message = "Update Successful!";
        }
        return response()->json([
            'status' => $status,
            'message' => $message,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Idetail  $idetail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = 1;
        $exportDetail = Idetail::find($id);
        if ($exportDetail == null) {
            $status = -1;
            $message = "Cannot find this detail!";
        }
        else {
            $exportDetail->delete();
            $message = "Delete Successful!";
        }
        return response()->json([
            'status' => $status,
            'message' => $message,
        ]);
    }
}
