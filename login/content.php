<?php

session_start();

$existUserAuthenticated = empty($_SESSION["user_authenticated"]);
if($existUserAuthenticated) {
    header("Location: index.php");
    exit;
}
?>

<html>
    <body>
        <h1>Content protected!!!!</h1>
        <a href="/login/logout.php">Exit</a>
    </body>
</html>
