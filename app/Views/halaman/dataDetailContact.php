<?= $this->extend('layout_admin/template'); ?>

<?php $this->section('body'); ?>

<div class="container-fluid">
    <div class="card">
        <h3 class="card-header bg-primary" style="color: white;"><?= $siswa['subject']; ?></h3>
        <div class="card-body">
            <h5 class="card-title">Dari : <?= $siswa['name']; ?> (<?= $siswa['email']; ?>)</h5>
            <p class="card-text"><?= $siswa['messages']; ?></p>
            <a href="/DataContact" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>


<?php $this->endSection('body'); ?>