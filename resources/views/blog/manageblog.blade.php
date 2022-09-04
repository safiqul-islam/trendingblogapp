@extends('companies.master')
@section('title')
    Manage Blog
@endsection

@section('body')
<section class="py">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card my-4">
                    <div class="card-header text-center">
                        <h2>All Blog Information</h2>
                    </div>
                    <h3 class="text-warning">{{ Session::has('message') ? Session::get('message') :' ' }}</h3>
                    <div class="card-body">
                        <table class="table table-responsive table-striped">
                            <thead>
                            <tr>
                                <td>#</td>
                                <td>Title</td>
                                <td>Author</td>
                                <td>Description</td>
                                <td>Image</td>
                                <td>Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $blog->blog_title }}</td>
                                <td>{{ $blog->blog_author }}</td>
                                <td>{{ $blog->blog_description }}</td>
                                <td>
                                    <img class="text-center" src="{{ $blog->image }}" alt="" style="height: 50px">
                                </td>
                                <td>
                                    <a href="{{ route('edit-blog',['id'=>$blog->id]) }}" class="btn btn-warning py-2">
                                        <li class="fa-regular fa-edit"></li>
                                    </a>
                                    <a href="{{ route('delete-blog',['id'=>$blog->id]) }}" onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger mt-2">
                                        <li class="fa-regular fa-trash mt-2"></li>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
