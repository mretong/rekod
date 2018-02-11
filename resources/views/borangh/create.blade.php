@extends('layouts.members')

@section('content')

<h1>Tambah Maklumat Pemilik</h1>
<hr />


{!! Form::open(['route' => 'borangh.store']) !!}

	<div class="form-group row">
		{!! Form::label('lot', 'No. Lot', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('lot', $lot, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('nama', 'Nama Pemilik', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('nama','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('no_kp', 'No. Kad Pengenalan', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('no_kp','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('kategori', 'Kategori Pampasan', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('kategori', $kategori, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Tambah Negeri', ['class' => 'btn btn-primary']) !!}
		[<a href="{{ route('borangh.index') }}">Kembali</a>]
	</div>

{!! Form::close() !!}

<hr />
@endsection