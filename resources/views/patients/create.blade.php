@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Insert new Patient</div>
				<div class="panel-body">
				<h1></h1>
				{!! Form::open(['url'=>'patients']) !!}
				
				@include('patients.form',['submitButtonText'=>'Add Patient'])
				<br>
				<div class="form-group">
				{!! Form::reset('Clear form',['class'=>'btn btn-primary form-control']) !!}
				</div>
				{!! Form::close() !!}
					
				@include('errors.list')
				
				</div>
			</div>
		</div>
	</div>
</div>
@endsection