<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <title>COMBAC</title>
</head>

<body>
    <!-- NAVABR -->
    <?php include "layout/navbar.php" ?>
    <!-- NAVBAR -->

    <!-- HEADER -->
    <main>
        <div>
            <div>
                <header class="header">
                    <video autoplay muted loop id="myVideo">
                        <source src="videos/combac.mp4" type="video/mp4">
                    </video>
                    <div class="container-login">
                        <h1 class="notif">UPDATE SUCCEED</h1>
                        <form action="dashboard.php" method="POST">
                            <label>Data Changed Successfully</label><br>
                            <label></label><br>
                            <button type="submit" name="login">OK</button>
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