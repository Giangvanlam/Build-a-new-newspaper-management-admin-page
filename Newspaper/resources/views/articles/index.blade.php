@extends('articles.layout')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
    {{ $message }}
</div>

@endif

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Article Data</b> 
        </div>
            <div class="col col-md-6">
                <a href="{{ route('articles.create') }}" class="btn btn-success btn-sm float-end">Add</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>MÃ bài viết</th>
                <th>Tiêu đề</th>
                <th>Tên bài hát</th>
                <th>Mã thể loại</th>
                <th>Tóm tắt</th>
                <th>Nội dung</th>
                <th>Mã tác giả</th>
                <th>Ngày viết</th>
                <th>Hình ảnh</th>
            </tr>

            @foreach($articles as $row)

            <tr>
                <td>{{ $row->ma_bviet}}</td>
                <td>{{ $row->tieude }}</td>
                <td>{{ $row->ten_bhat }}</td>
                <td>{{ $row->ma_tloai }}</td>
                <td>{{ $row->tomtat }}</td>
                <td>{{ $row->noidung }}</td>
                <td>{{ $row->ma_tgia }}</td>
                <td>{{ $row->ngayviet }}</td>
                <td><img src="{{ $row->hinhanh }}" alt="Hình ảnh bài viết" width="100px"></td>
                <td>
                    <form method="post" action="{{ route('articles.destroy', $row->ma_bviet) }}">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('articles.edit',$row->ma_bviet) }}" class="btn btn-warning btn-sm">Edit</a>
                        <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                    </form>
                </td>
            </tr>

            @endforeach

        </table>
        <div class="d-flex justify-content-center">
            <nav>
                <ul class="pagination">
                    @if ($articles->currentPage() != 1)
                    <li class="page-item">
                        <a class="page-link" href="{{ $articles->previousPageUrl() }}" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    @endif
                    @for ($i = max(1, $articles->currentPage() - 2); $i <= min($articles->lastPage(), $articles->currentPage() + 2); $i++)
                        <li class="page-item {{ ($articles->currentPage() == $i) ? 'active' : '' }}">
                            <a class="page-link" href="{{ $articles->url($i) }}">{{ $i }}</a>
                        </li>
                        @endfor
                        @if ($articles->currentPage() != $articles->lastPage())
                        <li class="page-item">
                            <a class="page-link" href="{{ $articles->nextPageUrl() }}">Next</a>
                        </li>
                        @endif
                </ul>
            </nav>
        </div>

    </div>
</div>
@endsection