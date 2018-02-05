@extends('layouts.members')

@section('content')

<h1>Kemaskini Maklumat Fasa</h1>

<hr />

{!! Form::model($phase, ['route' => ['fasa.update', $phase->id], 'method' => 'PATCH']) !!}

	<div class="form-group row">
		{!! Form::label('nama', 'Nama Fasa',['class'	=>	'form control col-sm-2']) !!}
		{!! Form::text('nama', null, ['class' => 'form-control col-sm-6' ]) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('kod', 'Kod Fasa',['class'	=>	'form control col-sm-2']) !!}
		{!! Form::text('kod', null, ['class' => 'form-control col-sm-6']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}
		[ <a href="{{ route('fasa.index') }}">Kembali</a> ] 
	</div>


{!! Form::close() !!}
<hr />
@endsection