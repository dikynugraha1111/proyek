<?= $this->extend('layout_admin/template'); ?>

<?php

use function PHPSTORM_META\type;

$this->section('body'); ?>

<div class="row mt-3">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <b> Form Ubah Data Mahasiswa</b>
            </div>
            <div class="card-body">
                <form action="/DataPrestasi/saveEdit" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input hidden type="number" name="id" class="form-control" id="id" value="<?= $siswa['id_prestasi'] ?>">
                        <label for="id_data_siswa">Id Data Siswa</label>
                        <input type="number" name="id_data_siswa" class="form-control" id="id_data_siswa" value="<?= $siswa['id_data_siswa'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="tingkat">Tingkat</label>
                        <input type="text" name="tingkat" class="form-control" id="tingkat" value="<?= $siswa['tingkat']; ?>">

                    </div>
                    <div class="form-group">
                        <label for="penyelenggara">Penyelenggara</label>
                        <input type="text" name="penyelenggara" class="form-control" id="penyelenggara" value="<?= $siswa['penyelenggara']; ?>">

                    </div>
                    <div class="form-group">
                        <label for="nama_kegiatan">Nama Kegiatan</label>
                        <input type="text" name="nama_kegiatan" class="form-control" id="nama_kegiatan" value="<?= $siswa['nama_kegiatan']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="hasil">Hasil</label>
                        <input type="text" name="hasil" class="form-control" id="hasil" value="<?= $siswa['hasil']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="fileLama" value="<?= $siswa['piagam']; ?>">
                        <label for="sertifikas">Sertifikat</label>
                        <div class="col-sm-5"><img src="/gambar/prestasi/<?= $siswa['piagam']; ?>" alt="" class="img-thumbnail img-preview"></div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="fileupload" name="fileupload" onchange="
                                    const value = document.getElementById('fileupload');
                                    const newValue = value.value;
                                    const label = document.getElementById('label-file')
                                    label.textContent = newValue;
                                    ">
                            <label class="custom-file-label" for="fileupload" id="label-file"><?= $siswa['piagam']; ?></label>
                        </div>

                        <!-- <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="fileupload" name="fileupload" onchange="fileupload()">
                                    <label class="custom-file-label" for="fileupload">Pilih file</label>
                                </div> -->
                    </div>
                    <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
                </form>
            </div>
        </div>


    </div>
</div>
<?php $this->endSection('body'); ?>