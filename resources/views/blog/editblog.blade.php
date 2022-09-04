@extends('companies.master')
@section('title')
    Edit blog
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Edit Blog</h3>
                        </div>
                        <div class="card-body ">
                            <h3 class="text-success">{{ Session::has('message') ? Session::get('message') :' ' }}</h3>

                            <form action="{{ route('update-blog') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ $blog->id }}">
                                <div class="row ">
                                    <label for="" class="colmd4">Blog Title</label>
                                    <div class="col-md-8 mt-2">
                                        <input type="text" class="form-control" name="blog_title" value="{{ $blog->blog_title }}" >
                                    </div>
                                </div>
                                <div class="row ">
                                    <label for="" class="colmd4">Blog Author</label>
                                    <div class="col-md-8 mt-2">
                                        <input type="text" class="form-control" name="blog_author" value="{{ $blog->blog_author }}">
                                    </div>
                                </div>
                                <div class="row ">
                                    <label for="" class="colmd4">Blog Description</label>
                                    <div class="col-md-8 mt-2">
                                        <textarea name="blog_description" class="form-control" id="" cols="30" rows="5" value="{{ $blog->blog_description }}">{{ $blog->blog_description }}</textarea>
                                    </div>
                                </div>

                                <div class="row ">
                                    <label for="" class="col-md-4">Blog Image</label>
                                    <div class="col-md-8 mt-2 py-3">
                                        <img class="text-center" src="{{ asset($blog->image) }}" alt="" style="height: 80px">
                                        <input type="file" name="image" class="py-3" accept="image/*">
                                    </div>
                                </div>

                                <div class="text-center mt-3">
                                    <input type="submit" class="btn btn-outline-success rounded-0 mt-2" value="Update Blog">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
