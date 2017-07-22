@extends('layouts.master')

@section('title')
	sign up page
@endsection

@section('content')
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h1>Sign up</h1>
	{{-- 	@if(count($errors) > 0)
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
			<p>{{ $error }}</p>
			@endforeach
		</div>
		@endif  --}}

		<form action="{{ route('user.signup') }}" method="post">
			<div class="form-group">
				<label for="email">E-Mail</label>
				<input type="text" name="email" id="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Sign up</button>
			{{ csrf_field() }}
		</form>
	</div>
</div>
@endsection