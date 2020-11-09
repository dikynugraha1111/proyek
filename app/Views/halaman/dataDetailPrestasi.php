<?= $this->extend('layout_admin/template'); ?>

<?php $this->section('body'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4">
            <img src="/assets/img/sman1.png" style="width: 170px;" alt="">
            <!-- <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $siswa['nama']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted">LOL PEOPLE</h6>
                <p class="card-text">NISN =<?= $siswa['nisn']; ?>
                    <br>
                    nik =<?= $siswa['nik']; ?> <br>
                    tgl_lahir =<?= $siswa['tgl_lahir']; ?> <br>
                    alamat =<?= $siswa['alamat']; ?> <br>
                    lulus =<?= $siswa['lulus']; ?>
                </p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div> -->
        </div>
        <div class="col-sm-8 pt-4">
            <div class="row align-items-center">
                <div class="col-sm-1"></div>
                <div class="col-sm-11">
                    <b>
                        <h3 class="ml-5 pl-4">SMAN 1 MAGETAN</h3>
                    </b>
                </div>
            </div>
            <div class="row">
                <h6>Jl. Monginsidi No.24, Nganten, Selosari, Kec. Magetan, Kabupaten Magetan, Jawa Timur</h6>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-11">
                    <h6 class="ml-5 pl-3">Telepon: (0351) 895076 FAX:123123 </h6>
                </div>
            </div>
        </div>
    </div>
    <hr>


    <div class="card mb-3">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-8">
                <img src="/gambar/prestasi/default.jpg" class="card-img-top w-50" alt="...">
            </div>
        </div>
        <div class="row pt-2">
            <div class="col-sm-5"></div>
            <div class="col-sm-7">
                <h5 class="card-title">PRESTASI TINGKAT <?= $data['tingkat']; ?></h5>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-9">
                <div class="card-body">
                    <p class="card-text">Alhamdulillah. Sebuah prestasi membanggakan kembali diperoleh oleh saudara <?= $siswa['nama']; ?>.<?= $siswa['nama']; ?> dengan NISN
                        <?= $siswa['nisn']; ?> kelahiran <?= $siswa['tgl_lahir']; ?>. Prestasi Pada tingkat <?= $data['tingkat']; ?>.
                        ini ia peroleh dari event <?= $data['nama_kegiatan']; ?> yang diselenggarakan oleh <?= $data['penyelenggara']; ?></p>
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
        <div class="row pt-2">
            <div class="col-sm-10"></div>
            <div class="col-sm-2">
                <p class="card-text"><small class="text-muted">Di Upload Pada <?= $data['created_at']; ?>~</small></p>
            </div>
        </div>
    </div>


</div>

<?php $this->endSection('body'); ?>