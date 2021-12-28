<?php

include("auth_session.php");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Post</title>
    <link rel="stylesheet" href="css/main.css" />
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are in Post page.</p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>
