@extends('layouts.members')

@section('content')

<h1>Kemaskini Maklumat Penerima</h1>

<hr />

{!! Form::model($receiver, ['route' => ['penerima.update', $receiver->id], 'method' => 'PATCH']) !!}

	<div class="form-group row">
		{!! Form::label('nama', 'Nama Penerima',['class'	=>	'form control col-sm-2']) !!}
		{!! Form::text('nama', null, ['class' => 'form-control col-sm-5' ]) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('kod', 'Kod Penerima',['class'	=>	'form control col-sm-2']) !!}
		{!! Form::text('kod', null, ['class' => 'form-control col-sm-5']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}
		&nbsp<a href="{{ route('penerima.index') }}" class="btn btn-info">Kembali</a>
	</div>


{!! Form::close() !!}
<hr />
@endsection