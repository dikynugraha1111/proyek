<?= $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>
<!-- <link rel="stylesheet" href="/css/cssLogin.css"> -->

<section id="hero" style="padding-top: 80px;"> </section>


<div class="container justify-content-center mt-3">
    <div class="row">
        <div class="col-5">
            <h1 class="my-3">Daftar Orang</h1>
            <form action="" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukan NIS " aria-label="Recipient's username" aria-describedby="button-addon2" name="nis">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2" name="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">NIS</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Lulus</th>
                        <th scope="col">Lihat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($siswa as $i) : ?>
                        <tr>
                            <!-- angka pertama merupakan dari database id, selanjutnya default perulangan -->
                            <th scope="row"><?= $i['nisn']; ?></th>
                            <td><?= $i['nama']; ?></td>
                            <td><?= $i['lulus']; ?></td>
                            <td><a href="/Siswa/<?= $i['id_data_siswa']; ?>" class="btn btn-success">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php $this->endSection('content'); ?>