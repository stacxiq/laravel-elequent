@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>

                <div class="card-body">
                @if(count($errors) > 0)
                
                @foreach ( $errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                {{$error}}
                </div>
                @endforeach
                




                @endif
                <form action="{{route('category.update',['id' =>$category->id])}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="name" value="{{$category->name}}"  placeholder="Enter Category Title">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                     </div>
            </div>
        </div>
    </div>
</div>
@endsection










