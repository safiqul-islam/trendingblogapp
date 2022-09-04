@extends('companies.master')
@section('title')
     Item details
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <h3>Item Details</h3>
                <div class="col-md-6">
                    <img class="text-center" src="{{ asset($blog->image) }}" alt="" style="height: 500px ;width: 500px">
                </div>
                <div class="col-md-6">
                    <h3>{{ $blog->blog_title }}</h3>
                    <p>{{ $blog->blog_author }}</p>
                    <p>{{ $blog->blog_description }}</p>

                </div>
            </div>
        </div>
    </section>

@endsection
