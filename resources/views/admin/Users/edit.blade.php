
@extends('layouts.backend')
@section('content')
    <div style="padding-top: 20px;">
        {!! Form::open(array('method' => 'patch','action'=>['usersController@update',$user->id])) !!}

        <h2>Edit user</h2>
        <div class="form-group ">
            {!! Form::label('name', 'Username')!!}

            {!! Form::text('name',$user->name,['class'=>'form-control']) !!}
        </div>
        <div class="form-group ">

            {!!  Form::label('email', 'E-Mail Address', array('class' => 'awesome')) !!}
            {!! Form::text('email',$user->email,['class'=>'form-control']) !!}
        </div>

        <div class="form-group ">

            {!!  Form::label('isActive', 'Status', array('class' => 'awesome')) !!}
            {!!  Form::select('isActive', ['1' => 'Active', '0' => 'Not active'],$user->isActive,['class'=>'form-control']) !!}
        </div>

        <div class="form-group ">

            {!!  Form::label('role', 'role', array('class' => 'awesome')) !!}
            {!!  Form::select('role', array('1' => 'Administrator', '0' => 'user'),null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-md-offset-5 col-md-5" >

            {!!  Form::submit('Update',['class'=>'btn btn-primary']) !!}
    </div>

        {!! Form::close() !!}
    </div>

@stop