<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminLoginRequest;
use App\Http\Resources\Admin\AdminAuthResource;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AdminAuthController extends Controller
{
    /*
        Login Part
    */
    public function login(AdminLoginRequest $request)
    {

        $user = Admin::where('phone', $request->phone)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'phone' => ['The provided credentials are incorrect.'],
            ]);
        }
        return $this->makeToken($user);
    }
    /*
        Make Token
    */
    public function makeToken($user)
    {
        $token = $user->createToken('admin-token')->plainTextToken;
        return (new AdminAuthResource($user))
            ->additional([
                'meta' => [
                    'token' => $token,
                    'token_type' => 'Bearer'
                ]
            ]);
    }

    /*
        Logout Part
    */
    public function logout(Request $request){
        $request->user()->tokens()->delete();
        return send_ms('Successfully Admin Logout',true,200);
    }
    /*
        Current User
    */
    public function current_user(Request $request){
        // return AuthResource::make($request->user());
        return response()->json([ 'data' => $request->user() ]);
    }

}
