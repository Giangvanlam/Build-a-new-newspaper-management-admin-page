@extends('authors.layout')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
    {{ $message }}
</div>

@endif

<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('search') }}" enctype="multipart/form-data">
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
                <input type="submit" class="btn btn-primary" value="Search" />
            </div>
        </form>
    </div>
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Author Data</b> 
        </div>
            <div class="col col-md-6">
                <a href="{{ route('authors.create') }}" class="btn btn-success btn-sm float-end">Add</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Mã tác giả</th>
                <th>tên tác giả</th>
                <th>Hình tác giả</th>
            </tr>

            @foreach($authors as $row)

            <tr>
                <td>{{ $row->ma_tgia}}</td>
                <td>{{ $row->ten_tgia }}</td>
                <td><img src="{{ $row->hinh_tgia }}" alt="Hình ảnh bài viết" width="100px"></td>
                <td>
                    <form method="post" action="{{ route('authors.destroy', $row->ma_tgia) }}">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('authors.edit',$row->ma_tgia) }}"  class="btn btn-warning btn-sm">Edit</a>
                        <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                    </form>
                </td>
            </tr>

            @endforeach

        </table>
        <div class="d-flex justify-content-center">
            <nav>
                <ul class="pagination">
                    @if ($authors->currentPage() != 1)
                    <li class="page-item">
                        <a class="page-link" href="{{ $authors->previousPageUrl() }}" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    @endif
                    @for ($i = max(1, $authors->currentPage() - 2); $i <= min($authors->lastPage(), $authors->currentPage() + 2); $i++)
                        <li class="page-item {{ ($authors->currentPage() == $i) ? 'active' : '' }}">
                            <a class="page-link" href="{{ $authors->url($i) }}">{{ $i }}</a>
                        </li>
                        @endfor
                        @if ($authors->currentPage() != $authors->lastPage())
                        <li class="page-item">
                            <a class="page-link" href="{{ $authors->nextPageUrl() }}">Next</a>
                        </li>
                        @endif
                </ul>
            </nav>
        </div>

    </div>
</div>

@endsection