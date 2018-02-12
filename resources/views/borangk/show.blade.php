@extends('layouts.members')

@section('content')

<h1>Kemaskini Maklumat Pakej</h1>

<hr />

{!! Form::model($formk, ['route' => ['borangk.update', $formk->id], 'method' => 'PATCH']) !!}
	
	<div class="form-group row">
		{!! Form::label('blok', 'Blok', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_blok', $blok, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('lot', 'No. Lot', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_lot', $lot, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('tarikh', 'Tarikh Borang K', ['class'=>'form control col-sm-2']) !!}
		{!! Form::date('tarikh_k', \Carbon\Carbon::now(), ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('rujukan_k', 'Rujukan Borang K', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('rujukan_k', null ,['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('rujukan_fail', 'Rujukan Fail', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('rujukan_fail', null ,['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('attachment', 'Attachment', ['class'=>'form control col-sm-2']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}
		[ <a href="{{ route('borangk.index') }}">Kembali</a> ] 
	</div>


{!! Form::close() !!}
<hr />
@endsection