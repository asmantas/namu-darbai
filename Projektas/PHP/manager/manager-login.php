<?php
if (isset($_GET['fail'])) {
    echo '<script>alert("Wrong password or username")</script>';
	echo '<script>window.location.href = "manager-login.php"; </script>';
} else {
    echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>prisijungti</title>
</head>
<body>
<form action="login-password.php" method="post">
    <input type="text" name="username" placeholder="Enter your username" required>
    <input type="password" name="password" placeholder="Enter your password" required>
    <input type="submit" value="Submit">
</form>
</body>
</html>';
}
?>