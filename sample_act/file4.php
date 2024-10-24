<?php
// Simulating a simple database using an associative array
$users = array(
    "john_doe" => "password123",
    "jane_smith" => "mypassword",
    "user123" => "letmein"
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    if (isset($users[$username]) && $users[$username] == $password) {
        echo "Welcome, " . $username . "!";
    } else {
        echo "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<body>
    <form method="post" action="">
        Username: <input type="text" name="username" required>
        Password: <input type="password" name="password" required>
        <input type="submit" value="Login">
    </form>
</body>
</html>
