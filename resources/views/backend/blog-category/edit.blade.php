@extends('backend.master')

@section('title')

    Edit Blog Category
@endsection


@section('body')

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center" class="bg-dark" >Edit Blog Category</h3>
                    </div>




                    <div class="card-body">
                        <span class="text-success">{{session('success')}}</span>
                        <form action="{{route('blog-categories.update',['id'=>$blogCategory->id])}}" method="post" enctype="multipart/form-data" >
                            @csrf
                            <div class="row">
                                <label for="" class="col-md-4">Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name"  value="{{ $blogCategory->name }}" class="form-control" placeholder="Enter Your Name" />
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="" class="col-md-4">Email</label>
                                <div class="col-md-8">
                                    <input type="text" name="email" value="{{ $blogCategory->email }}" class="form-control" placeholder="Enter Your Email" />
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="" class="col-md-4">Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image"  class="form-control" placeholder="Enter Your Email" />
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="" class="col-md-4">Status</label>
                                <div class="col-md-8">
                                    <label for=""> <input type="radio"  name="status" checked value="1">Published</label>
                                    <label for=""> <input type="radio" name="status" value="0">Unpublished</label>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="" class="col-md-4">Description</label>
                                <div class="col-md-8">
                                    <textarea name="description" id="" cols="30" rows="10" >{{ $blogCategory->description }}</textarea>
                                </div>
                            </div>


                            <div class="row mt-3">
                                <label for="" class="col-md-4">Submit</label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-success"  />
                                </div>
                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>
    </div>



@endsection
