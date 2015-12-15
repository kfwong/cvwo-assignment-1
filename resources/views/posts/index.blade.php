@foreach($posts as $post)
    <h4>{{$post->post_title}}</h4>
    <p>{{$post->post_content}}</p>
    <hr/>
@endforeach