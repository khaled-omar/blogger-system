
@extends('layouts.backend')
@section('content')
    <div style="padding-top: 20px;">
        {!! Form::open(array('method' => 'POST','action'=>'categoriesController@store')) !!}

        <h2>Create New category</h2>
        <div class="form-group ">
            {!! Form::label('name', 'Name')!!}

            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group ">

            {!!  Form::label('isActive', 'Status', array('class' => 'awesome')) !!}
            {!!  Form::select('isActive', ['1' => 'Active', '0' => 'Not active'],null,['class'=>'form-control']) !!}
        </div>


        <div class="form-group col-md-offset-5 col-md-5" >

            {!!  Form::submit('Create',['class'=>'btn btn-success']) !!}
    </div>

        {!! Form::close() !!}
    </div>

@stop