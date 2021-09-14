@extends('main')

@section('main')
    <h2 class="text-center">login</h2>
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @elseif (session()->has('loginerror'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('loginerror') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <form action="/login" method="POST">
      @csrf
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control @error('username')is-invalid @enderror" id="username" name="username">
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror

        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control @error('password')is-invalid @enderror" id="password" name="password">
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">login</button>
        <a href="/regist" class="btn btn-success d-inline border-1">Registrasi</a>
      </form>
@endsection