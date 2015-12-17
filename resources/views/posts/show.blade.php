@extends('master')

@section('content')
<div class="row vertical-center">
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <h1>{{$post->post_title}}</h1>

        <article>{!!$post->post_content!!}</article>

        <hr/>

        <small>Written by <a href="#">{{$post->user->name}}</a>&nbsp;<span class="moment">{{$post->created_at}}</span>.</small>
        <br/>
        <small>Last modified <span class="moment">{{$post->updated_at}}</span>.</small>
    </div>
</div>
@stop