@extends('layouts.members')

@section('content')

<h1>Tambah Fasa</h1>
<hr />


{!! Form::open(['route' => 'fasa.store']) !!}

	<div class="form-group row">
		{!! Form::label('nama', 'Nama Fasa', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('nama','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('kod', 'Kod Fasa', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('kod','',['class'=>'form-control col-sm-6']) !!}
	</div>


	<div class="form-group">
		{!! Form::submit('Tambah Fasa', ['class' => 'btn btn-primary']) !!}
		[<a href="{{ route('fasa.index') }}">Kembali</a>]
	</div>

{!! Form::close() !!}

<hr />
@endsection