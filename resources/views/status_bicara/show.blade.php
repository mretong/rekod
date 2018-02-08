@extends('layouts.members')

@section('content')

<h1>Kemaskini Maklumat Status Bicara</h1>

<hr />

{!! Form::model($sbs, ['route' => ['status_bicara.update', $sbs->id], 'method' => 'PATCH']) !!}

	<div class="form-group row">
		{!! Form::label('nama', 'Nama Status',['class'	=>	'form control col-sm-2']) !!}
		{!! Form::text('nama', null, ['class' => 'form-control col-sm-6' ]) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('kod', 'Kod Status',['class'	=>	'form control col-sm-2']) !!}
		{!! Form::text('kod', null, ['class' => 'form-control col-sm-6']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}
		[ <a href="{{ route('status_bicara.index') }}">Kembali</a> ] 
	</div>


{!! Form::close() !!}
<hr />
@endsection