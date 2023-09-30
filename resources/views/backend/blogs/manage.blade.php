@extends('backend.master')

@section('title')

    Manage Blog
@endsection
@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Manage Blog</h2>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Blog Title</th>
                                <th>Status</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($blogs as $blog)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ $blog->status }}</td>
                                    <td>{{ $blog->description }}</td>
                                    <td><img src="{{ $blog->image }}" alt=""></td>
                                    <td>
                                        <a href="" class="btn btn-success">edit</a>
                                        <a href="" class="btn btn-danger">delete</a>
                                    </td>
                                    <td></td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
