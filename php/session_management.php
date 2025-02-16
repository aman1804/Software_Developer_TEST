// Problem: Default file-based PHP sessions cause performance issues on high-traffic websites.

// Solution: Use Redis for session storage
ini_set('session.save_handler', 'redis');
ini_set('session.save_path', 'tcp://127.0.0.1:6379');
session_start();
