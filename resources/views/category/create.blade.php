@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menage Food Category</div>

                <div class="card-body">
                    <form action="/" class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="...">

                        <div class="form-group">
                            <label for=""></label>
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
