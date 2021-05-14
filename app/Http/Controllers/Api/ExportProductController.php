<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ExportProduct;
use Illuminate\Http\Request;

class ExportProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $status = 1;
        // $data = ExportProduct::all();
        // if ($data->isEmpty()) {
        //     $status = -1;
        //     $message = "No Data";
        // }
        // else {
        //     $message = "Successful!";
        //     return response()->json([
        //         'status' => $status,
        //         'message' => $message,
        //         'data' => $data,
        //     ]);
        // }
        // return response()->json([
        //     'status' => $status,
        //     'message' => $message,
        // ]);
        echo "Hello World!";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $exportProduct = ExportProduct::create($request->all());

        return response()->json([
            'status' => 1,
            'data' => $exportProduct,
            'message' => "Create Export Detail Successful!",
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExportProduct  $exportProduct
     * @return \Illuminate\Http\Response
     */
    public function show(ExportProduct $exportProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExportProduct  $exportProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExportProduct $exportProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExportProduct  $exportProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExportProduct $exportProduct)
    {
        //
    }
}
