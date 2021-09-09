@extends('main')
@section('main')
<h2 class="text-center">Tambah Data</h2>
<form action="data/" method="post">
  @csrf
    <div class="mb-3">
      <label for="nama" class="form-label">Nama Lengkap</label>
      <input type="text" class="form-control" id="nama" name="nama">
    </div>
    <div class="mb-3">
      <label for="alamat" class="form-label">Alamat</label>
      <input type="text" class="form-control" id="alamat" name="alamat">
    </div>
    <div class="mb-3">
        <label for="tgll" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tgll" name="tgll">
      </div>
    <button type="submit" class="btn btn-primary">Tambah Data</button>
  </form>
@endsection