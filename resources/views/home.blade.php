@extends('main')

{{-- @dd($data) --}}

@section('main')
<h2 class="text-center mb-3 mt-3">Tabel Data</h2>
<div class="buttonn d-flex justify-content-between">
    <a href="/tambah" class="btn btn-primary">Tambah Data</a>
    <a href="#" class="btn btn-warning">Logout</a>
</div>
@if (session()->has('success'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
<table class="table table-striped table-bordered border-secondary">
    <thead class="text-center">
        <th>no</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Tombol</th>
    </thead>
    @php($no=0)
    @foreach ($data as $i)
        @php($no++)
    <tr>
        <td>{{ $no }}</td>
        <td>{{ $i->nama }}</td>
        <td>{{ $i->alamat }}</td>
        <td>{{ $i->tgll }}</td>
        <td>
            <a class="btn btn-success" href="data/{{ $i->id }}/edit">Edit</a>
            <form action="data/{{ $i->id }}" method="POST" class="d-inline">
                @method('delete')
                @csrf```
                <button class="btn btn-danger border-0 mb-1" type="submit" onclick="return confirm('Data akan dihapus?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection`