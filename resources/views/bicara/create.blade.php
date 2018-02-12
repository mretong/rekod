@extends('layouts.members')

@section('content')

<h1>Add Perbicaraan</h1>
<hr />


{!! Form::open(['route' => 'bicara.store']) !!}
	
	<div class="form-group row">
		{!! Form::label('blok', 'Blok',['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_blok', $blok, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('lot', 'Lot',['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_lot', $lot, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('tarikh_1', 'Tarikh Bicara', ['class'=>'form control col-sm-2']) !!}
		{!! Form::date('tarikh_1', \Carbon\Carbon::now(), ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('nama', 'Nama Pentadbir',['class'=>'form control col-sm-2']) !!}
		{!! Form::select('no_pekerja', $staf, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('status', 'Status Perbicaraan',['class'=>'form control col-sm-2']) !!}
		{!! Form::select('status', $sb, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('bilangan', 'Bilangan', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('bilangan','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('pampasan', 'Pampasan RM:', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('pampasan','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('kosLain', 'Lain-lain Kos RM:', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('kos_lain','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('catatan', 'Catatan', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('catatan','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('jajaran', 'Jajaran', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('jajaran','',['class'=>'form-control col-sm-6']) !!}
	</div>


	<div class="form-group">
		{!! Form::submit('Tambah Perbicaraan', ['class' => 'btn btn-primary']) !!}
	</div>

{!! Form::close() !!}

<hr />
@endsection