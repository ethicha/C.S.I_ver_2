<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the input values from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Dummy credentials for demonstration purposes
    $dummyUsername = "user123";
    $dummyPassword = "password123";

    // Check if the entered credentials match the dummy credentials
    if ($username == $dummyUsername && $password == $dummyPassword) {
        // Redirect to a success page or perform any other actions
        header("Location: uhdfiudfiufifudhfuhfuhfuisfbisbfjdfd.html");
        exit();
    } else {
        header("Location: salah.html");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>

<h2>Login</h2>

<?php
// Display error message if login attempt failed
if (isset($error)) {
    echo "<p style='color: red;'>$error</p>";
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="username">Username:</label>
    <input type="text" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    <input type="submit" value="Login">
</form>

</body>
</html>