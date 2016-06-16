@extends('layouts.backend')

@section('content')

<div style="padding-top: 20px;">
        {!! Form::open(array('method' => 'POST','action'=>['postsController@store'])) !!}

        <h2>Create new Post</h2>
        <div class="form-group ">
            {!! Form::label('title', 'Tittle')!!}

            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>

 

        <div class="form-group ">

            {!!  Form::label('isActive', 'Status', array('class' => 'awesome')) !!}
            {!!  Form::select('isActive', ['1' => 'Active', '0' => 'Not active'],'0',['class'=>'form-control']) !!}
        </div>

        <div class="form-group ">

            {!!  Form::hidden('user_id',Auth::user()->id) !!}
        </div>

        <div class="form-group ">

            {!!  Form::label('category_id', 'Category', array('class' => 'awesome')) !!}
            {!!  Form::select('category_id', $categories,null,['class'=>'form-control']) !!}
        </div>

         <div class="form-group ">
            {!! Form::label('body', 'Body')!!}

            {!! Form::textarea('body',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-md-offset-5 col-md-5" >

            {!!  Form::submit('Create',['class'=>'btn btn-primary']) !!}
    </div>

        {!! Form::close() !!}
    </div>
@stop