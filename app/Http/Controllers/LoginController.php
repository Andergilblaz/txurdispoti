<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Podcast;
use Illuminate\Support\Facades\Auth;
use function Laravel\Prompts\alert;
use function PHPUnit\Framework\isNull;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function loginValidation(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'El correo es obligatorio.',
            'email.email' => 'El correo no se encuentra en la base de datos.',
            'password.required' => 'La contraseña es obligatoria.',
        ]);

        $user = User::where('email', $request->email)->first();

        if (is_null($user)) {
            return back()->withErrors(['email' => 'El correo no está en la base de datos']);
        }

        if (!password_verify($request->password, $user->password)) {
            return back()->withErrors(['password' => 'Contraseña incorrecta']);
        }


        Auth::login($user);
        
      

        $podcasts = Podcast::all();
        return redirect()->route('podcast.index', compact('podcasts'));
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

}

