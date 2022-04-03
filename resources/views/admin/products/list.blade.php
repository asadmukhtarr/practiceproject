@extends('layouts.admin')
@section('content')
	<br />
	<div class="container-fluid">
		@if(session()->has('message'))
			<div class="alert alert-success">
			{{ session()->get('message') }}
			</div>
		@endif
		<div class="card card-danger">
			<div class="card-header">
				All Products
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<tr>
						<th>Name</th>
						<th>Category</th>
						<th>Quantity</th>
						<th>Price</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					@foreach($products as $product)
					<tr>
						<th>{{ ucfirst($product->name) }}</th>
						<th>{{ $product->category->name }}</th>
						<th>
							{{ $product->qty }}
						</th>
						<th>
							{{ $product->price }} PKR
						</th>
						<th>
							<button class="btn btn-success"><i class="fa fa-edit"></i></button>
						</th>
						<th>
							<button class="btn btn-danger"><i class="fa fa-trash"></i></button>
						</th>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
@endsection