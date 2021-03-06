@extends('layouts.members')

@section('content')

<h1>Kemaskini Maklumat Kategori</h1>

<hr />

{!! Form::model($list, ['route' => ['kategori.update', $list->id], 'method' => 'PATCH']) !!}

	<div class="form-group row">
		{!! Form::label('nama', 'Nama Negeri',['class'	=>	'form control col-sm-2']) !!}
		{!! Form::text('nama', null, ['class' => 'form-control col-sm-6' ]) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('kod', 'Kod Negeri',['class'	=>	'form control col-sm-2']) !!}
		{!! Form::text('kod', null, ['class' => 'form-control col-sm-6']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}
		[ <a href="{{ route('kategori.index') }}">Kembali</a> ] 
	</div>


{!! Form::close() !!}
<hr />
@endsection