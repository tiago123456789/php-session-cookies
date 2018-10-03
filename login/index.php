<?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION["user_authenticated"] = [
            "email" => filter_input(INPUT_POST, "email")
        ];
        header("Location: /login/content.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
    <header>
        <meta charset="UTF-8" />
        <title>Login project</title>
    </header>
    <body>
        <form action="" method="post">
            <input type="text" name="email" placeholder="Email" />
            <input type="submit" />
        </form>
    </body>
</html>