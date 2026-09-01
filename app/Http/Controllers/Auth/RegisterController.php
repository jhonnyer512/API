<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * Mostrar formulario de registro
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }


    /**
     * Registrar un nuevo usuario
     */
    public function register(Request $request)
    {
        // Validar información
        $request->validate([
            'name' => [
                'required',
                'string',
                'max:255'
            ],

            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:users,email'
            ],

            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed'
            ],
        ], [

            'name.required' =>
                'El nombre es obligatorio.',

            'email.required' =>
                'El correo electrónico es obligatorio.',

            'email.email' =>
                'Ingresa un correo electrónico válido.',

            'email.unique' =>
                'Este correo ya está registrado.',

            'password.required' =>
                'La contraseña es obligatoria.',

            'password.min' =>
                'La contraseña debe tener mínimo 8 caracteres.',

            'password.confirmed' =>
                'Las contraseñas no coinciden.',
        ]);


        // Crear usuario
        $user = User::create([

            'name' => $request->name,

            'email' => $request->email,

            'password' => Hash::make($request->password),

        ]);


        // Iniciar sesión automáticamente
        Auth::login($user);


        // Redireccionar al dashboard
        return redirect()->route('dashboard')
            ->with('success', '¡Cuenta creada correctamente!');
    }
}