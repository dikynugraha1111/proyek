<?= $this->extend('layout/templatedatatable'); ?>

<?php $this->section('contentdatatable'); ?>
<section id="hero" style="padding-top: 80px;"> </section>

<div class="container">
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
</div>

<footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>ArsipKita2020</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
            Designed by <a href="https://bootstrapmade.com/">-</a>
        </div>
    </div>
</footer><!-- End Footer -->

<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    });
</script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<?php $this->endSection('contentdatatable'); ?>