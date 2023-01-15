@extends('layouts.admin')

@section('container')
    <h1>{{ $title }}</h1>
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ route('category.update') }}">
                @csrf
                <div class="form-group row">
                    <label for="category_name" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="category_name" name="id"
                            value="{{ $category->id }}">
                        <input type="text" class="form-control" id="category_name" name="category_name"
                            value="{{ $category->category_name }}">
                    </div>
                </div>
                <button class="mt-3 btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection
