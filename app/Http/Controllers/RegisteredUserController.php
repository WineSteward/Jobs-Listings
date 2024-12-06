<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Container\Attributes\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage as FacadesStorage;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth/register');
    }

    /**
     * Store a newly created User in storage.
     */
    public function store(Request $request)
    {
        $userAttributes = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', Password::min(3)],
        ]);


        $user = User::create($userAttributes);

        
        if (! is_null($request->input('employer')))
        {

            $employerAttributes = $request->validate([
                'employer' => ['required'],
                'logo' => [File::types('png', 'jpg', 'webp')],
            ]);
    
            $logoPath = $request->file('logo')->store('logos', 'public');

            $user->employer()->create([
                'name' => $employerAttributes['employer'],
                'logo' => $logoPath
            ]);
        }

        Auth::login($user);

        return redirect('/');
    }
}
