<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('/'); // Redirect to intended page
        }

        return back()->withErrors([
            'email' => 'Thông tin đăng nhập không chính xác.',
        ]);
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();
        return $this->handleUserLogin($googleUser);
    }

    public function redirectToGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleGithubCallback()
    {
        $githubUser = Socialite::driver('github')->user();
        return $this->handleUserLogin($githubUser);
    }

    protected function handleUserLogin($socialUser)
    {
        $user = User::where('email', $socialUser->getEmail())->first();

        if (!$user) {
            // Nếu người dùng chưa tồn tại, tạo mới
            $user = User::create([
                'name' => $socialUser->getName(),
                'email' => $socialUser->getEmail(),
                'password' => bcrypt(bin2hex(random_bytes(8))), // Tạo mật khẩu ngẫu nhiên
            ]);
        }

        Auth::login($user, true);
        return redirect()->intended('/'); // Chuyển hướng đến trang chính
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login'); // Chuyển hướng về trang chính
    }
}
