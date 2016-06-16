@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-xs-10 col-sm-8 col-md-8 col-lg-8  col-md-offset-2
	col-xs-offset-1 col-sm-offset-2 col-lg-offset-2">
		<form action="" method="POST" role="form">
			<legend>Add Page</legend>
		
			<div class="form-group">
				<label for="">label</label>
				<input type="text" class="form-control" id="" placeholder="Input field">
			</div>
		
			<div class="form-group">
				<label for="">label</label>
				<input type="text" class="form-control" id="" placeholder="Input field">
			</div>
	
				
			<div class="form-group">
				<label for="">label</label>
				
				<textarea name="" id="textarea" class="form-control" rows="3" required="required"></textarea>

			</div>
			<div class="form-group">
				<label for="">label</label>
				
				<select name="" id="input" class="form-control" required="required">
				<option value="1">Active</option>
				<option value="1">not active</option>
			</select>

			</div>
			
			<button type="submit" class="btn btn-primary col-md-offset-6">Submit</button>
		</form>
	</div>
</div>

@stop
