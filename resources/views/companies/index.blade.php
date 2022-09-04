@extends('companies.master')
@section('body')

<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb text-center">
            <div class="pull-left text-center py-5">
                <h2>Companies Information</h2>
            </div>
            <div class="pull-right mb-2 pb-4">
                <a class="btn btn-success" href="{{ route('companies.create') }}"> Add new Company</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>S.No</th>
            <th>Company Name</th>
            <th>Company Email</th>
            <th>Company Address</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($companies as $company)
            <tr>
                <td>{{ $company->id }}</td>
                <td>{{ $company->name }}</td>
                <td>{{ $company->email }}</td>
                <td>{{ $company->address }}</td>
                <td>
                    <form action="{{ route('companies.destroy',$company->id) }}" method="Post">
                        <a class="btn btn-primary" href="{{ route('companies.edit',$company->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
{!! $companies->links() !!}
@endsection
