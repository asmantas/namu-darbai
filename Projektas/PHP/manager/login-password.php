<?php
session_start();
if (!empty($_POST)) {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] === 'mantas' && password_verify($_POST['password'], password_hash('mantas', PASSWORD_DEFAULT))) {
            $_SESSION['user_id'] = $_POST['username'];
			header ('location:change-status.php?');
        } else {
            header('location:manager-login.php?fail');
        }
    }
}
?>