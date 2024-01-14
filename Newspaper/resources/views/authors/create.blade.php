@extends('authors.layout')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)

        <li>{{ $error }}</li>

        @endforeach
    </ul>
</div>

@endif

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Add Author</b></div>
            <div class="col col-md-6">
                <a href="{{ route('authors.index') }}" class="btn btn-primary btn-sm float-end">Back</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('authors.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Mã tác giả</label>
                <div class="col-sm-10">
                    <input type="text" name="ma_tgia" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Tên tác giả</label>
                <div class="col-sm-10">
                    <input type="text" name="ten_tgia" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Hình tác giả</label>
                <div class="col-sm-10">
                    <input type="text" name="hinh_tgia" class="form-control" />
                </div>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Add" />
            </div>
        </form>
    </div>
</div>

@endsection('content')