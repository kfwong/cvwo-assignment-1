<h1>User Profile: Update</h1>

@if(Session::has('status'))
    {{Session::get('status')}}
@endif


{!! Form:: open(['action' => ['UserController@update', $user->id], 'method' => 'put']) !!}
    Name: <input type="text" name="name" value="{{$user->name}}"/>
    <br/>
    Username: <input type="text" disabled value="{{$user->username}}"/>
    <br/>
    Email: <input type="email" name="email" value="{{$user->email}}"/>
    <br/>
    <input type="submit">
{!! Form::close() !!}