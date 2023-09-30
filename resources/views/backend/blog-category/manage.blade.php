@extends('backend.master')

@section('title')

    Manage Blog Category
@endsection
@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Manage Blog Categories</h2>
                    </div>
                    <div class="card-body">
                        <span class="text-success">{{session('success')}}</span>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Category Status</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($allCategories as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->status }}</td>
                                    <td>{{ $category->description }}</td>
                                    <td><img src="{{ $category->image }}" alt=""></td>
                                    <td>
                                        <a href="{{route('blog-categories.edit',['id' => $category->id])}}" class="btn btn-success">edit</a>
                                        <a href="{{route('blog-categories.delete',['id' => $category->id])}}" class="btn btn-danger">delete</a>
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
