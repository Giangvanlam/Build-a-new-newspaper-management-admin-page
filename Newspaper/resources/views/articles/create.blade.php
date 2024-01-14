@extends('articles.layout')

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
            <div class="col col-md-6"><b>Add Article</b></div>
            <div class="col col-md-6">
                <a href="{{ route('articles.index') }}" class="btn btn-primary btn-sm float-end">Back</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('articles.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Tiêu đề</label>
                <div class="col-sm-10">
                    <input type="text" name="tieude" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Tên bài hát</label>
                <div class="col-sm-10">
                    <input type="text" name="ten_bhat" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Mã thể loại</label>
                <div class="col-sm-10">
                    <input type="text" name="ma_tloai" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Tóm tắt</label>
                <div class="col-sm-10">
                    <input type="text" name="tomtat" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Nội dung</label>
                <div class="col-sm-10">
                    <input type="text" name="noidung" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Mã tác giả</label>
                <div class="col-sm-10">
                    <input type="text" name="ma_tgia" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Ngày viết</label>
                <div class="col-sm-10">
                    <input type="text" name="ngayviet" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Hình ảnh</label>
                <div class="col-sm-10">
                    <input type="text" name="hinhanh" class="form-control" />
                </div>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Add" />
            </div>
        </form>
    </div>
</div>

@endsection('content')