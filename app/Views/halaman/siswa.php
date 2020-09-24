<?= $this->extend('layout/templatedatatable'); ?>

<?php $this->section('contentdatatable'); ?>
<section id="hero" style="padding-top: 80px;"> </section>

<div class="container justify-content-center mt-3">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <h3>Data tables</h3>
            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>NISN</th>
                        <th>NAMA</th>
                        <th>LULUS</th>
                        <th>LIHAT</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($siswa as $i) : ?>
                        <tr>
                            <!-- angka pertama merupakan dari database id, selanjutnya default perulangan -->
                            <th scope="row"><?= $i['nisn']; ?></th>
                            <td><?= $i['nama']; ?></td>
                            <td>
                                <?= ($i['lulus'] == '0') ? 'Belum-Lulus' : 'Lulus'; ?>
                            </td>
                            <td><a href="/Siswa/<?= $i['id_data_siswa']; ?>" class="btn btn-success">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $this->endSection('content'); ?>