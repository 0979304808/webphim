<?php

namespace App\Http\Controllers\BackEnd\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Register\RegisterRequest;
use App\Repositories\Users\Contract\UserRepositoryInterface;
use App\Models\User;

class RegisterController extends Controller
{
    // private $user; 
    // public function __construct(UserRepositoryInterface $user){
    //     $this->user = $user;
    // }
    // View register
    public function index(){
        return view('backend.auth.register');
    }

    // Register 
    public function register(RegisterRequest $request)
    {
        $params = $request->only('name', 'email', 'password');
            if ($params['password'] === $request->get('password_confirmation')) {
                User::create($params);
                return redirect()->back()->with('msg', 'Đăng ký thành công');
            };
            return redirect()->back()->with('err', 'Đăng ký thất bại');
    }
}
