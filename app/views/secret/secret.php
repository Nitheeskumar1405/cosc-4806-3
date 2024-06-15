<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>

<h1>Secret Page</h1>
<p>Welcome to the secret page!</p>
<a href="logout.php">Logout</a>
