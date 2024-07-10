@extends('layouts.main')

@section('bodi-web')
    <div class="container">
        <div class="row g-5 justify-content-center">
            <div class="col-md-8">
                <article>
                    <h2 class="mt-5">{{ $post->title }}</h2>
                    <p>By. Yohanes Diyan in <a href="/posts" class="text-decoration-none">{{ $post->category->name }}</a></p>
                    
                    @if($post->image)
                        <div style="max-height: 450px; overflow:hidden;">
                            <img src="{{ asset('storage/' .$post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                        </div>
                  @endif
                    {!! $post->body !!}
                    
                </article>
            </div>
        </div>
        <div class="back text-end my-5 col-md-3 p-0">
            <a href="/posts" class="text-decoration-none">Back to Blog</a>
        </div>
    </div>
@endsection
