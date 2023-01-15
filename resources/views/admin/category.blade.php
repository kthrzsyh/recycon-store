@extends('layouts.admin')

@section('container')
    <div class="row">
        <div class="col-9">
            <h1>{{ $title }}</h1>
        </div>
        <div class="col-3"><a href="/admin/category/add" class="btn btn-primary">Add</a></div>
    </div>
    @if (session('status'))
        <div class="result">
            <div class="alert alert-success">{{ session('status') }}</div>
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Category Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $category->category_name }}</td>
                    <td>
                        <a href="/admin/category/edit/{{ $category->id }}"class="btn btn-success">Edit</a>
                        <a href="/admin/category/delete/{{ $category->id }}"class="btn btn-danger"
                            onclick="return confirm('Anda Yakin Menghapus Data?')">Delete</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
