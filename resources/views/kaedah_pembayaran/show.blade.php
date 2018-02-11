@extends('layouts.members')

@section('content')

<h1>Kemaskini Maklumat Kaedah Pembayaran</h1>

<hr />

{!! Form::model($pay, ['route' => ['kaedah_pembayaran.update', $pay->id], 'method' => 'PATCH']) !!}

	<div class="form-group row">
		{!! Form::label('nama', 'Nama Kaedah',['class'	=>	'form control col-sm-2']) !!}
		{!! Form::text('nama', null, ['class' => 'form-control col-sm-6' ]) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('kod', 'Kod Kaedah',['class'	=>	'form control col-sm-2']) !!}
		{!! Form::text('kod', null, ['class' => 'form-control col-sm-6']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}
		[ <a href="{{ route('kaedah_pembayaran.index') }}">Kembali</a> ] 
	</div>


{!! Form::close() !!}
<hr />
@endsection