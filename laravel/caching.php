// Problem: Querying large datasets repeatedly is slow.

// Solution: Cache data to reduce database load
$users = Cache::remember('users_list', 3600, function () {
    return User::all(); // Cache for 1 hour
});
