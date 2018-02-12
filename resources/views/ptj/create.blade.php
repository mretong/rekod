@extends('layouts.members')

@section('content')

<h1>Tambah PTJ</h1>
<hr />


{!! Form::open(['route' => 'ptj.store']) !!}

	<div class="form-group row">
		{!! Form::label('nama', 'Nama PTJ', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('nama','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('kod', 'Kod PTJ', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('kod','',['class'=>'form-control col-sm-6']) !!}
	</div>


	<div class="form-group">
		{!! Form::submit('Tambah', ['class' => 'btn btn-primary']) !!}
		[<a href="{{ route('ptj.index') }}">Kembali</a>]
	</div>

{!! Form::close() !!}

<hr />
@endsection