@extends('layouts.backend')

@section('content')

<div style="padding-top: 20px;">
        {!! Form::open(array('method' => 'patch','action'=>['postsController@update',$post->id])) !!}

        <h2>Edit Post</h2>
        <div class="form-group ">
            {!! Form::label('title', 'Tittle')!!}

            {!! Form::text('title',$post->title,['class'=>'form-control']) !!}
        </div>

        <div class="form-group ">
            {!! Form::label('body', 'Body')!!}

            {!! Form::textarea('body',$post->body,['class'=>'form-control']) !!}
        </div>

        <div class="form-group ">

            {!!  Form::label('isActive', 'Status', array('class' => 'awesome')) !!}
            {!!  Form::select('isActive', ['1' => 'Active', '0' => 'Not active'],$post->isActive,['class'=>'form-control']) !!}
        </div>

        <div class="form-group ">

            {!!  Form::label('user_id', 'Written by', array('class' => 'awesome')) !!}
            {!!  Form::select('user_id', $users,$post->user->id,['class'=>'form-control']) !!}
        </div>

        <div class="form-group ">

            {!!  Form::label('category_id', 'Category', array('class' => 'awesome')) !!}
            {!!  Form::select('category_id', $categories,$post->category->id,['class'=>'form-control']) !!}
        </div>

        

        <div class="form-group col-md-offset-5 col-md-5" >

            {!!  Form::submit('Update',['class'=>'btn btn-primary']) !!}
    </div>

        {!! Form::close() !!}
    </div>
@stop