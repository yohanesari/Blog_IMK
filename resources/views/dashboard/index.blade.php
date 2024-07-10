@extends('dashboard.layouts.main')
@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="dashboard-card shadow position-relative overflow-hidden p-3 p-md-5 m-md-3">
    <div class="col-md-8">
      <h1 class=" fw-bold">Wellcome Back, {{ auth()->user()->name }}</h1>
      <h3 class="fw-normal mb-3">Create Your Blog in My Post</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="shadow position-relative overflow-hidden p-3 m-md-3" >
        <h4 class="mb-4 text-center">My Blog</h4>
        <p>Number of posts : {{ $totalPosts }}</p>
      </div>
    </div>
    <div class="col-md-8">
      <div class="d-flex shadow gap-5 p-3 m-md-3">
          <div class="img-dash">
            <img src="image/bio.jpg" alt="">
          </div>
          <div class="desc-dash">
            <h4 class="mb-5 text-center">My Data</h4>
            <div class="row">
              <div class="col-md-5">
              <p class="fw-bolder">Username </p>
              <p class="fw-bolder">Email </p>              
              </div>
              <div class="col-md-7">
                <p>{{ auth()->user()->name }}</p>
                <p>{{ auth()->user()->email }}</p>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</main>
@endsection