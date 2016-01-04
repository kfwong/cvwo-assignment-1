<div class="grid">
@foreach($posts as $post)
    <div class="grid-item">
        <h4>{{$post->post_title}}</h4>
        <p>{{$post->post_content}}</p>
        <hr/>
    </div>
@endforeach
</div>