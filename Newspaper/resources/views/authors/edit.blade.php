@extends('authors.layout')

@section('content')

<div class="card">
    <div class="card-header">Edit Author</div>
    <div class="card-body">
        <form method="post"action="{{ route('authors.update', $author->ma_tgia) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Mã tác giả</label>
                <div class="col-sm-10">
                    <input type="text" name="ma_tgia" class="form-control" value="{{ $author->ma_tgia }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Tên tác giả</label>
                <div class="col-sm-10">
                    <input type="text" name="ten_tgia" class="form-control" value="{{ $author->ten_tgia }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Hình tác giả</label>
                <div class="col-sm-10">
                    <input type="text" name="hinh_tgia" class="form-control" value="{{ $author->hinh_tgia }}" />
                </div>
            </div>
            <div class="text-center">
                <input type="hidden" name="hidden_id" value="{{ $author->ma_tgia }}" />
                <input type="submit" class="btn btn-primary" value="Edit" />
            </div>
        </form>
    </div>
</div>


@endsection('content')
