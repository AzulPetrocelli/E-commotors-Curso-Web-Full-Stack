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
        ]);

        // Intentar obtener al usuario con el correo proporcionado
        $user = User::where('email', $request->email)->first();

        // Verificar si el usuario existe y si la contraseña es correcta
        if ($user && Hash::check($request->password, $user->password)) {
            // El login es exitoso, inicia sesión
            Auth::login($user);

            // Redirige al usuario a la ruta 'admin' después del login exitoso
            return redirect()->route('admin');
        }

        // Si no se encuentra el usuario o las credenciales no coinciden
        return back()->withErrors(['email' => 'No se encontró el usuario o las credenciales son incorrectas.']);
    }
}

