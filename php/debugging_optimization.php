// Problem: The function creates a new database connection every time it's called, reducing performance.

function getUserPosts($userId, PDO $db) {
    // Using a prepared statement to fetch posts efficiently
    $stmt = $db->prepare("SELECT * FROM posts WHERE user_id = ?");
    $stmt->execute([$userId]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Establishing a persistent database connection for better performance
$db = new PDO('mysql:host=localhost;dbname=test', 'root', '', [
    PDO::ATTR_PERSISTENT => true, 
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$userId = 1;
$posts = getUserPosts($userId, $db);
