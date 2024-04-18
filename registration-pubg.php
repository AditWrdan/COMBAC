<?php
include "service/database.php";

if (isset ($_POST["register-pubg"])) {
    $teamname = $_POST['teamname'];
    $name1 = $_POST['name1'];
    $name2 = $_POST['name2'];
    $name3 = $_POST['name3'];
    $name4 = $_POST['name4'];
    $name5 = $_POST['name5'];
    $username1 = $_POST['username1'];
    $username2 = $_POST['username2'];
    $username3 = $_POST['username3'];
    $username4 = $_POST['username4'];
    $username5 = $_POST['username5'];
    $id_pubg1 = $_POST['id_pubg1'];
    $id_pubg2 = $_POST['id_pubg2'];
    $id_pubg3 = $_POST['id_pubg3'];
    $id_pubg4 = $_POST['id_pubg4'];
    $id_pubg5 = $_POST['id_pubg5'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO `register_pubg` (`teamname`, `name1`, `username1`, `id_pubg1`, `name2`, `username2`, `id_pubg2`, `name3`, `username3`, `id_pubg3`, `name4`, `username4`, `id_pubg4`, `name5`, `username5`, `id_pubg5`, `phone`) VALUES ('$teamname','$name1','$username1','$id_pubg1','$name2','$username2','$id_pubg2','$name3','$username3','$id_pubg3','$name4','$username4','$id_pubg4','$name5','$username5','$id_pubg5','$phone')";

    try{
        if ($db->query($sql)) {
            header("location: notif-succeed.php");
        } else {
            header("location: notif-failed.php");
        }
    }catch (mysqli_sql_exception $e) {
        header("location: notif-failed.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration PUBG Mobile</title>
    <link href="styles.css" rel="stylesheet">
    <link href="styles-regis.css" rel="stylesheet">
</head>

<body>
    <?php include "layout/navbar.php" ?>
    <!-- HEADER -->
    <main>
        <div>
            <div>
                <header class="header">
                    <video autoplay muted loop id="myVideo">
                        <source src="videos/combac.mp4" type="video/mp4">
                    </video>
                    <!-- REGISTRATION -->
                    <div class="container-regis">
                        <div class="row align-items-stars">
                            <div class="col">
                                <div class="card-regis">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Registration PUBG Mobile</h5>
                                        <form action="registration-pubg.php" method="post" class="row">
                                            <div class="col-md-12">
                                                <label class="form-label">Team Name</address></label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter your team name" name="teamname" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Name</label>
                                                <input type="text" class="form-control" placeholder="Name 1"
                                                    name="name1" required>
                                                <input type="text" class="form-control" placeholder="Name 2"
                                                    name="name2" required>
                                                <input type="text" class="form-control" placeholder="Name 3"
                                                    name="name3" required>
                                                <input type="text" class="form-control" placeholder="Name 4"
                                                    name="name4" required>
                                                <input type="text" class="form-control" placeholder="Name 5"
                                                    name="name5" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Username</label>
                                                <input type="text" class="form-control" placeholder="Username 1"
                                                    name="username1" required>
                                                <input type="text" class="form-control" placeholder="Username 2"
                                                    name="username2" required>
                                                <input type="text" class="form-control" placeholder="Username 3"
                                                    name="username3" required>
                                                <input type="text" class="form-control" placeholder="Username 4"
                                                    name="username4" required>
                                                <input type="text" class="form-control" placeholder="Username 5"
                                                    name="username5" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">ID</label>
                                                <input type="number" class="form-control" placeholder="ID 1"
                                                    name="id_pubg1" required>
                                                <input type="number" class="form-control" placeholder="ID 2"
                                                    name="id_pubg2" required>
                                                <input type="number" class="form-control" placeholder="ID 3"
                                                    name="id_pubg3" required>
                                                <input type="number" class="form-control" placeholder="ID 4"
                                                    name="id_pubg4" required>
                                                <input type="number" class="form-control" placeholder="ID 5"
                                                    name="id_pubg5" required>
                                            </div>

                                            <div class="col-md-12">
                                                <label class="form-label">Phone Number</address></label>
                                                <input type="text" class="form-control" placeholder="Active Number"
                                                    name="phone" required>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-color"
                                                    name="register-pubg">REGISTRATION</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- REGISTRATION -->
                </header>
            </div>
        </div>
        <div>
    </main>
    <!-- HEADER -->

    <!-- FOOTER -->
    <div>
        <div>
            <?php include "layout/footer.php" ?>
        </div>
    </div>
    <!-- FOOTER -->
</body>

</html>