@extends('layouts.members')

@section('content')

<h1>Kemaskini Maklumat Pemilik</h1>

<hr />

{!! Form::model($form, ['route' => ['borangh.update', $form->id], 'method' => 'PATCH']) !!}
	
	<div class="form-group row">
		{!! Form::label('blok', 'Blok', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_blok', $blok, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('lot', 'No. Lot', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_lot', $lot, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('nama', 'Nama Pemilik',['class'	=>	'form control col-sm-2']) !!}
		{!! Form::text('nama', null, ['class' => 'form-control col-sm-6' ]) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('no_kp', 'No. Kad Pengenalan',['class'	=>	'form control col-sm-2']) !!}
		{!! Form::text('no_kp', null, ['class' => 'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('kategori', 'Kategori Pampasan', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('kategori_pampasan', null,  $kategori, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}
		[ <a href="{{ route('borangh.index') }}">Kembali</a> ] 
	</div>


{!! Form::close() !!}
<hr />
@endsection