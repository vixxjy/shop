@extends('layouts.master')

@section('title')
	laravel shopping cart
@endsection

@section('content')
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3 well" >
			<div class="well">
				<h3>CHECK-OUT</h3>
				<button class="btn btn-primary" type="button">
				<h4>Items Total Cost: #{{ $total }}.00</h4>
				</button>
			</div>
				<form action="{{ route('checkout')}}" method="post" id="checkout-form">
					<div class="row">
						<div class="col-xs-12">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" name="name" id="name" class="form-control" required>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group">
								<label for="address">Address</label>
								<input type="text" name="address" id="address" class="form-control" required>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group">
								<label for="card-name">Card Holder Name</label>
								<input type="text" name="card-name" id="card-name" class="form-control" required>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group">
								<label for="card-number">Credit Card Number</label>
								<input type="text" name="card-number" id="card-number" class="form-control" required>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<label for="card-expiry-month">Card-expiry-month</label>
										<input type="text" name="card-expiry-month" id="card-expiry-month" class="form-control" required>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group">
										<label for="card-expiry-year">Card-expiry-year</label>
										<input type="text" name="card-expiry-year" id="card-expiry-year" class="form-control" required>
									</div>
								</div>		
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group">
								<label for="card-cvc">CVC</label>
								<input type="text" name="card-cvc" id="card-cvc" class="form-control" required>
							</div>
						</div>	
					</div>
					{{ csrf_field() }}
					<button type="submit" class="btn btn-success">Buy now</button>
				</form>	
			</div>
		</div>
@endsection
