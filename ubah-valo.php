<?php
include "service/database.php";

if (isset($_POST['update-valo'])) {
    $sql = "UPDATE register_valo SET 
    teamname = '$_POST[teamname]',
    name1= '$_POST[name1]', 
    name2= '$_POST[name2]', 
    name3= '$_POST[name3]', 
    name4= '$_POST[name4]', 
    name5= '$_POST[name5]', 
    userid1= '$_POST[userid1]', 
    userid2= '$_POST[userid2]', 
    userid3= '$_POST[userid3]', 
    userid4= '$_POST[userid4]', 
    userid5= '$_POST[userid5]', 
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
    $sql = mysqli_query($db, "SELECT * FROM register_valo WHERE id='$_GET[kode]'");
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
                                        <form action="ubah-valo.php" method="POST" class="row">
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
                                                <label class="form-label">UserID</label>
                                                <input type="text" class="form-control" placeholder="UserID 1"
                                                    name="userid1" value="<?= $data['userid1']; ?>" required>
                                                <input type="text" class="form-control" placeholder="UserID 2"
                                                    name="userid2" value="<?= $data['userid2']; ?>" required>
                                                <input type="text" class="form-control" placeholder="UserID 3"
                                                    name="userid3" value="<?= $data['userid3']; ?>" required>
                                                <input type="text" class="form-control" placeholder="UserID 4"
                                                    name="userid4" value="<?= $data['userid4']; ?>" required>
                                                <input type="text" class="form-control" placeholder="UserID 5"
                                                    name="userid5" value="<?= $data['userid5']; ?>" required>
                                            </div>

                                            <div class="col-md-12">
                                                <label class="form-label">Phone Number</address></label>
                                                <input type="text" class="form-control" placeholder="Active Number"
                                                    name="phone" value="<?= $data['phone']; ?>" required>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-color"
                                                    name="update-valo">SIMPAN</button>

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

