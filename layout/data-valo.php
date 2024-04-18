<?php
include "service/database.php";
if (isset($_GET['kode'])) {
    $kode = htmlspecialchars($_GET['kode']);
    $sql = "DELETE FROM register_valo WHERE id='$kode'";

    if ($db->query($sql)) {
        header("location: notif-delete.php");
    } else {
        header("location: notif-failed.php");
    }
}
?>

<div class="container">

    <div>

        <h3>REGISTRATION VALORANT </h3>

        <table border="1">
            <tr>
                <th>No</th>
                <th>Id</th>
                <th>Team Name</th>
                <th>Nama 1</th>
                <th>User Id 1</th>
                <th>Nama 2</th>
                <th>User Id 2</th>
                <th>Nama 3</th>
                <th>User Id 3</th>
                <th>Nama 4</th>
                <th>User Id 4</th>
                <th>Nama 5</th>
                <th>User Id 5</th>
                <th>Phone</th>
                <th>Waktu</th>
                <th colspan="2">Aksi</th>
            </tr>

            <?php
            include "service/database.php";

            $no = 1;
            $ambildata = mysqli_query($db, "SELECT * FROM register_valo");
            while ($tampil = mysqli_fetch_array($ambildata)) {
                echo "
    <tr>
    <td>$no</td>
    <td>$tampil[id]</td>
    <td>$tampil[teamname]</td>
    <td>$tampil[name1]</td>
    <td>$tampil[userid1]</td>
    <td>$tampil[name2]</td>
    <td>$tampil[userid2]</td>
    <td>$tampil[name3]</td>
    <td>$tampil[userid3]</td>
    <td>$tampil[name4]</td>
    <td>$tampil[userid4]</td>
    <td>$tampil[name5]</td>
    <td>$tampil[userid5]</td>
    <td>$tampil[phone]</td>
    <td>$tampil[created_at]</td>
    <td><a href='?kode=$tampil[id]'><i class='btn-hapus ph ph-trash'></i></a></td>
    <td><a href='ubah-valo.php?kode=$tampil[id]'><i class='btn-ubah ph ph-pencil-line'></i></a></td>
    <tr>";
                $no++;
            }
            ?>
        </table>
    </div>

</div>