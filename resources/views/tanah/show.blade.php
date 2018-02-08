@extends('layouts.members')

@section('content')

<h1>Kemaskini Maklumat Status Tanah</h1>

<hr />

{!! Form::model($land, ['route' => ['tanah.update', $land->id], 'method' => 'PATCH']) !!}

	<div class="form-group row">
		{!! Form::label('nama', 'Status Tanah',['class'	=>	'form control col-sm-2']) !!}
		{!! Form::text('nama', null, ['class' => 'form-control col-sm-6' ]) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('kod', 'Kod Tanah',['class'	=>	'form control col-sm-2']) !!}
		{!! Form::text('kod', null, ['class' => 'form-control col-sm-6']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}
		[ <a href="{{ route('tanah.index') }}">Kembali</a> ] 
	</div>


{!! Form::close() !!}
<hr />
@endsection