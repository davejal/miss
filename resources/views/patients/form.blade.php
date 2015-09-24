<div class="form-group">
	{!! Form::label('first_name','First Name:') !!}
	{!! Form::text('first_name',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('middle_name','Middle Name:') !!}
	{!! Form::text('middle_name',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('last_name','Last Name:') !!}
	{!! Form::text('last_name',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('address','Address:') !!}
	{!! Form::text('address',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('date_of_birth','Date of Birth:') !!}
	{!! Form::input('date','date_of_birth',date('Y-m-d'),['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('gender','Gender:') !!}
	{!! Form::select('gender', ['Male' => 'Male', 'Female' => 'Female']) !!}
</div>

<div class="form-group">
	{!! Form::label('date_became_patient','Date became patient:') !!}
	{!! Form::input('date_became_patient','date_became_patient',date('Y-m-d'),['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('other_details','Other Details:') !!}
	{!! Form::textarea('other_details',null,['class'=>'form-control']) !!}
</div>


<div class="row">
    <div class="col-md-6">
	{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
	</div>
<div class="col-md-6">
        <a href="{{ route('patients.index') }}" class="btn btn-info form-control">Back to all patients</a>
    </div>
</div>