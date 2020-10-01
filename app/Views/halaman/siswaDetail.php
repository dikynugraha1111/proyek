<?= $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>

<section id="hero" style="padding-top: 80px;"> </section>

<div class="container mt-3">
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
                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                    <b>
                        <h3 class="">SMAN 1 MAGETAN</h3>
                    </b>
                </div>
            </div>
            <div class="row">
                <h6>Jl. Monginsidi No.24, Nganten, Selosari, Kec. Magetan, Kabupaten Magetan, Jawa Timur</h6>
            </div>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                    <h6 class="">Telepon: (0351) 895076 FAX:123123 </h6>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <!-- <div class="row">
        <h5>Id_Data_Siswa : <?= $siswa['id_data_siswa']; ?></h5>
    </div> -->

    <div class="row pt-3">
        <b>
            <h4>Detail Siswa</h4>
        </b>
        <div class="table-responsive">
            <table class="table">
                <thead class="thead">
                    <tr class="bg-primary">
                        <th scope="col" style="color: white;">No</th>
                        <th scope="col" style="color: white;">Field</th>
                        <th scope="col" style="color: white;">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Nama</td>
                        <td><?= $siswa['nama']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>NISN</td>
                        <td><?= $siswa['nisn']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>NIK</td>
                        <td><?= $siswa['nik']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Tgl Lahir</td>
                        <td><?= $siswa['tgl_lahir']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Alamat</td>
                        <td><?= $siswa['alamat']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Ijazah</td>
                        <td><a href="/gambar/ijazah/<?= $siswa['ijazah']; ?>">Link</a> </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>