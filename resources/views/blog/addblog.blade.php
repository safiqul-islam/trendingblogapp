@extends('companies.master')
@section('title')
   Add blog
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Add Blog</h3>
                        </div>
                        <div class="card-body ">
                            <h3 class="text-success">{{ Session::has('message') ? Session::get('message') :' ' }}</h3>

                            <form action="{{ route('new_blog') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row ">
                                    <label for="" class="colmd4">Blog Title</label>
                                    <div class="col-md-8 mt-2">
                                        <input type="text" class="form-control" name="blog_title">
                                    </div>
                                </div>
                                <div class="row ">
                                    <label for="" class="colmd4">Blog Author</label>
                                    <div class="col-md-8 mt-2">
                                        <input type="text" class="form-control" name="blog_author">
                                    </div>
                                </div>
                                <div class="row ">
                                    <label for="" class="colmd4">Blog Description</label>
                                    <div class="col-md-8 mt-2">
                                        <textarea name="blog_description" class="form-control" id="" cols="30" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="row ">
                                    <label for="" class="colmd4">Blog Image</label>
                                    <div class="col-md-8 mt-2">
                                        <input type="file" name="image" accept="image/*">
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <input type="submit" class="btn btn-outline-success rounded-0 mt-2" value="Add Blog">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
