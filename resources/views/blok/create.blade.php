@extends('layouts.members')

@section('content')

<h1>Tambah Blok</h1>
<hr />


{!! Form::open(['route' => 'blok.store']) !!}

	<div class="form-group row">
		{!! Form::label('nama', 'Nama Blok', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('nama','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('total', 'Jumlah Lot Total', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('total','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('kos', 'Anggaran Kos', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('kos','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('lokaliti', 'Lokaliti',['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_lokaliti', $lokaliti , 'Sila Pilih', ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('status', 'Status Batal',['class'=>'form control col-sm-2']) !!}
		{!! Form::select('status', $status , 'Sila Pilih', ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('fasa', 'Fasa Pengambilan',['class'=>'form control col-sm-2']) !!}
		{!! Form::select('fasa', $fasa, 'Sila Pilih', ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('jkptg', 'Rujukan JKPTG', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('jkptg','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('jps', 'Rujukan JPS', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('jps','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Tambah', ['class' => 'btn btn-primary']) !!}
		[<a href="{{ route('blok.index') }}">Kembali</a>]
	</div>

{!! Form::close() !!}

<hr />
@endsection