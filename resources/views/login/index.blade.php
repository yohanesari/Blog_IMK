@extends('layouts.main')

@section('bodi-web')
<div class="login-page d-flex align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4">
        @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        @if (session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <main class="form-signin w-100 m-auto">
          <div class="form-container">
            <form action="/login" method="post">
              @csrf
              <h1 class="h3 my-5 d-block text-center text-white">Please Login</h1>

              <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" 
                placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="email">Email</label>
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                <label for="password">Password</label>
              </div>
              <button class="btn btn-primary w-100 py-2 mt-2" type="submit">Login</button>
            </form>
            <small class="question d-block text-center mt-3">Don't have account? <a href="/signup" class="text-decoration-none">Register Now</a></small>
          </div>
        </main>
      </div>
    </div>
  </div>
</div>

@endsection
