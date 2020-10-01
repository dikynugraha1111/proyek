<?= $this->extend('layout_admin/template'); ?>

<?php $this->section('body'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="container-fluid">
        <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>">

        </div>

        <?php if (session()->getFlashdata('pesan')) : ?>
            <!-- <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div> -->
        <?php endif; ?>


        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

        <div class="row mb-3">
            <div class="col-lg-6">
                <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
                    Tambah Data Prestasi
                </button>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tingkat</th>
                                <th>Penyelenggara</th>
                                <th>Nama Kegiatan</th>
                                <th>Hasil</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Tingkat</th>
                                <th>Penyelenggara</th>
                                <th>Nama Kegiatan</th>
                                <th>Hasil</th>
                                <th>Detail</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php foreach ($siswa as $i) : ?>
                                <tr>
                                    <!-- angka pertama merupakan dari database id, selanjutnya default perulangan -->
                                    <th scope="row"><?= $i['tingkat']; ?></th>
                                    <td><?= $i['penyelenggara']; ?></td>
                                    <td><?= $i['nama_kegiatan']; ?></td>
                                    <td><?= $i['hasil']; ?></td>
                                    <td><a href="/DataPrestasi/<?= $i['id_prestasi']; ?>" class="btn btn-primary">Detail</a>
                                        <a href="/DataPrestasi/edit/<?= $i['id_prestasi']; ?>" class="btn btn-warning">Edit</a>
                                        <a class="tombol-hapus btn btn-danger" href="/DataPrestasi/delete/<?= $i['id_prestasi']; ?>">Delete</a>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="judulModal"><b> Tambah Data Prestasi</b></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="text-center mb-1 mt-3">
                        <img class="img-circle" id="img_logo" src="assets/img/sman1.png" style="height: 100px;">
                    </div>
                    <div class="modal-body">
                        <form action="DataPrestasi/create" method="POST" enctype="multipart/form-data">
                            <!-- <input type="hidden" name="id" id="id"> -->
                            <div class="form-group">
                                <label for="id_data_siswa">Id_Data_Siswa</label>
                                <input type="number" class="form-control" id="id_data_siswa" placeholder="Masukan id_data_siswa" name="id_data_siswa">
                            </div>
                            <div class="form-group">
                                <label for="tingkat">Tingkat</label>
                                <input type="text" class="form-control" id="tingkat" placeholder="Masukan Tingkat Prestasi" name="tingkat">
                            </div>
                            <div class="form-group">
                                <label for="penyelenggara">Penyelenggara</label>
                                <input type="text" class="form-control" id="penyelenggara" placeholder="Masukan Penyelenggara" name="penyelenggara">
                            </div>
                            <div class="form-group">
                                <label for="nama_kegiatan">Nama Kegiatan</label>
                                <input type="text" class="form-control" id="nama_kegiatan" placeholder="Masukan Nama Kegiatan" name="nama_kegiatan">
                            </div>
                            <div class="form-group">
                                <label for="hasil">Hasil</label>
                                <input type="text" class="form-control" id="hasil" placeholder="Masukan Hasil" name="hasil">
                            </div>
                            <div class="form-group">
                                <label for="sertifikas">Sertifikat</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="fileupload" name="fileupload" onchange="
                                    const value = document.getElementById('fileupload');
                                    const newValue = value.value;
                                    const label = document.getElementById('label-file')
                                    label.textContent = newValue;
                                    ">
                                    <label class="custom-file-label" for="fileupload" id="label-file">Pilih file</label>
                                </div>

                                <!-- <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="fileupload" name="fileupload" onchange="fileupload()">
                                    <label class="custom-file-label" for="fileupload">Pilih file</label>
                                </div> -->
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of modal -->
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="/package/dist/sweetalert2.all.min.js"></script>
    <script src="/package/dist/sweet.js"></script>




    <!-- /.container-fluid -->
    <?php $this->endSection('body'); ?>