@extends('layouts.members')

@section('content')

<h1>Tambah Status Blok</h1>
<hr />


{!! Form::open(['route' => 'status_blok.store']) !!}

	<div class="form-group row">
		{!! Form::label('nama', 'Nama', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('nama','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('kod', 'Kod Status', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('kod','',['class'=>'form-control col-sm-6']) !!}
	</div>


	<div class="form-group">
		{!! Form::submit('Tambah', ['class' => 'btn btn-primary']) !!}
		[<a href="{{ route('status_blok.index') }}">Kembali</a>]
	</div>

{!! Form::close() !!}

<hr />
@endsection