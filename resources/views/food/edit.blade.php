@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif
            <form action="{{ route('food.update',[$food->id]) }}" enctype="multipart/form-data" method="POST">
                @csrf {{ method_field('PUT') }}
                <div class="card">
                    <div class="card-header">Update Food</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="{{ $food->name }}" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="" cols="8" rows="4" class="form-control @error('description') is-invalid @enderror">{{ $food->description }}</textarea>
                            @error('description')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" name="price" value="{{ $food->price }}" class="form-control @error('price') is-invalid @enderror">
                            @error('price')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Category</label>
                            <select name="category" value="{{ $food->category }}" id="" class="form-control @error('category') is-invalid @enderror">
                                <option value="">Select Category</option>
                                @foreach (App\Models\Category::all() as $category)
                                    <option value="{{ $category->id }}"
                                        @if($category->id == $food->category_id)
                                            selected
                                        @endif
                                        >{{ $category->name }}</option>
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
                            <button type="submit" class="btn btn-primary btn-block">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
