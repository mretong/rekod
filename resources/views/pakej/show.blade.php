@extends('layouts.members')

@section('content')

<h1>Kemaskini Maklumat Pakej</h1>

<hr />

{!! Form::model($pack, ['route' => ['pakej.update', $pack->id], 'method' => 'PATCH']) !!}

	<div class="form-group row">
		{!! Form::label('nama', 'Nama Pakej',['class'	=>	'form control col-sm-2']) !!}
		{!! Form::text('nama', null, ['class' => 'form-control col-sm-6' ]) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('kod', 'Kod Pakej',['class'	=>	'form control col-sm-2']) !!}
		{!! Form::text('kod', null, ['class' => 'form-control col-sm-6']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}
		[ <a href="{{ route('pakej.index') }}">Kembali</a> ] 
	</div>


{!! Form::close() !!}
<hr />
@endsection