@extends('layouts.app')
@section('content')
	<div class="row justify-content-md-center">
		<div class="col-md-4">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Acceso a la aplicación</h3>
				</div>
				<div class="card-body">
					<form method="POST" action="{{ route('login') }}">
						{{ csrf_field() }}
						<div class="form-group {{ $errors->has('name')? 'has-danger':'' }}">
							<label for="name">UserName</label>
							<input class="form-control" type="text" name="name" placeholder="Ingresa tu username" value="{{ old('name') }}">
							{!! $errors->first('name','<div class="form-control-feedback">:message</div>') !!}
						</div>
						<div class="form-group {{ $errors->has('password')? 'has-danger':'' }}">
							<label for="password">Contraseña</label>
							<input class="form-control" type="password" name="password" placeholder="Ingresa tu contraseña">
							{!! $errors->first('password','<div class="form-control-feedback">:message</div>') !!}

						</div>
						<button class="btn btn-primary btn-block">Acceder</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection


