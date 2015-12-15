<h1>{{$post->post_title}}</h1>

<p>{{$post->post_content}}</p>

<small>Created at {{$post->created_at}}</small>
<br/>
<small>Updated at {{$post->updated_at}}</small>
<br/>
<small>By {{$post->user->name}}</small>