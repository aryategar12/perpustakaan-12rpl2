<div class="row mt-2">
    <div class="col-4"></div>
    <div class="col-4">
        <center><h2>Edit Data Anggota</h2></center>
        <form action="?page=anggota-insert" method="post">
                <div class="form-group">
                    <input class="form-control" type="text" name="nis" placeholder="Nomor Induk Siswa" required>
                </div>
                <div class="form-group mt-2">
                    <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group mt-2">
                    <select class="form-control" name="jk">
                        <option value="">--Pilih Jenis Kelamin--</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <input class="form-control" type="text" name="tpt_lahir" placeholder="Tempat Lahir">
                </div>
                <div class="form-group mt-2">
                    <input class="form-control" type="date" name="tgl_lahir">
                </div>
                <div class="form-group mt-2">
                    <select class="form-control" name="id_kelas" required>
                        <option value="">--Pilih Kelas--</option>
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
                    <select class="form-control" name="id_jurusan" required>
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
                    <input class="form-control" type="text" name="tlp" placeholder="Nomor Telepon">
                </div>
                <div class="form-group mt-2">
                    <textarea name="alamat" class="form-control" placeholder="Alamat Lengkap"></textarea>
                </div>
                <div class="form-group mt-2">
                <center>              
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="save" class="btn btn-primary">Save changes</button>
                </center>
                </div>
            </form>    
    </div>
    <div class="col-4"></div>
</div>