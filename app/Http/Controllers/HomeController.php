<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        return view('dashboard', compact('users'));
    }

    public function edit(User $user)
    {
        return view('edit', compact('user'));
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'level' => '',
        ]);
        
        // $user->level = $request->input('level');
        // dd($data);
        $user->update($data);
        return redirect("/");

        
    }
}
