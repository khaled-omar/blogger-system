@extends('layouts.backend')

@section('content')


<div class="row">
	<div  class="col-xs-10 col-sm-8 col-md-8 col-lg-8  col-md-offset-2
	col-xs-offset-1 col-sm-offset-2 col-lg-offset-2 " style="margin: 5% 2% ">
		<form action="" method="POST" role="form">
			<legend>Creat new User</legend>
		
			<div class="form-group">
				<label for="">Name</label>
				<input type="text" class="form-control" id="" placeholder="Input field">
			</div>
		
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" class="form-control" id="" placeholder="Input field">
			</div>
	
				
			<div class="form-group">
				<label for="">Password</label>
				<input type="text" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Repeat password</label>
				
				<input type="text" class="form-control" id="" placeholder="Input field">

			</div>
			<div class="form-group">
				<label for="">Status</label>
				
				<select name="" id="input" class="form-control" required="required">
				<option value="1">Active</option>
				<option value="1">not active</option>
			</select>

			</div>
			
			<button type="submit" class="btn btn-primary col-md-offset-6">Add user</button>
		</form>
	</div>
</div>


@endsection