<!-- START FORM -->
@extends('layouts.template')
@section('kontent')

 @if ($errors->any())
 <div class="pt-3">
<div class='alert alert-danger'>
<ul>
    @foreach ($errors->all() as $item)
        <li>{{$item}}</li>
    @endforeach
</ul>
</div>
 </div>   
 @endif

 <form action="{{ $mode == 'edit' ? route('Lesson.update', $lesson->id) : route('Lesson.store') }}" method="POST">
    @csrf
    @if ($mode == 'edit')
        @method('PUT')
    @endif
    <div class="mb-3 row">
        <label for="nama_matpel" class="col-sm-2 col-form-label">Mata Pelajaran</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="nama_matpel" value="{{ $mode == 'edit' ? $lesson->nama_matpel : old('nama_matpel') }}" id="nama_matpel">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="desc_matpel" class="col-sm-2 col-form-label">Deskripsi Video</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="desc_matpel" value="{{ $mode == 'edit' ? $lesson->desc_matpel : old('desc_matpel') }}" id="desc_matpel">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="linkV" class="col-sm-2 col-form-label">Link Video</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="linkV" value="{{ $mode == 'edit' ? $lesson->linkV : old('linkV') }}" id="linkV">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="linkV" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
            <a href="{{ route('Lesson.index') }}" class="btn btn-danger">BATAL</a>
        </div>
    </div>
</form>
</div>
@endsection