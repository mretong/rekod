@extends('layouts.members')

@section('content')

<h1>Kemaskini Maklumat Pakej</h1>

<hr />

{!! Form::model($rep, ['route' => ['negeri.update', $rep->id], 'method' => 'PATCH']) !!}

	<div class="form-group row">
		{!! Form::label('aduan', 'No. Aduan', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('aduan','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('tarikh_terima', 'Tarikh Aduan', ['class'=>'form control col-sm-2']) !!}
		{!! Form::date('tarikh_terima', \Carbon\Carbon::now(), ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('tarikh_selesai', 'Tarikh Selesai', ['class'=>'form control col-sm-2']) !!}
		{!! Form::date('tarikh_selesai', \Carbon\Carbon::now(), ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('masa', 'Masa Terima', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('masa','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('staff', 'Staff Terima', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('staff',$staff, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('lot', 'No.Lot', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('lot',$lot, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('hakmilik', 'No. Hak Milik', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('hakmilik','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('pengadu', 'Nama Pengadu', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('pengadu','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('no_tel', 'No. Tel Pengadu', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('no_tel','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('catatan', 'Catatan', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('catatan','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('maklumbalas', 'Maklumbalas', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('maklumbalas','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('pemaklum', 'Pemaklum', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('pemaklum','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('status', 'Status Aduan', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('status',$sa, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}
		[ <a href="{{ route('negeri.index') }}">Kembali</a> ] 
	</div>


{!! Form::close() !!}
<hr />
@endsection