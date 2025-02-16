// Problem: File uploads can be exploited to upload malicious scripts.

function uploadImage($file) {
    $allowedTypes = ['image/jpeg', 'image/png'];
    
    // Validate file type before saving
    if (!in_array($file['type'], $allowedTypes)) {
        die("Invalid file type.");
    }

    $uploadDir = "uploads/";
    $filePath = $uploadDir . basename($file["name"]);

    if (move_uploaded_file($file["tmp_name"], $filePath)) {
        return "Upload successful.";
    }
    return "Upload failed.";
}
