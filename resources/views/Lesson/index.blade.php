<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body class="bg-dark">
    <main class="container">
@extends('layouts.template')
<!-- START DATA -->
@section('kontent')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <!-- FORM PENCARIAN -->
    <div class="pb-3">
        <form class="d-flex" action="{{ route('Lesson.search') }}" method="get">
            <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
            <button class="btn btn-secondary" type="submit">Cari</button>
        </form>
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">
        <a href="{{ route('Lesson.create') }}" class="btn btn-primary">+ Tambah Data</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-2">ID Mata Pelajaran</th>
                <th class="col-md-2">Mata Pelajaran</th>
                <th class="col-md-3">Deskripsi Matpel</th>
                <th class="col-md-3">Link Video</th>
                <th class="col-md-3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_matpel }}</td>
                <td>{{ $item->desc_matpel }}</td>
                <td>{{ $item->linkV }}</td>
                <td>
                    <a href="{{ route('Lesson.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('Lesson.destroy', $item->id) }}" method="POST" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Tampilkan pagination links -->
    {{ $data->links() }}
    <div class="d-flex justify-content-between">
        <div>
            Showing {{ $data->firstItem() }} to {{ $data->lastItem() }} of {{ $data->total() }} results
        </div>
        @if (Request::has('katakunci'))
        <div class="pb-3">
            <a href="{{ route('Lesson.index') }}" class="btn btn-primary">Back to Main</a>
        </div>
        @endif
    </div>
    <div class="d-flex justify-content-end mt-3">
        <a href="{{ route('home') }}" class="btn btn-warning">Back to Dashboard</a>
    </div>
</div>
@endsection
</body>
</html>
