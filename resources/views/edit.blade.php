@extends('main')
@section('main')
<h2 class="text-center">Edit Data</h2>
<form action="/data/{{ $bawadata->id }}" method="post">
  @method('put')
  @csrf
  <div class="mb-3">
    <label for="nama" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control" id="nama" name="nama" value="{{ $bawadata->nama }}">
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $bawadata->alamat }}"">
  </div>
  <div class="mb-3">
      <label for="tgll" class="form-label">Tanggal Lahir</label>
      <input type="date" class="form-control" id="tgll" name="tgll" value="{{ $bawadata->tgll }}">
    </div>
  <button type="submit" class="btn btn-primary">Edit Data</button>
</form>
@endsection