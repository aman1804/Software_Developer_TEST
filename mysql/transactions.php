// Problem: If multiple related queries fail, data integrity may be lost.

$conn->begin_transaction(); // Start transaction

try {
    $conn->query("INSERT INTO orders (...) VALUES (...)");
    $conn->query("INSERT INTO order_items (...) VALUES (...)");
    $conn->query("INSERT INTO payments (...) VALUES (...)");
    $conn->commit(); // Commit only if all queries succeed
} catch (Exception $e) {
    $conn->rollback(); // Rollback changes if any query fails
    error_log($e->getMessage());
}
