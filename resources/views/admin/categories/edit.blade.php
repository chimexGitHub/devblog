@extends('layouts.app')

@section('content')

@include('admin.includes.errors')
<div class="panel panel-default">
    <div class="class panel-heading">
        Update Category: {{$category->name}}
    </div>

    <div class="class panel-body">
        <form action="{{route('category.update', ['id'=>$category->id])}}" method="post">

            {{csrf_field()}}
           
            <div class="form-group">
                <label for="title">Category</label>
                <input type="text" name="name" value="{{$category->name}}" class="form-control">
            </div>

                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-info" type="submit">Update category</button>
                        </div>
                    </div>
        </form>
    </div>
</div>
@endsection