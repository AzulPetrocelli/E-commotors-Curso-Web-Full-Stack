<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validar los campos de entrada
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ], [
            "email.required" => "Ingresar el mail",
            "email.email" => "El mail ingresado no es valido",
            "password.required" => "Ingresar la contraseña",
            "password.min" => "La contraseña debe tener al menos 6 caracteres"
        ]);

        // Intentar obtener al usuario con el correo proporcionado
        $user = User::where('email', $request->email)->first();

        // Verificar si el usuario existe y si la contraseña es correcta
        if ($user && Hash::check($request->password, $user->password)) {
            // El login es exitoso, inicia sesión
            Auth::login($user);

            // Redirige al usuario a la ruta 'admin' después del login exitoso
            return redirect()->route('admin');

        } elseif (!$user) {
            // Notifica que el usuario no es valido
            return back()->withErrors(['email' => 'El usuario ingresado no está registrado']);
        } elseif (!Hash::check($request->password, $user->password)) {
            // Notifica que la contraseña no es valida
            return back()->withErrors(['password' => 'La contraseña ingresada no es correcta']);
        }
    }
}

