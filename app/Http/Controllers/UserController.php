<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all users (latest first)
        $users = User::orderBy('id', 'desc')->get();

    // Pass users to view
    return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ✅ Validation
        $request->validate([
            'name'     => 'required|string|max:255',
            'gender'   => 'required|in:male,female',
            'role'     => 'required|in:admin,user',
            'status'   => 'required|in:active,blocked',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed', // needs password_confirmation field
        ]);


        // ✅ Create and save user
        User::create([
            'name'     => $request->name,
            'gender'   => $request->gender,
            'role'     => $request->role,
            'status'   => $request->status,
            'email'    => $request->email,
            'password' => Hash::make($request->password), // encrypt password
        ]);

        // ✅ Redirect or return response
        return redirect()->route('users.index')->with('success', 'User created successfully.');
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
