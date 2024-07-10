@extends('layouts.main')

@section('bodi-web')

<div class="video-card">
  <video autoplay muted loop>
    <source src="image/home.mp4" type="video/mp4" class="postion-relative">
  </video>
  <svg class="postition-absolute svg-overlay" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" 
    d="M0,128L48,128C96,128,192,128,288,149.3C384,171,480,213,576,208C672,203,768,149,864,138.7C960,128,1056,160,1152,
    160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,
    672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</div>

<div class="interaksi text-center mx-auto px-3">
  <q> Interaksi manusia dan komputer (Human-Computer Interaction, HCI) adalah bidang studi yang fokus pada desain, evaluasi, dan implementasi antarmuka pengguna serta teknologi interaktif, dengan tujuan untuk meningkatkan pengalaman pengguna. </q>
</div>

<div class="home-blog">
  <div class="container blog px-4">
    <div class="title-bt">
      <h2 class="pb-2 text-center">MY BLOG</h2>
    </div>
    <div class="row">
      @foreach ($posts as $post)
      <div class="col-md-6 mb-4">
      <div class="card mb-3 rounded shadow-sm">
        <div class="row g-0">
          <div class="col-md-4">
            @if($posts[0]->image)
                <div style="max-height: 450px; overflow:hidden;">
                  <img src="{{ asset('storage/' .$post->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">
                 </div>
              @else
                <img src="image/blog.jpg?{{ $posts[0]->title }}" class="card-img-top" alt="{{ $posts[0]->title }}">
              @endif
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title fs-3"><a href="/posts/{{ $post->slug }}" class="text-decoration-none text-black">{{ $post->title }}</a></h5>
              <p class="card-text"><i class="bi bi-clock-history"></i> {{ $post->created_at->diffForHumans() }}</p>
              <p class="card-text mb-3"> {{ Str::limit($post->excerpt, 130) }}</p>
              <p class="card-text"><a href="/posts/{{ $post->slug }}" class="read-more text-decoration-none">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      </div>
      @endforeach
    </div>
    <button class="baca d-block mx-auto text-center rounded-5 p-2">
      <a href="/posts">
        <h5>SEE MORE BLOG</h5>
      </a>
    </button>
  </div>
</div>

@endsection