@extends('layouts.members')

@section('content')

<h1>Kemaskini Maklumat PTJ</h1>

<hr />

{!! Form::model($ptjs, ['route' => ['ptj.update', $ptjs->id], 'method' => 'PATCH']) !!}

	<div class="form-group row">
		{!! Form::label('nama', 'Nama PTJ',['class'	=>	'form control col-sm-2']) !!}
		{!! Form::text('nama', null, ['class' => 'form-control col-sm-6' ]) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('kod', 'Kod PTJ',['class'	=>	'form control col-sm-2']) !!}
		{!! Form::text('kod', null, ['class' => 'form-control col-sm-6']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}
		[ <a href="{{ route('ptj.index') }}">Kembali</a> ] 
	</div>


{!! Form::close() !!}
<hr />
@endsection