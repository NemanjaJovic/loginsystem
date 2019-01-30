<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Login System</title>
</head>
<body>
    <header>
        <nav class="navigation">
            <a href="index.php">
                <img class="logo" src="logo.png" alt="Logo">
            </a>
            <div class="header-login">
                <?php 
                    if (isset($_SESSION['userId'])) {
                        echo '<form action="includes/logout.inc.php" method="post">
                        <button class="log-out" type="submit" name="logout-submit">Log out</button>
                    </form>';
                    } else {
                        echo '<div class="login-wrapper">
                        <form class="login-form" action="includes/login.inc.php" method="post">
                                <input type="text" name="mailuid" placeholder="Username/e-mail">
                                <input type="password" name="pwd" placeholder="Password">
                                <button type="submit" name="login-submit">Log in</button>
                            </form>
                            <a class="signup-btn" href="signup.php">Sign up</a>
                        </div>';
                    }
                ?> 
            </div>
        </nav>
    </header>