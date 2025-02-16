// Problem: Loading a 5GB CSV file at once may cause memory overflow.

$handle = fopen("large_file.csv", "r");
$batchSize = 1000; // Process in batches of 1000 rows
$data = [];

while (($row = fgetcsv($handle)) !== false) {
    $data[] = $row;
    if (count($data) >= $batchSize) {
        insertIntoDatabase($data); // Insert batch into the database
        $data = [];
    }
}

if (!empty($data)) {
    insertIntoDatabase($data);
}

fclose($handle);

// Function to insert batch data into the database
function insertIntoDatabase($data) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO table_name (col1, col2) VALUES (?, ?)");
    foreach ($data as $row) {
        $stmt->bind_param("ss", $row[0], $row[1]);
        $stmt->execute();
    }
}
