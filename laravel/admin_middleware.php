// Middleware ensures only users with 'is_admin' flag can access certain routes.

public function handle($request, Closure $next) {
    if (!Auth::user() || !Auth::user()->is_admin) {
        abort(403); // Deny access if user is not an admin
    }
    return $next($request);
}
