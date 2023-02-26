<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
class PassportAuthController extends Controller
{
    /**
     * Registration
     */
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
 
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
       
        $token = $user->createToken('LaravelAuthApp')->accessToken;
 
        return response()->json(['token' => $token], 200);
    }
 
    /**
     * Login
     */
    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
 
        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('LaravelAuthApp')->accessToken;
          //  $success['name'] =  $user->name;
         $success= auth()->guard('api')->user();

          return response()->json(['token' => $token,'user' => auth()->user(),   'message' => "User logged in successfully",],
             200);
        }
         else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }   
}

// $user = Auth::user(); 
// $token = auth()->user()->createToken('LaravelAuthApp')->accessToken;
// $success['name'] =  $user->name;
// return response()->json([
//     'token' => $token,
//     'message' => "User logged in successfully",
//     'post' => $success
// ], 200);