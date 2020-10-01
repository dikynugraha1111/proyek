<?= $this->extend('layout_admin/template'); ?>

<?php $this->section('body'); ?>

<div class="container-fluid">
    <div class="card text-white bg-danger mb-3" style="max-width: 38rem;">
        <div class="card-header bg-danger">Detail Pelanggar</div>
        <div class="card-body">
            <h5 class="card-title"><?= $data2['nama']; ?></h5>
            <div class="card-text">
                <table>
                    <tr>
                        <td>Id Data Siswa</td>
                        <td>: <?= $data2['id_data_siswa']; ?></td>
                    </tr>
                    <tr>
                        <td>NISN</td>
                        <td>: <?= $data2['nisn']; ?></td>
                    </tr>
                    <tr>
                        <td>Tgl Lahir</td>
                        <td>: <?= $data2['tgl_lahir']; ?></td>
                    </tr>
                    <tr>
                        <td>Alamat Siswa</td>
                        <td>: <?= $data2['alamat']; ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Pelanggaran</td>
                        <td>: <?= $data1['jenis']; ?></td>
                    </tr>
                    <tr>
                        <td>Nama Pelanggaran</td>
                        <td>: <?= $data1['nama_pelanggaran']; ?></td>
                    </tr>
                    <tr>
                        <td>Hukuman Diterima</td>
                        <td>: <?= $data1['hukuman']; ?></td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
</div>


<?php $this->endSection('body'); ?>