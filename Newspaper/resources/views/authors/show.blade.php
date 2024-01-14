@extends('artist_name')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Author Details</b></div>
            <div class="col col-md-6">
                <a href="{{ route('authors.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b></b></label>
            <div class="col-sm-10">
                {{ $artist->artist_name }}
            </div>
        </div>
    </div>
</div>

@endsection('content')