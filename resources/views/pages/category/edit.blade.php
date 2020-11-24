@php
$no = 1;
// var_dump($data)
@endphp
@extends('layouts/global')
@section('pages')
<h1 class="h3 mb-2 text-gray-800">Form Edit Category</h1>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Form</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('category.update', [$data->id]) }}">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label>Judul</label>
            <input type="text" class="form-control" id="title" placeholder="Masukan Judul" name="title" value="{{$data->title}}">
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
            <textarea class="form-control" id="description" rows="3" name="description">{{$data->description}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>




    </div>
</div>
@endsection
