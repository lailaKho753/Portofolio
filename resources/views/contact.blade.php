@extends('welcome')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Contact')
@section('konten') 
        
<!-- Contact Section-->
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
            <h3 class="masthead-heading text-uppercase mb-0">Contact Me</h3>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <br>
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            Yogyakarta,Indonesia
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4"></h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/laila.khoirunnisa.7"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/LailaKho99"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/laila-kni/"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="mailto:laila99@mail.ugm.ac.id?subject=Hallo Laila, salam kenal!"><i class="fab fa-fw fa-solid fa-envelope"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Journal Publication</h4>
                        <p class="lead mb-0">
                            <a href="https://jurnal.ugm.ac.id/juliet/article/view/53820">JuLIET (Jurnal Listrik, Instrumentasi, dan Elektronika Terapan)</a>
                            .
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        @endsection