@extends('master')

@section('content')
    <div class="vertical-center">
        <div class="col-sm-offset-3 col-sm-6">
            <h1 class="text-center">Register</h1>
            {!! Form::open(['action' => 'Auth\AuthController@postRegister', 'method' => 'post', 'class' => 'form-horizontal']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('name', '', ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('username', 'Username', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('username', '', ['class' => 'form-control']) !!}
                </div>
            </div>
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
                            I agree to the <a href="#">terms & conditions</a>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    {!! Form::submit('Submit', ['class' => 'btn btn-default']) !!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop