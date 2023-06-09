<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index() {
        $user = Auth::user();
        return view('profile.index', compact('user'));
    }

    public function edit() {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }
    
    public function update(Request $request) {
        $user = User::findorFail(Auth::user()->id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|string|unique:users,email,'.Auth::id(),
            'address' => 'required',
            'phone_number' => 'required|numeric',
            'job' => 'required',
            'gender' => 'required',
            'image' => 'required|image',
            'biography' => 'required',
        ]);

        $image = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('profiles', $image, 'public_path');

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'job' => $request->job,
            'gender' => $request->gender,
            'image' => $path,
            'biography' => $request->biography,
        ]);
        return redirect()->route('profile');
    }
}