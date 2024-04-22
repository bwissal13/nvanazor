<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

 
    public function index()
    {
        $users = $this->userService->getAllUsers();
        return view('dashboard.user', compact('users'));
    }
  
    public function update(Request $request, $user_id){
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);
    
        $user = User::findOrFail($user_id);
        $user->update($data);
    
        return redirect()->route('home', ['user' => $user_id])->with('status', 'Profile updated successfully');
    }
    
    
}
