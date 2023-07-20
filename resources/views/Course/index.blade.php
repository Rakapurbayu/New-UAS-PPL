<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZenSu</title>
</head>
<body>
@extends('layouts.template')
<!-- START DATA -->
@section('kontent')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <!-- FORM PENCARIAN -->
    <div class="pb-3">
        <form class="d-flex" action="{{ route('Course.index') }}" method="get">
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
        <a href="{{ route('Course.create') }}" class="btn btn-primary">+ Tambah Data</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-2">ID Course</th>
                <th class="col-md-2">Nama Course</th>
                <th class="col-md-3">Deskripsi Course</th>
                <th class="col-md-3">Link Course</th>
                <th class="col-md-3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_course }}</td>
                <td>{{ $item->desc_course }}</td>
                <td>{{ $item->linkC }}</td>
                <td>
                    <a href="{{ route('Course.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('Course.destroy', $item->id) }}" method="POST" style="display: inline-block">
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
            <a href="{{ route('Course.index') }}" class="btn btn-primary">Back to Main</a>
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
