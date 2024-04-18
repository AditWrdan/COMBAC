<?php
include "service/database.php";
session_start();
$login_massage = "";

if (isset ($_SESSION["is_login"])) {
    header("location: dashboard.php");
}


if (isset ($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM login_admin WHERE username='$username' AND password ='$password'";

    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $_SESSION["username"] = $data["username"];
        $_SESSION["is_login"] = true;

        header("location: dashboard.php");
    } else {
        $login_massage = "Data Tidak Ditemukan!";
    }
    $db->close();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <title>LOGIN COMBAC</title>
</head>

<body>
    <!--NAVBAR-->
    <?php include "layout/navbar.php" ?>
    <!--NAVBAR-->
    <!-- HEADER -->
    <main>
        <div>
            <div>
                <header class="header">
                    <video autoplay muted loop id="myVideo">
                        <source src="videos/combac.mp4" type="video/mp4">
                    </video>
                    <div class="container-login">
                        <h1>Login Admin</h1>

                        <i>
                            <?= $login_massage ?>
                        </i>

                        <form action="page-login.php" method="POST">
                            <label>Username</label><br>
                            <input type="text" name="username"><br>
                            <label>Password</label><br>
                            <input type="password" name="password"><br>
                            <button type="submit" name="login">Sign In</button>
                        </form>
                    </div>
                </header>
            </div>
        </div>
        <div>
    </main>
    <!-- HEADER -->

    <!-- FOOTER -->
    <?php include "layout/footer.php" ?>
    <!-- FOOTER -->
</body>

</html>