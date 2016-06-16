
@extends('layouts.backend')
@section('content')
    <div style="padding-top: 20px;">
        {!! Form::open(array('method' => 'patch','action'=>['categoriesController@update',$category->id])) !!}

        <h2>Edit category</h2>
        <div class="form-group ">
            {!! Form::label('name', 'Name')!!}

            {!! Form::text('name',$category->name,['class'=>'form-control']) !!}
        </div>

        <div class="form-group ">

            {!!  Form::label('isActive', 'Status', array('class' => 'awesome')) !!}
            {!!  Form::select('isActive', ['1' => 'Active', '0' => 'Not active'],$category->isActive,['class'=>'form-control']) !!}
        </div>


        <div class="form-group col-md-offset-5 col-md-5" >

            {!!  Form::submit('Update',['class'=>'btn btn-primary']) !!}
    </div>

        {!! Form::close() !!}
    </div>

@stop