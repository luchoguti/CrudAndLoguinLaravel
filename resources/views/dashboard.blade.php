@extends('layouts.app')

@section('content')
<div class="row justify-content-md-center">
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Bienvenido {{ auth()->user()->name }}</h3>
			</div>
			<div class="card-body">
				<strong>Email: </strong>{{ auth()->user()->email }}
			</div>
			<div class="card-footer">
				<form method="POST" action="{{ route('logout') }}">
					{{ csrf_field() }}
					<button class="btn btn-danger btn-xs btn-block">Cerrar Sesión</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection