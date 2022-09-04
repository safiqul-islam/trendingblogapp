@extends('companies.master')
@section('title')
    Home Page
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row ">
            @foreach($blogs as $blog)


                <div class="col-md-4 py-3">
                    <div class="card">
                        <img class="text-center" src="{{ $blog->image }}" alt="" style="height: 180px" class="card-img-top" style="height: 100px">
                        <div class="card-body">
                            <h3>{{ $blog->blog_title }}</h3>
                            <p>{{ $blog->blog_author }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('deatils-blog',['id'=>$blog->id]) }}" class="float-end btn btn-warning">Details</a>
                        </div>

                    </div>

                </div>

            @endforeach

            </div>

        </div>

    </section>

@endsection
