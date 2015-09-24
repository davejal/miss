@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Patient: {{ $patient->first_name }} {{$patient->last_name}}</div>
				<div class="panel-body">
				<h1></h1>
	Middle Name: {{$patient->middle_name}}</br>
	Date of Birth: {{$patient->date_of_birth}}</br>
	Gender: {{$patient->gender}}</br>
	Address: {{$patient->address}}</br>
	<hr>

<div class="row">
    <div class="col-md-6">
        <a href="{{ route('patients.index') }}" class="btn btn-info">Back to all patients</a>
        <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-primary">Edit patient</a>
    </div>
    <div class="col-md-6 text-right">
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['patients.destroy', $patient->id]
        ]) !!}
            {!! Form::submit('Delete this patient?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
</div>
	</div>
			</div>
		</div>
	</div>
</div>

	

@endsection