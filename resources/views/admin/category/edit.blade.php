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
				Edit Category
			</div>
			<div class="card-body">
				<form action="{{ route('admin.updatecat', $category->id) }}" method="post">
					@csrf
					<div class="form-group">
						<label>Category Name</label>
						@error('name')
						  <font color="red"><b>	{{ $message }} </b> </font>
						@enderror
						<input type="text" value="{{ $category->name }}" class="form-control" name="name" />
					</div>
					<div class="form-group">
						<button class="btn btn-danger">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection