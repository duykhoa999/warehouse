<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class UserController extends Controller
{
    public function login(Request $request){ 
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);
 
        if ($validator->fails()) {
            return response()->json([
                'status' => 'fails',
                'message' => $validator->errors()->first(),
                'errors' => $validator->errors()->toArray(),
            ]);
        }
 
        $credentials = request(['email', 'password']);
 
        if (!Auth::attempt($credentials)) {
            return response()->json([
                'status' => 'fails',
                'message' => 'Unauthorized'
            ], 401);
        }
        return response()->json([
            'status' => 'success',
            // 'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            // 'expires_at' => Carbon::parse(
            //     $tokenResult->token->expires_at
            // )->toDateTimeString()
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = 1;
        $data = User::all();
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
        $user = User::create($request->all());
        
        return response()->json($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $status = 1;
        $user = User::find($id);
        if ($user == null) {
            $status = -1;
            $message = "Cannot find this user!";
        }
        else {
            $message = "Successful!";
            return response()->json([
                'status' => $status,
                'message' => $message,
                'data' => $user,
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
     * @param  \App\Models\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $status = 1;
        $user = User::find($id);
        if ($user == null) {
            $status = -1;
            $message = "Cannot find this user!";
        }
        else {
            $user->update($request->all());
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
     * @param  \App\Models\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = 1;
        $user = User::find($id);
        if ($user == null) {
            $status = -1;
            $message = "Cannot find this user!";
        }
        else {
            $user->delete();
            $message = "Delete Successful!";
        }
        return response()->json([
            'status' => $status,
            'message' => $message,
        ]);
    }
}
