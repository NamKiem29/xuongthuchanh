<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthenticationController extends Controller
{
    //
    public function showLogin()
    {
        return view('login.login');
    }

    public function postLogin(Request $request)
    {
        $useLogin = [
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if(Auth::attempt($useLogin)){
            if(Auth::user()->role == 'Admin'){
                return redirect()->route('admin.products.list-product')->with([
                    'message'=>"Đăng nhập thành công !"
                ]);
            }
            else{
                return redirect()->route('client.home')->with([
                    'message'=>"Đăng nhập thành công !"
                ]);
            }
        }else{
            return redirect()->back()->with([
                'message'=> "Email hoặc mật khẩu bị sai ! Vui lòng đăng nhập lại",
            ]);
        }
    }

    public function logout(Request $request) {
        Auth::logout();
    
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }

    public function register(){
        return view('login.registration');
    }

    public function saveRegister(Request $request){
        $check = User::where('email', $request->Email)->exists();
        if($check){
            return redirect()->back()->with([
                'message'=> "Email đã tồn tại",
            ]);
        }else{
            $data = [
                'name' => $request->Username,
                'email' => $request->Email,
                'password' =>$request->Password,
                
            ];
            $password = $request->ConfirmPassword;
            if($password !== $data['password']){
                return redirect()->back()->with([
                    'checkpass'=> "Mật khẩu không khớp",
                ]);
            }
            else{
                $newUser = User::created($data);

                return view('login.login')->with(['message' => 'Đăng kí thành công, vui lòng đăng nhập lại !']);
            }

        }
    }
}
