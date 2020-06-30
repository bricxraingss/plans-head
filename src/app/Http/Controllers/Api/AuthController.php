<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  /**
   * Get a JWT token via given credentials.
   *
   * @param  \Illuminate\Http\Request  $request
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function login(Request $request)
  {
    $credentials = $request->only('email', 'password');
    
    if (! $token = $this->guard('api')->attempt($credentials)) {
      return response()->json(['error' => 'Unauthorized'], 401);
    }
    
    return $this->respondWithToken($token);
  }

  /**
   * Get the authenticated User
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function me()
  {
    return response()->json($this->guard()->user());
  }

  /**
   * Log the user out (Invalidate the token)
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function logout()
  {
    $this->guard('api')->logout();

    return response()->json(['message' => 'Successfully logged out']);
  }

  /**
   * Refresh a token.
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function refresh()
  {
    try {
      $response = $this->respondWithToken($this->guard()->refresh());
    } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
        return response()->json(['message'=>'invalid token','result'=>false], 500);
    } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {
        return response()->json(['message' => $e->getMessage(),'result'=>false], 500);
    }
    
    return $response;
  }

  /**
   * Get the token array structure.
   *
   * @param  string $token
   *
   * @return \Illuminate\Http\JsonResponse
   */
  protected function respondWithToken($token)
  {
    return response()->json([
        'access_token' => $token,
        'token_type' => 'bearer',
        'expires_in' => $this->guard()->factory()->getTTL() * 60
    ]);
  }

  /**
   * Get the guard to be used during authentication.
   *
   * @return \Illuminate\Contracts\Auth\Guard
   */
  public function guard()
  {
    return Auth::guard('api');
  }
}
