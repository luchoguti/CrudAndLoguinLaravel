@extends('layouts.app')

@section('content')
<div class="col-md-4">
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Bienvenido {{ auth()->user()->name }}</h3>
		</div>
	</div>
</div>
@endsection