@extends('layouts.main')

@section('bodi-web')
<div class="container">
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-md-4">
            <div class="box-post">
                <style>
                    .box-post {
                        background-color: white;
                        box-shadow: 0 0 25px rgba(0, 0, 0, 0.1);
                        padding: 25px;
                        height: 90%;
                        border-radius: 10px;
                        transition: box-shadow 0.3s; /* Animasi perubahan efek box-shadow */
                    }

                    .box-post:hover {
                        box-shadow: 0 0 35px rgba(0, 0, 0, 0.2); /* Efek ketika hover */
                    }
                    .box-post h2 a {
                        text-decoration: none;
                        color: black;
                    }
                </style>
                <article class="mb-5">
                    <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
                    <p>{{ $post->excerpt }}</p>
                    {{-- <p><a href="/posts/{$post->id}">Read More...</a></p> --}}
                </article>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
