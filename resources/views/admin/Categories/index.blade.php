@extends('layouts.backend')

@section('content')

<h2 style="padding:30px 20px">Categories</h2>
<table class="table table-striped table-hover table-responsive">
	<thead>
		<tr>
			<th>#ID</th>
			<th>Title</th>
			<th>Created at</th>
			<th>Updated at</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		@if ($categories)
			@foreach ($categories as $category)
				<tr>
					<td>{{$category->id}}</td>
					<td>{{$category->name}}</td>
					<td>{{$category->created_at->diffForHumans()}}</td>
					<td>{{$category->updated_at->diffForHumans()}}</td>
					<td > 

						
						@if (!$category->isActive)
							<a href="/admin/categories/activate/{{$category->id}}"   style="margin-right:6px;" 
								class="btn btn-success pull-left" 
								 
								role="button"  ><span class="glyphicon glyphicon-ok"></span>  Activate
							</a>
							
						@endif
						
							<a href="/admin/categories/{{$category->id}}/edit" style="margin-right:6px;" 
								class="btn btn-primary pull-left"

								role="button"><span class="glyphicon glyphicon-edit"></span>  Edit
							</a>

						{!! Form::open(array('method' => 'Delete','action'=>['categoriesController@destroy',$category->id])) !!}
							 
								<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> Delete</button>

								
						{!! Form::close() !!}
							

							

					</td>
				</tr>
			@endforeach
			
		@endif
		
	</tbody>
</table>
@stop