<?= $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>

<section id="hero" style="padding-top: 80px;"> </section>

<div class="container mt-3">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
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
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>