@extends('layouts.members')

@section('content')

<h1>Tambah Staff</h1>
<hr />


{!! Form::open(['route' => 'staff.store']) !!}

	<div class="form-group row">
		{!! Form::label('nama', 'Nama Staff', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('nama','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('no_pekerja', 'No. Pekerja', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('no_pekerja','',['class'=>'form-control col-sm-6']) !!}
	</div>


	<div class="form-group">
		{!! Form::submit('Tambah Staff', ['class' => 'btn btn-primary']) !!}
		[<a href="{{ route('staff.index') }}">Kembali</a>]
	</div>

{!! Form::close() !!}

<hr />
@endsection