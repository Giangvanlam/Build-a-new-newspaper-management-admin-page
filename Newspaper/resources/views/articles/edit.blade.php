@extends('articles.layout')

@section('content')

<div class="card">
    <div class="card-header">Edit Article</div>
    <div class="card-body">
        <form method="post"action="{{ route('articles.update', $article->ma_bviet) }}" enctype="multipart/form-data">
        {{-- action="{{ route('articles.update', ['article'=>$article->ma_bviet]) }}" enctype="multipart/form-data"> --}}
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Tiêu đề</label>
                <div class="col-sm-10">
                    <input type="text" name="tieude" class="form-control" value="{{ $article->tieude }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Tên bài hát</label>
                <div class="col-sm-10">
                    <input type="text" name="ten_bhat" class="form-control" value="{{ $article->ten_bhat }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Mã thể loại</label>
                <div class="col-sm-10">
                    <input type="text" name="ma_tloai" class="form-control" value="{{ $article->ma_tloai }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Tóm tắt </label>
                <div class="col-sm-10">
                    <input type="text" name="tomtat" class="form-control" value="{{ $article->tomtat }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Nội dung </label>
                <div class="col-sm-10">
                    <input type="text" name="noidung" class="form-control" value="{{ $article->noidung }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Mã tác giả </label>
                <div class="col-sm-10">
                    <input type="text" name="ma_tgia" class="form-control" value="{{ $article->ma_tgia }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Ngày viết </label>
                <div class="col-sm-10">
                    <input type="text" name="ngayviet" class="form-control" value="{{ $article->ngayviet }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Hình ảnh </label>
                <div class="col-sm-10">
                    <input type="text" name="hinhanh" class="form-control" value="{{ $article->hinhanh }}" />
                </div>
            </div>
            <div class="text-center">
                <input type="hidden" name="hidden_id" value="{{ $article->ma_bviet }}" />
                <input type="submit" class="btn btn-primary" value="Edit" />
            </div>
        </form>
    </div>
</div>


@endsection('content')
