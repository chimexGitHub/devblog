@extends('layouts.app')

@section('content')

@include('admin.includes.errors')
<div class="panel panel-default">
    <div class="class panel-heading">
        Update Tag: {{$tag->tag}}
    </div>

    <div class="class panel-body">
        <form action="{{route('category.update', ['id'=>$tag->id])}}" method="post">

            {{csrf_field()}}
           
            <div class="form-group">
                <label for="title">Category</label>
                <input type="text" name="name" value="{{$tag->tag}}" class="form-control">
            </div>

                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-info" type="submit">Update tag</button>
                        </div>
                    </div>
        </form>
    </div>
</div>
@endsection