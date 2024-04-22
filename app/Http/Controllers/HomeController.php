<?php

namespace App\Http\Controllers;

use App\Models\ForumPost;
use App\Models\ForumTopic;
use App\Models\Role;
use App\Models\User;
use App\Repositories\UserRepositoryInterface;
use App\Repositories\RoleRepositoryInterface;
use App\Services\ArtistService;
use App\Services\ArtworkService;
use App\Services\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;

class HomeController extends Controller
{
    protected $userRepository;
    protected $roleRepository;
    protected $categoryService;
    protected $artworkService;
    protected $artistService;

    public function __construct(UserRepositoryInterface $userRepository, RoleRepositoryInterface $roleRepository, CategoryService $categoryService, ArtworkService $artworkService, ArtistService $artistService)
    {
        // $this->middleware('auth');
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
        $this->categoryService = $categoryService;
        $this->artworkService = $artworkService;
        $this->artistService = $artistService;
    }


    // public function index()
    // {
    //     $user = auth()->user();
    //     $roles = $this->userRepository->getUserRoles($user);
    //     $isAdmin = $this->userRepository->hasRole($user, 'admin');
    //     $categories = $this->categoryService->getAllCategories();
    //     // Check if the user has the 'artist' role
    //     $isArtist = $this->userRepository->hasRole($user, 'artist');
    //     $artworks = $this->artworkService->all();
    //     if ($isAdmin) {
    //         $greeting = 'Hi Admin';
    //     } elseif ($isArtist) {
    //         // Redirect to the artist creation form
    //         $greeting = 'Hi artist';
    //         // return redirect()->route('artists.create');
    //     } else {
    //         $greeting = 'Hi User';
    //     }
    //     $artists = $this->artistService->all();
    //     return view('home', ['greeting' => $greeting, 'roles' => $roles, 'categories' => $categories, 'artworks' => $artworks, 'artists' => $artists]);
    // }
    public function index()
    {
        // Retrieve necessary information from the database
        $categories = $this->categoryService->getAllCategories();
        $artworks = $this->artworkService->all();
        $artists = $this->artistService->all();
        $topics = ForumTopic::all();
        $posts = ForumPost::all();
  
        // Check if the user is authenticated
        $user = auth()->user();
    
        // Default greeting
        $greeting = 'Welcome';
    
        // Initialize $roles variable
        $roles = [];
    
        // If the user is authenticated, retrieve user-specific information
        if ($user) {
            $roles = $this->userRepository->getUserRoles($user);
            $isAdmin = $this->userRepository->hasRole($user, 'admin');
            $isArtist = $this->userRepository->hasRole($user, 'artist');
    
            if ($isAdmin) {
                $greeting = 'Hi Admin';
            } elseif ($isArtist) {
                $greeting = 'Hi artist';
                // You can handle artist-specific actions here
            } else {
                $greeting = 'Hi User';
            }
        }
    
        // Pass the retrieved information to the view
        return view('home', compact('greeting', 'roles', 'categories', 'artworks', 'artists','topics','posts'));
    }
    
    public function requestRoleChange(Request $request)
    {
        $admins = User::whereHas('roles', function($query) {
            $query->where('name', 'admin');
        })->get();

        Notification::send($admins, new RoleChangeRequestNotification());

        return redirect()->back()->with('success', 'Role change request sent successfully!');
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
