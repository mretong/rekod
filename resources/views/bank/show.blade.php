@extends('layouts.members')

@section('content')

<h1>Kemaskini Maklumat Bank</h1>

<hr />

{!! Form::model($banks, ['route' => ['bank.update', $banks->id], 'method' => 'PATCH']) !!}

	<div class="form-group row">
		{!! Form::label('nama', 'Nama Bank',['class'	=>	'form control col-sm-2']) !!}
		{!! Form::text('nama', null, ['class' => 'form-control col-sm-6' ]) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('kod', 'Kod Bank',['class'	=>	'form control col-sm-2']) !!}
		{!! Form::text('kod', null, ['class' => 'form-control col-sm-6']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}
		[ <a href="{{ route('bank.index') }}">Kembali</a> ] 
	</div>


{!! Form::close() !!}
<hr />
@endsection