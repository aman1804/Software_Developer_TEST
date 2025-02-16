// Problem: File processing can cause timeouts if done synchronously.

// Solution: Run the process in the background using exec()
exec("php process_file.php > /dev/null 2>&1 &"); 
