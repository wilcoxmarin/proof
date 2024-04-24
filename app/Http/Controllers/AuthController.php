<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginPostRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function index(): View
    {
        return view("components.auth.login");
    }

    public function getInto(LoginPostRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        if (Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']], true)) {
            $user = Auth::user();
            $code_rol = $user->rol->code;
            // esto lo hice asi por que no entiendo no me funciono el enum
            if ($code_rol === "ADM"){
                Auth::login($user);
                return redirect()->intended('companies');
            }

            return back()->withErrors([
                'email' => 'No tienes permiso para ingresar!',
            ])->onlyInput('email');
       }
    }

    public function logOut(LoginPostRequest $request): RedirectResponse
    {
        dd('ingrese');
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
