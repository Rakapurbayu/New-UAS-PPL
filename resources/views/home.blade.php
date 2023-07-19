@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Teacher') }}</div>
                <div class="card-body">
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">                            
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>{{ __('Anda berhasil masuk') }}</p>
                    <a href="{{ route('Lesson.index') }}" class="btn btn-primary">{{ __('Edit Materi') }}</a>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="my-1 p-3 bg-body">

</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Student') }}</div>
                <div class="card-body">
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">                            
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Dibatasi') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
