@extends('layouts.admin')

@section('container')
    <h1>{{ $title }}</h1>
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ route('category.store') }}">
                @csrf
                <div class="form-group row">
                    <label for="category_name" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="category_name" name="category_name">
                    </div>
                </div>
                <button class="mt-3 btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection
