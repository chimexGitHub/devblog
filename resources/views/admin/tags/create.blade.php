@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

<div class="panel panel-default">
    <div class="class panel-heading">
        Create a new Tag
    </div>

    <div class="class panel-body">
        <form action="{{route('tag.store')}}" method="post">

            {{csrf_field()}}
           
            <div class="form-group">
                <label for="title">Tag</label>
                <input type="text" name="tag" class="form-control">
            </div>

                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">Save Tag</button>
                        </div>
                    </div>
        </form>
    </div>
</div>
@endsection