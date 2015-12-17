@extends('master')

@section('content')
<div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        @foreach($posts as $post)
            <div class="post-preview">
                <a href="{!! action('PostController@show', [$post->id]) !!}">
                    <h2 class="post-title">
                        {!! $post->post_title !!}
                    </h2>
                </a>
                <div class="post-subtitle">
                    {!! $post->post_content !!}
                </div>
                <p class="post-meta">Posted by <a href="#">{{$post->user->name}}</a>&nbsp;<span class="moment">{{$post->created_at}}</span></p>
            </div>
            <hr/>
        @endforeach

        <!-- Pager -->
        <ul class="pager">
            <li class="next">
                <a href="#">Older Posts &rarr;</a>
            </li>
        </ul>
    </div>
</div>
@stop