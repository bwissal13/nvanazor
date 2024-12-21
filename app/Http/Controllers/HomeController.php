<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Repositories\UserRepositoryInterface;
use App\Repositories\RoleRepositoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $userRepository;
    protected $roleRepository;

    public function __construct(UserRepositoryInterface $userRepository, RoleRepositoryInterface $roleRepository)
    {
        $this->middleware('auth');
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
    }

    // public function index()
    // {
    //     $user = auth()->user();
    //     $roles = $this->userRepository->getUserRoles($user);
    //     $isAdmin = $this->userRepository->hasRole($user, 'admin');
    //     $greeting = $isAdmin ? 'Hi Admin' : 'Hi User';

    //     return view('home', ['greeting' => $greeting, 'roles' => $roles]);
    // }
    public function index()
    {
        $user = auth()->user();
        $roles = $this->userRepository->getUserRoles($user);
        $isAdmin = $this->userRepository->hasRole($user, 'admin');
        
        // Check if the user has the 'artist' role
        $isArtist = $this->userRepository->hasRole($user, 'artist');
    
        if ($isAdmin) {
            $greeting = 'Hi Admin';
        } elseif ($isArtist) {
            // Redirect to the artist creation form
            return redirect()->route('artists.create');
        } else {
            $greeting = 'Hi User';
        }
    
        return view('home', ['greeting' => $greeting, 'roles' => $roles]);
    }
    
    public function showChangeRoleForm()
    {
        $users = $this->userRepository->getAllUsers();
        $allRoles = $this->roleRepository->getAllRoles();

        return view('change_role', compact('users', 'allRoles'));
    }

    public function changeRole(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'role' => 'required|exists:roles,id',
        ]);

        $user = $this->userRepository->findUserById($request->input('user_id'));
        $role = $this->roleRepository->findRoleById($request->input('role'));

        $this->userRepository->assignRole($user, $role);

        return redirect()->route('show-change-role')->with('success', 'Role changed successfully');
    }
}
