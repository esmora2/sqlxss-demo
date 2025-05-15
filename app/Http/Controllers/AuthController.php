<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->method === 'insecure') {
            // ⚠️ Método vulnerable a SQL Injection (intencional para simulación)
            $query = "SELECT * FROM users WHERE email = '{$request->email}' AND password = '{$request->password}'";
            $users = DB::select($query);

            if (!empty($users)) {
                // Simulamos que el atacante logra listar todos los usuarios
                return view('users', ['users' => $users]);
            }

            return back()->withErrors(['message' => 'Credenciales incorrectas']);
        }

        // ✅ Método seguro con Eloquent y verificación de contraseña hasheada
        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // 🔐 Iniciar sesión para que funcione el middleware 'auth'
            auth()->login($user);

            // ✅ Redirigir según el rol
            if ($user->hasRole('admin')) {
                return redirect()->route('admin');
            }

            return redirect()->route('comments');
        }

        return back()->withErrors(['message' => 'Credenciales incorrectas']);
    }
}
