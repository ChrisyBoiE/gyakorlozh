<?php
    require_once 'config.php';

    if(isset($_POST["username"]) && $_POST["password"] && $_POST["email"]){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $conn = new PDO("mysql:host=localhost;dbname=".$dbname.";charset=utf8",$dbname, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    $passen = sha1($password);

    $sql = "INSERT INTO USERS(username,password,email) VALUES('$username', '$passen', '$email')";
    $res = $conn->query($sql);
    header("location: login.php");
    }

?>

<!doctype html>
<html lang="hu">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" >
        <h2>Register</h2>
        <form action="index.php" method="POST">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" name="username" id="username">

        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password">

        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email">

        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>