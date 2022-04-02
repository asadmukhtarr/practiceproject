@extends('layouts.admin')
@section('content')
	<br />
	<div class="container-fluid">
		<div class="card card-primary">
			<div class="card-header">
				Add Category
			</div>
			<div class="card-body">
				<form>
					<div class="form-group">
						<label>Category Name</label>
						<input type="text" class="form-control" name="" />
					</div>
					<div class="form-group">
						<button class="btn btn-danger">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection