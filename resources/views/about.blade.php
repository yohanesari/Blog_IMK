@extends('layouts.main')

@section('bodi-web')

<div class="video-card">
  <video autoplay muted loop>
    <source src="image/about.mp4" type="video/mp4" class="postion-relative">
  </video>
  <svg class="postition-absolute svg-overlay" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,96L48,106.7C96,117,192,139,288,176C384,213,480,267,576,282.7C672,299,768,277,864,266.7C960,256,1056,256,1152,261.3C1248,267,1344,277,1392,282.7L1440,288L1440,320L1392,320C
    1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
  
</div>

{{-- ISIAN --}}

<div class="container">
  <div class="about-title">
    <div class="title-ab">
      <h2 class="pb-2 text-center">ABOUT US</h2>
    </div>
  </div>
</div>

<div class="about-body mb-3">
  <div class="row">    
    <div class="back1 col-md-4">
      <figure>
        <img src="/image/bio.jpg" alt="Bio">
      </figure>
    </div>
    <div class="back2 col-md-8">
      <div class="desc-about">
        <h4 class="fs-1">Hai, Saya Yohanes Diyan Hariawan</h4>
        <strong class="fs-5">Saya adalah owner dari blog ini.</strong>
        <p>Blog ini merupakan Tugas Individu Mata Kuliah Interaksi Manusia dan Komputer yang berisikan tentang materi perkuliahan saya yang saya
          rangkum selama mengikuti perkuliahan di kampus.
        </p>
      </div>
    </div>
  </div>
</div>
@endsection