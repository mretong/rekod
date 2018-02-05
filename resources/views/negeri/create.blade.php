@extends('layouts.members')

@section('content')

<h1>Tambah Negeri</h1>
<hr />


{!! Form::open(['route' => 'negeri.store']) !!}

	<div class="form-group row">
		{!! Form::label('nama', 'Nama Negeri', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('nama','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('kod', 'Kod Negeri', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('kod','',['class'=>'form-control col-sm-6']) !!}
	</div>


	<div class="form-group">
		{!! Form::submit('Tambah Negeri', ['class' => 'btn btn-primary']) !!}
		[<a href="{{ route('negeri.index') }}">Kembali</a>]
	</div>

{!! Form::close() !!}

<hr />
@endsection