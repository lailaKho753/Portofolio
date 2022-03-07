@extends('welcome')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'About Me')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten') 
<header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="rounded-image" width="250px" height="250px" src="assets/img/oracle.jpeg" alt="..." />
                <!-- Masthead Heading-->
                <p class="masthead-subheading font-weight-light mb-0">Certification of Completion</p>
                <h3 class="masthead-heading text-uppercase mb-0">Database Design and Programming with SQL</h3>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Oracle Academy</p>
            </div>
            <br>
            <br>
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="rounded-image" width="250px" height="250px" src="assets/img/bnsp.jpeg" 
                <!-- Masthead Heading-->
                <p class="masthead-subheading font-weight-light mb-0">Certification of Competence</p>
                <h3 class="masthead-heading text-uppercase mb-0">Junior Web Developer</h3>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Badan Nasional Sertifikasi Profesi</p>
            </div>
</header>
@endsection