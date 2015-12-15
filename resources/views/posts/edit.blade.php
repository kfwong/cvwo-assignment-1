<h1>Post: Update</h1>

@if(Session::has('status'))
    {{Session::get('status')}}
@endif

{!! Form::open(['action' => ['PostController@update', $post->id], 'method' => 'put']) !!}

    <input type="text" name="post_title" placeholder="Title" value="{{$post->post_title}}"/>
    <br/>
    <textarea name="post_content" placeholder="Write something interesting...">{{$post->post_content}}</textarea>
    <br/>
    <input type="submit"/>

{!! Form::close() !!}