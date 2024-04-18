<?php
include "service/database.php";
// menghapus data
if (isset($_GET['kode'])) {
    $kode = htmlspecialchars($_GET['kode']);
    $sql = "DELETE FROM register_ml WHERE id='$kode'";

    if ($db->query($sql)) {
        header("location: notif-delete.php");
    } else {
        header("location: notif-failed.php");
    }
    // menghapus data
}
?>
<div class="container">
    <div>
        <h3>REGISTRATION MOBILE LEGENDS </h3>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Id</th>
                <th>Team Name</th>
                <th>Nama 1</th>
                <th>User Name 1</th>
                <th>Id ML 1</th>
                <th>Nama 2</th>
                <th>User Name 2</th>
                <th>Id ML 2</th>
                <th>Nama 3</th>
                <th>User Name 3</th>
                <th>Id ML 3</th>
                <th>Nama 4</th>
                <th>User Name 4</th>
                <th>Id ML 4</th>
                <th>Nama 5</th>
                <th>User Name 5</th>
                <th>Id ML 5</th>
                <th>Phone</th>
                <th>Waktu</th>
                <th colspan="2">Aksi</th>
            </tr>

            <?php
            include "service/database.php";

            // menampilkan barang
            $no = 1;
            $ambildata = mysqli_query($db, "SELECT * FROM register_ml");
            while ($tampil = mysqli_fetch_array($ambildata)) {
                echo "
                <tr>
                <td>$no</td>
                <td>$tampil[id]</td>
                <td>$tampil[teamname]</td>
                <td>$tampil[name1]</td>
                <td>$tampil[username1]</td>
                <td>$tampil[id_ml1]</td>
                <td>$tampil[name2]</td>
                <td>$tampil[username2]</td>
                <td>$tampil[id_ml2]</td>
                <td>$tampil[name3]</td>
                <td>$tampil[username3]</td>
                <td>$tampil[id_ml3]</td>
                <td>$tampil[name4]</td>
                <td>$tampil[username4]</td>
                <td>$tampil[id_ml4]</td>
                <td>$tampil[name5]</td>
                <td>$tampil[username5]</td>
                <td>$tampil[id_ml5]</td>
                <td>$tampil[phone]</td>
                <td>$tampil[created_at]</td>
                <td><a href='?kode=$tampil[id]'><i class='btn-hapus ph ph-trash'></i></a></td>
                <td><a href='ubah-ml.php?kode=$tampil[id]'><i class='btn-ubah ph ph-pencil-line'></a></td>
                
                </tr>";
                $no++;
                // menampilkan barang
            }
            ?>
        </table>
    </div>
</div>