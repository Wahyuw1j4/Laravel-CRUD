@extends('main')

@section('main')
    <h2 class="text-center">login</h2>
    <form>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">login</button>
        <button type="submit" class="btn btn-success">Registrasi</button>
      </form>
@endsection