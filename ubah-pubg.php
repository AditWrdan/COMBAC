<?php
include "service/database.php";

if (isset($_POST['update-pubg'])) {
    $sql = "UPDATE register_pubg SET 
    teamname = '$_POST[teamname]',
    name1= '$_POST[name1]', 
    name2= '$_POST[name2]', 
    name3= '$_POST[name3]', 
    name4= '$_POST[name4]', 
    name5= '$_POST[name5]', 
    username1= '$_POST[username1]', 
    username2= '$_POST[username2]', 
    username3= '$_POST[username3]', 
    username4= '$_POST[username4]', 
    username5= '$_POST[username5]', 
    id_pubg1= '$_POST[id_pubg1]', 
    id_pubg2= '$_POST[id_pubg2]', 
    id_pubg3= '$_POST[id_pubg3]', 
    id_pubg4= '$_POST[id_pubg4]', 
    id_pubg5= '$_POST[id_pubg5]', 
    phone= '$_POST[phone]' 
    WHERE id = '$_POST[kode]'";

    try {
        if ($db->query($sql)) {
            header("location: notif-update.php");
        } else {
            header("location: notif-failed.php");
        }
    } catch (mysqli_sql_exception $e) {
        header("location: notif-failed.php");
    }

} else {
    $sql = mysqli_query($db, "SELECT * FROM register_pubg WHERE id='$_GET[kode]'");
    $data = mysqli_fetch_array($sql);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Valorant</title>
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
                                        <h5 class="card-title text-center">Update Mobile Legends</h5>
                                        <form action="ubah-pubg.php" method="POST" class="row">
                                            <input name="kode" type="hidden" value="<?= $_GET['kode'] ?>">
                                            <div class="col-md-12">
                                                <label class="form-label">Team Name</address></label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter your team name" name="teamname"
                                                    value="<?= $data['teamname']; ?>" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Name</label>
                                                <input type="text" class="form-control" placeholder="Name 1"
                                                    name="name1" value="<?= $data['name1']; ?>" required>
                                                <input type="text" class="form-control" placeholder="Name 2"
                                                    name="name2" value="<?= $data['name2']; ?>" required>
                                                <input type="text" class="form-control" placeholder="Name 3"
                                                    name="name3" value="<?= $data['name3']; ?>" required>
                                                <input type="text" class="form-control" placeholder="Name 4"
                                                    name="name4" value="<?= $data['name4']; ?>" required>
                                                <input type="text" class="form-control" placeholder="Name 5"
                                                    name="name5" value="<?= $data['name5']; ?>" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Username</label>
                                                <input type="text" class="form-control" placeholder="Username 1"
                                                    name="username1" value="<?= $data['username1']; ?>" required>
                                                <input type="text" class="form-control" placeholder="Username 2"
                                                    name="username2" value="<?= $data['username2']; ?>" required>
                                                <input type="text" class="form-control" placeholder="Username 3"
                                                    name="username3" value="<?= $data['username3']; ?>" required>
                                                <input type="text" class="form-control" placeholder="Username 4"
                                                    name="username4" value="<?= $data['username4']; ?>" required>
                                                <input type="text" class="form-control" placeholder="Username 5"
                                                    name="username5" value="<?= $data['username5']; ?>" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">ID</label>
                                                <input type="number" class="form-control" placeholder="ID 1"
                                                    name="id_pubg1" value="<?= $data['id_pubg1']; ?>" required>
                                                <input type="number" class="form-control" placeholder="ID 2"
                                                    name="id_pubg2" value="<?= $data['id_pubg2']; ?>" required>
                                                <input type="number" class="form-control" placeholder="ID 3"
                                                    name="id_pubg3" value="<?= $data['id_pubg3']; ?>" required>
                                                <input type="number" class="form-control" placeholder="ID 4"
                                                    name="id_pubg4" value="<?= $data['id_pubg4']; ?>" required>
                                                <input type="number" class="form-control" placeholder="ID 5"
                                                    name="id_pubg5" value="<?= $data['id_pubg5']; ?>" required>
                                            </div>

                                            <div class="col-md-12">
                                                <label class="form-label">Phone Number</address></label>
                                                <input type="text" class="form-control" placeholder="Active Number"
                                                    name="phone" value="<?= $data['phone']; ?>" required>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-color"
                                                    name="update-pubg">SIMPAN</button>

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

