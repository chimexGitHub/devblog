@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-body">

        <div class="panel-heading">
            Tags
        </div>
            <table class="table table-hover">
                    <thead>
                       <th>Tag</th>
                
                       <th>Editing</th>
                
                       <th>Deleting</th>
                    </thead>
                
                    <tbody>
                       
                       @if($tags->count()>0)
                                @foreach($tags as $tag)
                                <tr>
                                    <td>{{$tag->tag}}</td>
                                    <td>
                                        <a href="{{route('tag.edit', ['id'=>$tag->id])}}" class="btn btn-xs btn-info">
                                            <span class="glypicon glyphicon-pencil"></span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{route('tag.delete', ['id'=>$tag->id])}}" class="btn btn-xs btn-danger">
                                            {{--  <span class="glypicon glyphicon-trash"></span>  --}}x
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                       @else
                       <tr>
                            <th colspan="5" class="text-center">No Tags yet</th>
                
                        </tr>   
                       @endif
                    
                    </tbody>
                </table>
    </div>
</div>
@stop