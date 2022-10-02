<?php

namespace App\Http\Controllers\Api\Seller;

use App\Http\Controllers\Controller;
use App\Http\Requests\Seller\SellerLoginRequest;
use App\Http\Resources\Seller\SellerAuthResource;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class SellerAuthController extends Controller
{
    /*
        Login Part
    */
    public function login(SellerLoginRequest $request)
    {

        $user = Seller::where('phone', $request->phone)->first();

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
        $token = $user->createToken('seller-token')->plainTextToken;
        return (new SellerAuthResource($user))
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
    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return send_ms('Successfully Seller Logout', true, 200);
    }
    /*
        Current User
    */
    public function current_user(Request $request)
    {
        // return AuthResource::make($request->user());
        return response()->json(['data' => $request->user()]);
    }
}
