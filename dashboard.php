<?php
session_start();
if (isset ($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('location: page-login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link href="styles.css" rel="stylesheet">
    <link href="styles-table.css" rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
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
                    <h1>SELAMAT DATANG
                        <?= $_SESSION["username"] ?>
                    </h1>
                </header>
            </div>
        </div>
        <div>
    </main>
    <!-- HEADER -->

    <!-- DATA ML -->
    <?php include "layout/data-ml.php" ?>
    <!-- DATA ML -->

    <!-- DATA PUBG -->
    <?php include "layout/data-pubg.php" ?>
    <!-- DATA PUBG -->

    <!-- DATA VALO -->
    <?php include "layout/data-valo.php" ?>
    <!-- DATA VALO -->

    <!-- FOOTER -->
    <?php include "layout/footer.php" ?>
    <!-- FOOTER -->
</body>

</html>