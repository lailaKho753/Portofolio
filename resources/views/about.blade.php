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
                <img class="rounded-image" width="250px" height="275px" src="assets/img/laila.jpeg" alt="..." />
                <br>
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Hello!</h1>
                <br>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">My name is Laila Khoirunnisa Nurul Imani</p>
                <br>
                <p class="masthead-subheading font-weight-light mb-0">I love to learn about programming and highly interest in technology. During my senior year, I had some project with my lecturer in IoT field and using a website as the interface. After graduated, I had oracle database and Junior Web Developer training then I get my certification of completion for database design and database programming in SQL and certification of competence for Junior Web Developer. I’m really excited for what I was doing and I will not stop learning about new things.</p>
            </div>
</header>
@endsection