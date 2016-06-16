@extends('layouts.backend')

@section('content')

<h2 style="padding:30px 20px">Users</h2>
<table class="table table-striped table-hover table-responsive">
	<thead>
		<tr>
			<th>#ID</th>
			<th>Username</th>
			<th>Email</th>
			<th>Registed at</th>
			<th>Updated at</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		@if ($users)
			@foreach ($users as $user)
				<tr>
					<td>{{$user->id}}</td>
					<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>
					<td>{{$user->created_at->diffForHumans()}}</td>
					<td>{{$user->updated_at->diffForHumans()}}</td>
					<td > 

						
						@if (!$user->isActive)
							<a href="/admin/users/activate/{{$user->id}}"   style="margin-right:6px;" 
								class="btn btn-success pull-left" 
								 
								role="button"  ><span class="glyphicon glyphicon-ok"></span>  Activate
							</a>
							
						@endif
						
							<a href="/admin/users/{{$user->id}}/edit" style="margin-right:6px;" 
								class="btn btn-primary pull-left"

								role="button"><span class="glyphicon glyphicon-edit"></span>  Edit
							</a>

						{!! Form::open(array('method' => 'Delete','action'=>['usersController@destroy',$user->id])) !!}
							 
								<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> Delete</button>

								
						{!! Form::close() !!}
							

							

					</td>
				</tr>
			@endforeach
			
		@endif
		
	</tbody>
</table>
@stop