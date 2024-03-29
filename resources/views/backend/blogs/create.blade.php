@extends('backend.master')

@section('title')

    Create Blog
@endsection


@section('body')

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center" class="bg-dark" >Create Blog</h3>
                    </div>




                    <div class="card-body">
                        <span class="text-success">{{session('success')}}</span>
                        <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data" >
                            @csrf
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Blog Category</label>
                                <div class="col-md-8">
                                    <select name="blog_category_id" id="" class="form-control">
                                        @foreach($blogCategories as $blogCategory)
                                        <option value="{{ $blogCategory->id }}">{{ $blogCategory->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Blog Title</label>
                                <div class="col-md-8">
                                    <input type="text" name="title" class="form-control" placeholder="Enter Your Name" />
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="" class="col-md-4">Description</label>
                                <div class="col-md-8">
                                    <textarea name="description" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="" class="col-md-4">Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" class="form-control" placeholder="Enter Your Email" />
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="" class="col-md-4">Status</label>
                                <div class="col-md-8">
                                    <label for=""> <input type="radio" name="status" checked value="1">Published</label>
                                    <label for=""> <input type="radio" name="status" value="0">Unpublished</label>
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
