@extends('layouts.members')

@section('content')

<h1>Tambah Maklumat Pemilik</h1>
<hr />


{!! Form::open(['route' => 'borangh.store']) !!}
	
	<div class="form-group row">
		{!! Form::label('blok', 'Blok', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_blok', $blok, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('lot', 'No. Lot', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_lot', $lot, null, ['class'=>'form-control col-sm-6']) !!}
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
		{!! Form::select('kategori_pampasan', $kategori, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Tambah', ['class' => 'btn btn-primary','onclick'=>'return myFunction();']) !!}
		[<a href="{{ route('borangh.index') }}">Kembali</a>]

		<script>
			function myFunction()
			{
				if(!confirm("Are you sure??"))
					event.preventDefault();
			}
		</script>
	</div>

{!! Form::close() !!}

<hr />
@endsection