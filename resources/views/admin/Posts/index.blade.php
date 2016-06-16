@extends('layouts.backend')

@section('content')

<h2 style="padding:30px 20px">Posts</h2>
<table class="table table-striped table-hover table-responsive">
	<thead>
		<tr>
			<th>#ID</th>
			<th>Image</th>
			<th>Title</th>
			<th>Written by</th>
			<th>Category</th>
			<th>Created at</th>
			<th>Updated at</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		@if ($posts)
			@foreach ($posts as $post)
				<tr>
					<td>{{$post->id}}</td>
					<td>{{$post->img_url}}</td>
					<td>{{$post->title}}</td>
					<td>{{$post->user->name}}</td>
					<td>{{$post->category->name}}</td>
					<td>{{$post->created_at->diffForHumans()}}</td>
					<td>{{$post->updated_at->diffForHumans()}}</td>
					<td style="width: 30%"> 

						
						@if (!$post->isActive)
							<a href="/admin/posts/activate/{{$post->id}}"   style="margin-right:6px;" 
								class="btn btn-success pull-left" 
								 
								role="button"  ><span class="glyphicon glyphicon-ok"></span>  Activate
							</a>
							
						@endif
						
							<a href="/admin/posts/{{$post->id}}/edit" style="margin-right:6px;" 
								class="btn btn-primary pull-left"

								role="button"><span class="glyphicon glyphicon-edit"></span>  Edit
							</a>

						{!! Form::open(array('method' => 'Delete','action'=>['postsController@destroy',$post->id])) !!}
							 
								<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> Delete</button>

								
						{!! Form::close() !!}
							

							

					</td>
				</tr>
			@endforeach
			
		@endif
		
	</tbody>
</table>
@stop