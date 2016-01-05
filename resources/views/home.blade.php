@extends('master')

@section('content')
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <div class="grid">
            @foreach($posts as $post)
                <div class="post-preview panel panel-default">
                    <div class="panel-body" style="background: -moz-linear-gradient(top, rgba(252, 252, 252, 0), rgba(252, 252, 252, 0), rgba(252, 252, 252, 0), rgba(252, 252, 252, 0),rgba(252, 252, 252, 0.75), rgba(252, 252, 252, 1), rgba(252, 252, 252, 1), rgba(252, 252, 252, 1), rgba(252, 252, 252, 1), rgba(252, 252, 252, 1),rgba(252, 252, 252, 1)), url('{{ $post->post_featured_image_url }}') top center;
                            background: -webkit-linear-gradient(top, rgba(252, 252, 252, 0), rgba(252, 252, 252, 0), rgba(252, 252, 252, 0), rgba(252, 252, 252, 0),rgba(252, 252, 252, 0.75), rgba(252, 252, 252, 1), rgba(252, 252, 252, 1), rgba(252, 252, 252, 1), rgba(252, 252, 252, 1), rgba(252, 252, 252, 1),rgba(252, 252, 252, 1)), url('{{ $post->post_featured_image_url }}') top center;">
                        <div style="padding-top: 250px;">
                            <a href="{!! action('PostController@show', [$post->id]) !!}">
                                <h2 class="post-title">
                                    {!! HTML::decode($post->post_title) !!}
                                </h2>
                            </a>
                            <div class="post-subtitle">
                                {!! str_limit(HTML::decode($post->post_content), 550) !!}
                            </div>
                            <hr/>
                            <small class="post-meta">Posted by <a href="#">{{$post->user->name}}</a>
                            <br/><span class="moment">{{$post->created_at}}</span></small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@stop