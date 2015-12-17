@extends('master')

@section('content')


    <div class="vertical-center">
        <div class="col-sm-12">
            <h1 class="text-center">Edit Post</h1>
            {!! Form::open(['action' => ['PostController@update', $post->id], 'method' => 'put', 'class' => 'form-horizontal']) !!}
            <div class="form-group">
                <div class="col-sm-12">
                    {!! Form::text('post_title', $post->post_title, ['class' => 'form-control', 'placeholder' => 'Title...']) !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    {!! Form::textarea('post_content', $post->post_content, ['class' => 'form-control', 'placeholder' => 'Write something interesting here...', 'rows' => '25']) !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                    <a href="{!! URL::previous() !!}" class="btn btn-default">Cancel</a>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@stop