<?php
require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (!isset($_SESSION['username'])) {
        echo '<h1> Welcome!</h1>';
        echo '<form action="login.php">';
        echo '<button type="submit">Sign in</button>';
        echo '</form>';
    } else {
        echo '<h1> Welcome, ' . $_SESSION['username'] . '</h1>';
        echo '<form action="signout.php">';
        echo '<button type="submit">Sign out</button>';
        echo '</form>';
    }
    ?>
</body>

</html>