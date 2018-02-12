@extends('layouts.members')

@section('content')

<h1>Tambah Daerah</h1>
<hr />


{!! Form::open(['route' => 'daerah.store']) !!}

	<div class="form-group row">
		{!! Form::label('nama', 'Nama Daerah', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('nama','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('kod', 'Kod Daerah', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('kod','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('negeri', 'Negeri', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_negeri',$negeri, null, ['class'=>'form-control col-sm-6']) !!}
	</div>


	<div class="form-group">
		{!! Form::submit('Tambah Daerah', ['class' => 'btn btn-primary']) !!}
		[<a href="{{ route('daerah.index') }}">Kembali</a>]
	</div>

{!! Form::close() !!}

<hr />
@endsection