@extends('layouts.members')

@section('content')

<h1>Tambah Status Tanah</h1>
<hr />


{!! Form::open(['route' => 'tanah.store']) !!}

	<div class="form-group row">
		{!! Form::label('nama', 'Status Tanah', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('nama','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('kod', 'Kod Status', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('kod','',['class'=>'form-control col-sm-6']) !!}
	</div>


	<div class="form-group">
		{!! Form::submit('Tambah', ['class' => 'btn btn-primary']) !!}
		[<a href="{{ route('tanah.index') }}">Kembali</a>]
	</div>

{!! Form::close() !!}

<hr />
@endsection