@extends('layouts.members')

@section('content')

<h1>Add Perbicaraan</h1>
<hr />


{!! Form::open(['route' => 'bicara.store']) !!}

	<div class="form-group row">
		{!! Form::label('lot', 'Lot',['class'=>'form control col-sm-2']) !!}
		{!! Form::select('lot', $lot, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('tarikh_1', 'Tarikh Bicara', ['class'=>'form control col-sm-2']) !!}
		{!! Form::date('tarikh_1', \Carbon\Carbon::now(), ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('tarikh_luput', 'Tarikh Luput Warta', ['class'=>'form control col-sm-2']) !!}
		{!! Form::date('tarikh_luput', \Carbon\Carbon::now(), ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('jilid', 'Jilid Warta', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('jilid','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('no_warta', 'Nombor Warta', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('no_warta','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('rujukan', 'Rujukan', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('rujukan','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('catatan', 'Catatan', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('catatan','',['class'=>'form-control col-sm-6']) !!}
	</div>


	<div class="form-group">
		{!! Form::submit('Tambah Warta', ['class' => 'btn btn-primary']) !!}
	</div>

{!! Form::close() !!}

<hr />
@endsection