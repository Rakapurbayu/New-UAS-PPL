 @extends('layouts.template')
 <!-- START FORM -->
 @section('kontent')
 <form action='{{ route('Lesson.store')}}' method='post'>
    @csrf
            <div class="mb-3 row">
                <label for="nama matpel" class="col-sm-2 col-form-label">Mata Pelajaran</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama_matpel' id="nama_matpel">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama matpel" class="col-sm-2 col-form-label">Deskripsi Pelajaran</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='desc_matpel' id="desc_matpel">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="linkV" class="col-sm-2 col-form-label">Link Video</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='linkV' id="linkV">
                </div>
            </div>    
            <div class="mb-3 row">
                <label for="linkV" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
        </div>
        </form>
        </div>
        <!-- AKHIR FORM -->
        @endsection