@extends('master')

@section('content')
<div class="row vertical-center">
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <h1>{{$post->post_title}}</h1>

        <article>{!! HTML::decode($post->post_content) !!}</article>

        <hr/>

        <div class="row">
            <div class="col-sm-6">
                <small>Written by <a href="#">{{$post->user->name}}</a>&nbsp;<span class="moment">{{$post->created_at}}</span>.</small>
                <br/>
                <small>Last modified <span class="moment">{{$post->updated_at}}</span>.</small>
            </div>
            @if(App\User::isAuthorOfPost($post))
            <div class="col-sm-6">
                <div class="pull-right">
                    <a href="{!! action('PostController@edit', ['id' => $post->id]) !!}" class="btn btn-primary btn-xs">Edit</a>
                    <a data-toggle="modal" href="#post-confirm-delete" class="btn btn-default btn-xs">Delete</a>
                </div>
            </div>
            @endif
        </div>

    </div>
</div>
@if(App\User::isAuthorOfPost($post))
<div class="modal" id="post-confirm-delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Are you sure?</h4>
            </div>
            <div class="modal-body">
                This will delete the post permanently! There's no turning back!
            </div>
            <div class="modal-footer">
                {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'delete']) !!}
                    {!! Form::submit('Yes! Adios!', ['class' => 'btn btn-primary']) !!}
                    <button type="button" class="btn btn-default" data-dismiss="modal">No! Bring me back!</button>
                {!! Form::close() !!}

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endif
@stop