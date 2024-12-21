<?php


namespace App\Http\Middleware;

use Closure;

class RedirectBasedOnRole
{
    public function handle($request, Closure $next, ...$roles)
    {
        $user = auth()->user();

        // Check if the user has any of the specified roles
        if ($user && in_array($user->role, $roles)) {
            // Redirect to the appropriate route based on the role
            switch ($user->role) {
                case 'artist':
                    return redirect()->route('artists.create');
                // Add more cases for other roles if needed
                // ...

                default:
                    return redirect()->intended('/');
            }
        }

        // If the user doesn't have the required role, proceed with the request
        return $next($request);
    }
}
