@extends('layouts.main')

@section('bodi-web')
<div class="login-page">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4">
        <main class="form-registration w-100">
          <form action="/signup" method="POST">
            @csrf
            <h1 class="h3 my-5 d-block text-center text-white">Registration Form</h1>
            <div class="form-floating mb-3">
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
              <label for="name">Name</label>
              @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-floating mb-3">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
              <label for="email">Email address</label>
              @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-floating mb-3">
              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
              <label for="password">Password</label>
              @error('password')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <button class="btn btn-primary w-100 py-2 mt-2" type="submit">Register</button>
          </form>
          <small class="d-block text-center mt-3">Already have an account? <a href="/login">Login</a></small>
        </main>
      </div>
    </div>
  </div>
</div>
@endsection
