@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col"> No </th>
                <th scope="col">Title</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            
            @foreach ($category as $record)
                    <tr>
                <th scope="row">{{$record->id}}</th>
                <td>{{$record->name}}</td>
                <td>
                <a class="" href="{{route('category.edit',['id' =>$record->id])}}">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                <i class="fa fa-edit"></i>
                </a>
                &nbsp;                &nbsp;
                &nbsp;

                <a class="" href="{{route('category.delete',['id' =>$record->id])}}">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                <i class="fa fa-trash"></i>
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


@endsection