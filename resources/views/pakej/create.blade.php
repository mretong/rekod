@extends('layouts.members')

@section('content')

<h1>Tambah Pakej</h1>
<hr />


{!! Form::open(['route' => 'pakej.store']) !!}

	<div class="form-group row">
		{!! Form::label('nama', 'Nama Pakej', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('nama','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('kod', 'Kod Pakej', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('kod','',['class'=>'form-control col-sm-6']) !!}
	</div>


	<div class="form-group">
		{!! Form::submit('Tambah Pakej', ['class' => 'btn btn-primary']) !!}
		[<a href="{{ route('pakej.index') }}">Kembali</a>]
	</div>

{!! Form::close() !!}

<hr />
@endsection