<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->request->add(['username' => Str::slug($request->username)]);

        // Validation
        $data = $request->validate([
            'name' => ['required', 'max:20'],
            'username' => ['required', 'unique:users', 'min:3', 'max:20'],
            'email' => ['required', 'unique:users', 'email', 'max:60'],
            'password' => ['required', 'confirmed', 'min:6'],
        ]);

        $data['password'] = bcrypt($data['password']); //Hashing password

        User::create($data); //Creating user

        //Authenticate
        auth()->attempt($request->only('email', 'password'));

        //Redirect

        return redirect()->route('catalogue');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
