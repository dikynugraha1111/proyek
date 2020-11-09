<?= $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>
<!-- <link rel="stylesheet" href="/css/cssLogin.css"> -->

<div id="hero" style="padding-top: 80px;"></div>
<div class="contact" data-contact="<?= session()->getFlashdata('success'); ?>"> </div>
<div data-aos="fade-up">
    <!-- <iframe style="border:0; width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe> -->
    <iframe width="100%" height="400px" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDUCFmm0hU12JHwrd-u5LMto2Ur3-Rt8CA
    &q=SMA+NEGERI+1+MAGETAN" allowfullscreen>
    </iframe>
</div>


<section class="contact">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Contact Us</p>
        </div>

        <div class="row">

            <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                <div class="info">
                    <div class="address">
                        <i class="icofont-google-map"></i>
                        <h4>Location:</h4>
                        <p>Jl. Monginsidi, Magetan</p>
                    </div>

                    <div class="email">
                        <i class="icofont-envelope"></i>
                        <h4>Email:</h4>
                        <p>sman1magetan@sch.id</p>
                    </div>

                    <div class="phone">
                        <i class="icofont-phone"></i>
                        <h4>Call:</h4>
                        <p>+8993208409</p>
                    </div>

                </div>

            </div>
            <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

                <form action="/Contact/create" method="POST" class="inputform">
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">

                        </div>
                        <div class="col-md-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">

                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">

                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" data-rule="required" data-msg="Please write something for us"></textarea>

                    </div>
                    <button type="submit" name="submit" value="Submit">Send Message</button>
                </form>

            </div>

        </div>

    </div>
</section><!-- End Contact Section -->



<!-- ======= Footer ======= -->
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

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="/package/dist/sweetalert2.all.min.js"></script>
<script src="/package/dist/sweet.js"></script>


<?php $this->endSection('content'); ?>