<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $user = auth()->user();

        // Redirigir según cargo_id
        switch ($user->cargo_id) {
            case 1:
                return redirect()->route('admin.dashboard');
            case 2:
                return redirect()->route('radio.dashboard');
            case 3:
                return redirect()->route('television.dashboard');
            case 4:
                return redirect()->route('tecnicos.dashboard');
            case 5:
                return redirect()->route('movil.dashboard'); // 👈 este es tu caso actual
            default:
                return redirect()->route('dashboard'); // por si algún cargo no coincide
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
