@extends('master')

@section('content')
    <div class="vertical-center">
        <div class="col-sm-offset-3 col-sm-6">
            <h1 class="text-center">Login</h1>
        {!! Form::open(['action' => 'Auth\AuthController@postLogin', 'method' => 'post', 'class' => 'form-horizontal']) !!}
            <div class="form-group">
                {!! Form::label('email', 'Email', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('email', '', ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Password', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-10">
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            {!! Form::checkbox('remember') !!}
                            Remember Me
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    {!! Form::submit('Login', ['class' => 'btn btn-default']) !!}
                    <a class="btn btn-primary" href="{!! action('Auth\AuthController@getRegister') !!}">Register</a>
                </div>
            </div>
        {!! Form::close() !!}
        </div>
    </div>
@stop