@extends('welcome')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'About Me')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten') 
<section class="page-section bg-primary text-white mb-0" id="skill">
<div class="container d-flex align-items-center flex-column">
<h2>Operating System</h2>
<element class="numberlist">
    <ol>
       <a class="lead">Microsoft Windows</a>
    </ol>
</element>
<h2>Programming Languages</h2>
<element class="numberlist">
    <ol>
       <a class="lead">C/C++</a>
       <a class="lead">Javascript</a>
       <a class="lead">PHP</a>
       <a class="lead">Phyton(Basic)</a>
    </ol>
</element>
<h2>Software</h2>
<element class="numberlist">
    <ol>
       <a class="lead">Ms. Office</a>
       <a class="lead">Corel Draw</a>
       <a class="lead">Inventor 3D-Solidwork</a>
       <a class="lead">Fusion 360</a>
       <a class="lead">Photoshop CS6 (Basic)</a>
       <a class="lead">Adobe Premiere Pro (Basic)</a>
    </ol>
</element>
<h2>Others</h2>
<element class="numberlist">
    <ol>
       <a class="lead">HTML</a>
       <a class="lead">CSS</a>
       <a class="lead">Laravel</a>
       <a class="lead">Oracle Database</a>
    </ol>
</element>
<h2>Languages</h2>
<element class="numberlist">
    <ol>
       <a class="lead">Indonesia</a>
       <a class="lead">English</a>
    </ol>
</element>
</div>
</section>
@endsection