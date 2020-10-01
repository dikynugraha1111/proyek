<?= $this->extend('layout_admin/template'); ?>

<?php

use function PHPSTORM_META\type;

$this->section('body'); ?>

<div class="row mt-3">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <b> Form Ubah Data Pelanggaran</b>
            </div>
            <div class="card-body">
                <form action="/DataPelanggaran/saveEdit" method="post">
                    <div class="form-group">
                        <input hidden type="number" name="id" class="form-control" id="id" value="<?= $siswa['id_pelanggaran'] ?>">
                        <label for="id_data_siswa">Id Data Siswa</label>
                        <input type="number" name="id_data_siswa" class="form-control" id="id_data_siswa" value="<?= $siswa['id_data_siswa'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis Pelanggaran</label>
                        <input type="text" name="jenis" class="form-control" id="jenis" value="<?= $siswa['jenis']; ?>">

                    </div>
                    <div class="form-group">
                        <label for="nama_pelanggaran">Nama Pelanggaran</label>
                        <input type="text" name="nama_pelanggaran" class="form-control" id="nama_pelanggaran" value="<?= $siswa['nama_pelanggaran']; ?>">

                    </div>
                    <div class="form-group">
                        <label for="hukuman">Hukuman Diberikan</label>
                        <input type="text" name="hukuman" class="form-control" id="hukuman" value="<?= $siswa['hukuman']; ?>">
                    </div>
                    <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
                </form>
            </div>
        </div>


    </div>
</div>
<?php $this->endSection('body'); ?>