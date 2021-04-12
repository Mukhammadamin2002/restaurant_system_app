@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif
            <form action="{{ route('food.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">Add New Food</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="" cols="8" rows="4" class="form-control @error('description') is-invalid @enderror"></textarea>
                            @error('description')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" class="form-control @error('price') is-invalid @enderror">
                            @error('price')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Category</label>
                            <select name="category" id="" class="form-control @error('category') is-invalid @enderror">
                                <option value="">Select Category</option>
                                @foreach (App\Models\Category::all() as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                            @error('image')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
