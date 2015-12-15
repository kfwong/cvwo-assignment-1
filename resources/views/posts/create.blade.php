{!! Form::open(['action' => ['PostController@store'], 'method' => 'post'])!!}

    <input type="text" name="post_title" placeholder="Title"/>
    <br/>
    <textarea name="post_content" placeholder="Write something interesting..."></textarea>
    <br/>
    <input type="submit"/>

{!! Form::close() !!}