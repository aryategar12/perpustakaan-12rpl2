<?php
//Proses insert data
if (isset($_POST['save'])) {
$nis        = $_POST['nis'];
$nama       = $_POST['nama'];
$jk         = $_POST['jk'];
$tgl_lahir  = $_POST['tpt_lahir'];
$tgl_lahir  = $_POST['tgl_lahir'];
$kelas      = $_POST['id_kelas'];
$jurusan    = $_POST['id_jurusan'];
$tlp        = $_POST['tlp'];
$alamat     = $_POST['alamat'];
$query_insert = mysqli_query($konek,"INSERT INTO anggota 
VALUES('','$nis','$nama','$jk','$kelas','$jurusan','$tgl_lahir','$jk','$tlp','$alamat')");
    if($query_insert)
    {
        ?>
            <div class="alert alert-success">
                Data Berhasil Disimpan
            </div>
        <?php
        header('refresh:3; URL=http://localhost/my_website1/admin.php?page=anggota');
    }
    else
    {
        ?>
            <div class="alert alert-danger">
                Data GAGAL Disimpan !!!!!!!!!
            </div>
        <?php
    }
}
//// End of proses insert /////////////////////////////////////////////////////////
?>