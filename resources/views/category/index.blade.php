@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::has('message'))
                    <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif
            <div class="card">
                <div class="card-header">All Categories</div>
                    <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($categories->count()>0)
                        @foreach ($categories as $key=>$category)
                            <tr>
                                <th scope="row">{{ $key+1 }}</th>
                                <td>{{ $category->name }}</td>
                                <td><a href="{{ route('category.edit', [$category->id]) }}" class="btn btn-outline-info">Edit</a></td>
                                <td><a href="{{ route('category.destroy', [$category->id]) }}" class="btn btn-outline-danger">Delete</a></td>
                            </tr>
                        @endforeach
                        @else
                            <td>No Categories To Display</td>
                        @endif
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
