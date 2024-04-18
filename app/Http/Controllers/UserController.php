<?php

namespace App\Http\Controllers;

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
    public function update(Request $request,$id){
        $data = $request->validate([]);
        $user = $this->userService->update($id,$data);
        return redirect()->route('artists.show', $id)->with('status', 'Profile updated successfully');
    }
}
