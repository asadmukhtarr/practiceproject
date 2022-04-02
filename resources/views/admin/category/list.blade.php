@extends('layouts.admin')
@section('content')
	<br />
	<div class="container-fluid">
		@if(session()->has('message'))
			<div class="alert alert-success">
			{{ session()->get('message') }}
			</div>
		@endif
		<div class="card card-primary">
			<div class="card-header">
				Add Category
			</div>
			<div class="card-body">
				<form action="{{ route('admin.adcat') }}" method="post">
					@csrf
					<div class="form-group">
						<label>Category Name</label>
						@error('name')
						  <font color="red"><b>	{{ $message }} </b> </font>
						@enderror
						<input type="text" class="form-control" name="name" />
					</div>
					<div class="form-group">
						<button class="btn btn-danger">Save</button>
					</div>
				</form>
			</div>
		</div>
		<div class="card card-danger">
			<div class="card-header">
				Categories
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					@foreach($categories as $category)
						<tr>
							<td>{{ $category->id }}</td>
							<td>{{ ucfirst($category->name) }}</td>
							<td>
								<a href="{{ route('admin.editcat', $category->id) }}">
									<button class="btn btn-warning"><i class="fa fa-edit"></i></button>
								</a>
							</td>
							<td>
								<a href="{{ route('admin.delcat', $category->id) }}">
									<button class="btn btn-danger"><i class="fa fa-trash"></i></button>
								</a>
							</td>
						</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
@endsection