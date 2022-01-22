<?php
$id = $_GET['id'];
    // $query = mysqli_query($konek,"SELECT * FROM anggota WHERE id_anggota = '$id'");
    $query = mysqli_query($konek,"SELECT anggota.id_anggota, anggota.nis, anggota.nama, anggota.jk, 
        anggota.tempat_lahir,anggota.tanggal_lahir, anggota.id_kelas, anggota.id_jurusan, anggota.nomor_telepon, 
        anggota.alamat, kelas.id_kelas, kelas.nama_kelas, jurusan.id_jurusan, jurusan.nama_jurusan
        FROM anggota
        JOIN kelas ON anggota.id_kelas = kelas.id_kelas
        JOIN jurusan ON anggota.id_jurusan = jurusan.id_jurusan
        WHERE id_anggota = '$id'");
    foreach ($query as $row) {

?>
<div class="row mt-2">
    <div class="col">
        <center><h2>Edit Data Anggota</h2></center> 
    </div>
</div>
<div class="row">
    <div class="col-2"></div>
    <div class="col-4">
        <form action="?page=anggota-insert" method="post">
            <!-- Menyisipkan data id untuk proses update -->
            <input type="hidden" name="id" value="<?php echo $row['id_anggota'] ?>">
            <!--  -->
            <div class="form-group">
                <label for="">NIS</label>
                <input value="<?php echo $row['nis'] ?>" class="form-control" type="text" name="nis" placeholder="Nomor Induk Siswa" required>
            </div>
            <div class="form-group mt-2">
                <label for="">Nama</label>
                <input value="<?php echo $row['nama'] ?>" class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group mt-2">
                <label for="">Gender</label>
                <select class="form-control" name="jk">
                    <option value="<?php echo $row['jk'] ?>"><?php echo $row['jk']=="L"?"Laki-laki":"Perempuan"; ?></option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="form-group mt-2">
                <label for="">Tempat Lahir</label>
                <input value="<?php echo $row['tempat_lahir'] ?>" class="form-control" type="text" name="tpt_lahir" placeholder="Tempat Lahir">
            </div>
            <div class="form-group mt-2">
                <label for="">Tanggal Lahir</label>
                <input value="<?php echo $row['tanggal_lahir'] ?>" class="form-control" type="date" name="tgl_lahir">
            </div>
                  
    </div>
    <div class="col-4">
            <div class="form-group mt-2">
                <label for="">Kelas</label>
                <select class="form-control" name="id_kelas" required>
                    <option value="<?php echo $row['id_kelas'] ?>"><?php echo $row['nama_kelas'] ?></option>
                    <?php
                        $query_kelas = mysqli_query($konek,"SELECT * FROM kelas");
                        foreach ($query_kelas as $kelas) {
                            ?>
                            <option value="<?php echo $kelas['id_kelas']?>"><?php echo $kelas['nama_kelas']?></option>
                            <?php
                        }
                    ?>
                </select>
            </div>
                <div class="form-group mt-2">
                    <label for="">Jurusan</label>
                    <select class="form-control" name="id_jurusan" required>
                        <option value="<?php echo $row['id_jurusan'] ?>"><?php echo $row['nama_jurusan'] ?></option>
                        <option value="">--Pilih Jurusan--</option>
                        <?php
                            $query_jurusan = mysqli_query($konek,"SELECT * FROM jurusan");
                            foreach ($query_jurusan as $jurusan) {
                                ?>
                                <option value="<?php echo $jurusan['id_jurusan']?>"><?php echo $jurusan['nama_jurusan']?></option>
                                <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <label for="">No. Tlp</label>
                    <input value="<?php echo $row['nomor_telepon'] ?>" class="form-control" type="text" name="tlp" placeholder="Nomor Telepon">
                </div>
                <div class="form-group mt-2">
                    <label for="">Alamat</label>
                    <textarea name="alamat" class="form-control" placeholder="Alamat Lengkap"><?php echo $row['alamat'] ?></textarea>
                </div>
                <div class="form-group mt-2">
                <center>              
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="save" class="btn btn-primary">Save changes</button>
                </center>
                </div>
        </form>  
    </div>
    <div class="col-2"></div>
</div>
<div class="row mb-5">
    <div class="col">
    </div>
</div>
<?php
    }
?>