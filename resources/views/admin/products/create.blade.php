@extends('layouts.admin')
@section('content')
	<br />
	<div class="container-fluid">
		<div class="card card-primary">
			<div class="card-header">
				Add Product
			</div>
			<div class="card-body">
				<form action="{{ route('products.store') }}" method="post">
					@csrf
					<div class="form-group">
						<label>Name</label>
						@error('name')
							<font color="red"><b>{{ $message }}</b></font>
						@enderror
						<input type="text" class="form-control" name="name" />
					</div>
					<div class="form-group">
						<label>Quantity</label>
						@error('qty')
							<font color="red"><b>{{ $message }}</b></font>
						@enderror
						<input type="text" class="form-control" name="qty" />
					</div>
					<div class="form-group">
						<label>Category</label>
						<select name="category" class="form-control">
							<option>Select Category</option>
							@error('category')
								<font color="red"><b>{{ $message }}</b></font>
							@enderror
							@foreach($categories as $category)
								<option value="{{ $category->id }}">{{ $category->name }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label>Price</label>
						@error('price')
							<font color="red"><b>{{ $message }}</b></font>
						@enderror
						<input type="text" class="form-control" name="price" />
					</div>
					<div class="form-group">
						<button class="btn btn-danger">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection