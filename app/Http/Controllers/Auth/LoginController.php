<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Auth;
use Hash;

class LoginController extends Controller
{
    public function store(LoginRequest $request)
    {
        $validated = $request->validated();

        try {
            $user = User::where('email', $validated['email'])->first();

            if (
                !$user ||
                Hash::check($validated['password'], $user->password) !== true
            ) {
                throw new \Exception('Неверные учетные данные');
            }

            Auth::login($user);

            return redirect()->route('index')->with('success', 'Вход выполнен');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function destroy()
    {

    }
}
