<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Expr\Print_;

class UserControllers extends Controller

{
    public function login()
    {
        return view('login');
    } 

    // public function customLogin(Request $request)
    // {
    //     print('password');
    //     try {
    //         $validateUser = Validator::make(
    //             $request->all(),
    //             [
    //                 'email' => 'required',
    //                 'password' => 'required'
    //             ]
    //         );
    //         if ($validateUser->fails()) {
    //             return response()->json([
    //                 'status' => false,
    //                 'message' => 'validation error',
    //                 'errors' => $validateUser->errors()
    //             ], 401);
    //         }
    //         $validateEmail = Validator::make($request->all(), ['email' => 'email',]);
    //         $user = User::whereEmail($request->email)->first();
    //         if ($validateEmail->fails()) {
    //         //     $user = User::wherePhoneNumber($request->email)->first();
    //         // } else {
    //             $user = User::whereEmail($request->email)->last();
                
    //         }

    //         if (!isset($user)) {
    //             return response()->json([
    //                 'status' => false,
    //                 'message' => 'User not found',
    //             ], 401);
    //         }

    //         if (!Auth::attempt(['email' => $user->email, 'password' => $request->password])) {
    //             echo( $user->email);
    //             echo("jjjjjjj");
    //             echo( $request);
    //             return response()->json([
    //                 'status' => false,
    //                 'message' => 'Email & Password does not match with our record.',
    //             ], 401);
    //         }
    //         return response()->json([
    //             'status' => true,

    //             // 'token' => $user->createToken("API TOKEN")->plainTextToken,
    //             'user' => $user,
    //             // 'token_type' => 'Bearer',
    //             redirect("home")->withSuccess('Login details are not valid'),
    //         ], 200);
    //     } catch (\Throwable $th) {
    //         return response()->json([
    //             'status' => false,
    //             'message' => $th->getMessage()
    //         ], 500);
    //     }
    // }
     public function customLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $credentials = $request->only('email','password');
        $email=$request->input('email');
        $password=$request->input('password');
       $user = User::where([
            'email' => $request->email,
            'password' => $request->password,
            // 'password' => Hash::make($data['password'])
          ])->first();
        //  echo($user[0]["email"]);
        if ( $user ) {
            return redirect("home")->withSuccess('Login details are not valid');
            echo("good");
        }else{
          
            echo("false");
            return redirect("login")->withSuccess('Login details are not valid');
        }

        // echo(  $email);
        // if (Auth::attempt($credentials)) {
        //     echo('Some message here.');
        //     return redirect()->intended('home')
        //                 ->withSuccess('Signed in');
                        
        // }else{
        //     // echo($credentials);
        //     echo("credentials");
        //     // return redirect("login")->withSuccess('Login details are not valid');
        // }
     
    }

    public function registration()
    {
        return view('registration');
    }
      
    public function dd()
    {
        return view('dd');
    }
    public function customRegistration(Request $request)
    {  
        $request->validate([
 
            'email' => 'required|email|unique:users',
            'current-password' => 'required',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("login")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'email' => $data['email'],
        'password' => $data['current-password']
        // 'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function home()
    {
        return view('dd')->render();
        // if(Auth::check()){
        //     return view('dd')->render();
        // }else{
        //     // @include('common.alert');
        //     return redirect("home")->withSuccess('You are not allowed to access');
        // }
  
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }


}
