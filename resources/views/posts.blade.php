@extends('layouts.main')

@section('bodi-web')
        <div class="video-card">
            <video autoplay muted loop>
              <source src="image/blog.mp4" type="video/mp4" class="postion-relative">
            </video>
            <svg class="postition-absolute svg-overlay" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" 
              d="M0,128L48,128C96,128,192,128,288,149.3C384,171,480,213,576,208C672,203,768,149,864,138.7C960,128,1056,160,1152,
              160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,
              672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
          </div>
        <div class="blog">
            <div class="container px-4">
                <div class="title-ab">
                    <h2 class="pb-2 text-center">ALL BLOG</h2>
                  </div>

                @if($posts->count())
                    {{-- Display the first post separately --}}
                    <div class="card mb-3">
                        @if($posts[0]->image)
                            <div style="max-height: 450px; overflow:hidden;">
                            <img src="{{ asset('storage/' .$posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">
                            </div>
                        @else
                            <img src="image/blog.jpg?{{ $posts[0]->title }}" class="card-img-top" alt="{{ $posts[0]->title }}">
                        @endif
                        
                        <div class="blog card-body text-center">
                            <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                                class="text-decoration-none text-black title-body">{{ $posts[0]->title }}</a></h3>
                            <small>
                                <p>By. Yohanes Diyan in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none text-black">{{ $posts[0]->category->name }}</a>
                                    {{ $posts[0]->created_at->diffForHumans() }}</p>
                            </small>
                            <p class="card-text">{{ $posts[0]->excerpt }}</p>
                            <a href="/posts/{{ $posts[0]->slug }}" class="read-more text-decoration-none">Read More</a>
                        </div>
                    </div>

                    {{-- Display the rest of the posts --}}
                    <div class="container">
                        <div class="row">
                            @foreach ($posts->skip(1) as $post)
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <div class="position-absolute px-3 py-2 text-white"
                                             style="background-color: rgba(0, 0, 0, 0.7)">{{ $post->category->name }}</div>
                                             @if($post->image)
                                                <img src="{{ asset('storage/' .$post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                                            @else
                                                <img src="image/blog.jpg?{{ $post->title }}" class="card-img-top"
                                            alt="{{ $post->title }}">
                                            @endif
                                            
                                        <div class="blog card-body">
                                            <h5 class="card-title"><a href="/posts/{{ $post->slug }}"
                                                                       class="text-decoration-none text-black">{{ $post->title }}</a>
                                            </h5>
                                            <p>By. Yohanes Diyan in <a href="/categories/{{ $post->category->slug }}"
                                                                      class="text-decoration-none text-black">{{ $post->category->name }}</a>
                                            </p>
                                            <p class="card-text mb-auto">
                                                {{ Str::limit($post->excerpt, 150) }}
                                            </p>
                                            <a href="/posts/{{ $post->slug }}" class="read-more text-decoration-none">Read More</a>
                                            <p class="text-end"><svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                                    height="13" fill="currentColor"
                                                                    class="bi bi-clock-history" viewBox="0 0 16 16"
                                                                    style="margin-right: 7px">
                                                    <path
                                                        d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7 7 0 0 0-.985-.299l.219-.976q.576.129 1.126.342zm1.37.71a7 7 0 0 0-.439-.27l.493-.87a8 8 0 0 1 .979.654l-.615.789a7 7 0 0 0-.418-.302zm1.834 1.79a7 7 0 0 0-.653-.796l.724-.69q.406.429.747.91zm.744 1.352a7 7 0 0 0-.214-.468l.893-.45a8 8 0 0 1 .45 1.088l-.95.313a7 7 0 0 0-.179-.483m.53 2.507a7 7 0 0 0-.1-1.025l.985-.17q.1.58.116 1.17zm-.131 1.538q.05-.254.081-.51l.993.123a8 8 0 0 1-.23 1.155l-.964-.267q.069-.247.12-.501m-.952 2.379q.276-.436.486-.908l.914.405q-.24.54-.555 1.038zm-.964 1.205q.183-.183.35-.378l.758.653a8 8 0 0 1-.401.432z"/>
                                                    <path
                                                        d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z"/>
                                                    <path
                                                        d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5"/>
                                                </svg>{{ $post->created_at->diffForHumans() }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <p class="text-center fs-4">No Post Found.</p>
                @endif
            </div>
        </div>
@endsection