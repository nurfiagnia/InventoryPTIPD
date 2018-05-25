@extends('layouts.layout_login')

@section('title')
    login
@endsection

@section('content')

<div class="container">
		<center style="margin-top: 80px">
			<img src="/images/logoPTIPD.PNG" class="img-rounded" alt="Cinque Terre">
		</center>
		
		<div class="panel panel-default" style="width: 40%; margin: 10px auto">
			<div class="panel-heading">
			<center>Login Admin</center>
				@if(Session::has('message'))
					<span class="label label-danger">{{ Session::get('message') }} </span>
				@endif
			</div>

			<div class="panel-body">
				<form method="POST" action="/loginpost">
					{{csrf_field()}}
					<div class="form-group"> 
						Username: 
						<input type="text" name="username" class="form-control" placeholder="Enter Username" required="" autofocus="">
					</div>
					<div class="form-group"> 
						Password: 
						<input type="password" name="password" class="form-control" placeholder="Enter Password" required="">
					</div>

					<div class="form-group"> 
						<input type="submit" value="Login" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection