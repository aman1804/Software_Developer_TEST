// Problem: JSON responses may have missing fields or invalid syntax.

$json = '{"name": "John"}';
$data = json_decode($json, true);

if (json_last_error() !== JSON_ERROR_NONE) {
    error_log("JSON Error: " . json_last_error_msg()); // Log JSON errors
} else {
    $name = $data['name'] ?? 'Unknown'; // Use a default value if 'name' is missing
}
