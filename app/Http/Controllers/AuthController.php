<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    /**
     * Register a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        

        $token = JWTAuth::fromUser($user);

        return redirect()->route('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (auth()->attempt($credentials)) {
            // Autenticação foi bem-sucedida. Redirecionar para a rota desejada.
            return redirect()->route('employee');
        }
    
        // Autenticação falhou. Redirecionar de volta com erro.
        return back()->withErrors(['message' => 'Usuário ou senha inválidos']);
    }

    


    
    public function showRegistrationForm()
    {
        return view('user.showRegistrationForm');
    }

    public function showLoginForm()
    {
        return view('user.showLoginForm');
    }
}

