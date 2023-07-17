@extends('layouts.template')
        <!-- START DATA -->
@section('kontent')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                @if(session('succes'))
                <div class="alert alert-succes">
                    {{session('succes')}}
                </div>
                @endif
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href={{route('Lesson.create')}} class="btn btn-primary">+ Tambah Data</a>
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
                            <td>{{$item->id}}</td>
                            <td>{{$item->nama_matpel}}</td>
                            <td>{{$item->desc_matpel}}</td>
                            <td>{{$item->linkV}}</td>
                            
                            <td>
                                <a href='' class="btn btn-warning btn-sm">Edit</a>
                                <a href='' class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
               
          </div>
          <!-- AKHIR DATA -->
          @endsection