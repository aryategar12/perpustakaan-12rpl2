<?php
//Proses insert data
if (isset($_POST['save'])) {
$nis        = $_POST['nis'];
$nama       = $_POST['nama'];
$jk         = $_POST['jk'];
$tpt_lahir  = $_POST['tpt_lahir'];
$tgl_lahir  = $_POST['tgl_lahir'];
$kelas      = $_POST['id_kelas'];
$jurusan    = $_POST['id_jurusan'];
$tlp        = $_POST['tlp'];
$alamat     = $_POST['alamat'];
$query_insert = mysqli_query($konek,"INSERT INTO anggota VALUES('','$nis','$nama','$jk','$tpt_lahir','$tgl_lahir','$kelas','$jurusan','$tlp','$alamat')");
    if($query_insert)
    {
        ?>
            <div class="alert alert-success">
                Data Berhasil Disimpan
            </div>
        <?php
        header('refresh:1; URL=http://localhost/perpustakan-12rpl2/perpustakaan-12rpl2/dashboard.php?page=anggota');
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