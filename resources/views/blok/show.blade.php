@extends('layouts.members')

@section('content')

<h1>Kemaskini Maklumat Blok</h1>

<hr />

{!! Form::model($tersier, ['route' => ['blok.update', $tersier->id], 'method' => 'PATCH']) !!}

	<div class="form-group row">
		{!! Form::label('nama', 'Nama Blok', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('nama', null,['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('total', 'Jumlah Lot Total', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('jum_lot_total', null,['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('kos', 'Anggaran Kos', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('anggaran_kos', null,['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('lokaliti', 'Lokaliti',['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_lokaliti', $lokaliti , null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('status', 'Status Batal',['class'=>'form control col-sm-2']) !!}
		{!! Form::select('status', ['1'=>'Batal Pengambilan','2'=>'Pengambilan Baru'] , null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('fasa', 'Fasa Pengambilan',['class'=>'form control col-sm-2']) !!}
		{!! Form::select('fasa', $fasa, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('jkptg', 'Rujukan JKPTG', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('rujukan_jkptg', null,['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('jps', 'Rujukan JPS', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('rujukan_jps', null,['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}
		[ <a href="{{ route('blok.index') }}">Kembali</a> ] 
	</div>


{!! Form::close() !!}
<hr />
@endsection