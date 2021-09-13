@extends('main')

@section('main')
    <h2 class="text-center">Registrasi</h2>
    <form action="/regist" method="POST">
        @csrf
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control @error('username')is-invalid @enderror" id="username" name="username" value="{{ old('username') }}">
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email')is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
            @error('email')
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
        
        <div class="mb-3">
            <label for="conpassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control @error('conpassword')is-invalid @enderror" id="conpassword" name="conpassword">
            @error('conpassword')
          <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
          </div>
        <button type="submit" class="btn btn-primary">Registrasi</button>
      </form>
@endsection