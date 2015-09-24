@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-6 text-left"><h1>Patients</h1></div>
						<div class="col-md-6 text-right"><a href="{{ url('/patients/create')}} " class="btn btn-info">Add new Patient</a></div>
				</div></div>
				<div class="panel-body">
				<h1></h1>
	
		@foreach ($patients as $patient)
			<patient>
				<div class="row">
					{!! Form::open([
							'method' => 'DELETE',
							'route' => ['patients.destroy', $patient->id]
						]) !!}
					<div class="col-md-8 text-left"><h2>{{ $patient->first_name }} {{$patient->last_name}} {{$patient->date_of_birth}} {{$patient->gender}}</h2></div>
					<div class="col-md-4 text-right">
						<a href="{{ route('patients.show', $patient->id) }}" class="btn btn-info">Show</a>
						<a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-primary">Edit</a>
						
							{!! Form::submit('Delete?', ['class' => 'btn btn-danger']) !!}
						{!! Form::close() !!}
					</div>
					
</div>
</p><hr>
			</patient>
		@endforeach
</div>
			</div>
		</div>
	</div>
</div>
@endsection