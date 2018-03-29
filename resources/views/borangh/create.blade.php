@extends('layouts.members')

@section('content')

<h1>Tambah Maklumat Pemilik</h1>
<hr />


{!! Form::open(['route' => 'borangh.store']) !!}
	
	<div class="form-group row">
		{!! Form::label('blok', 'Blok', ['class'=>'form control col-sm-3']) !!}
		{!! Form::select('id_blok', $blok, null, ['class'=>'form-control col-sm-4']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('lot', 'No. Lot', ['class'=>'form control col-sm-3']) !!}
		{!! Form::select('id_lot', $lot, null, ['class'=>'form-control col-sm-4']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('nama', 'Nama Pemilik', ['class'=>'form control col-sm-3']) !!}
		{!! Form::text('nama','',['class'=>'form-control col-sm-4']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('no_kp', 'No. Kad Pengenalan', ['class'=>'form control col-sm-3']) !!}
		{!! Form::text('no_kp','',['class'=>'form-control col-sm-4']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('penerima', 'Status Penerima', ['class'=>'form control col-sm-3']) !!}
		{!! Form::select('id_status', $penerima, null, ['class'=>'form-control col-sm-4']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('pecah', 'Pecahan Bahagian', ['class'=>'form control col-sm-3']) !!}
		{!! Form::text('pecahan','',['class'=>'form-control col-sm-4']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('tarikh', 'Tarikh Tarikh Borang H', ['class'=>'form control col-sm-3']) !!}
		{!! Form::date('tarikh_h', \Carbon\Carbon::now(), ['class'=>'form-control col-sm-4']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('tarikh2', 'Tarikh Terima Borang H', ['class'=>'form control col-sm-3']) !!}
		{!! Form::date('tarikh_terima', \Carbon\Carbon::now(), ['class'=>'form-control col-sm-4']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('rujukan', 'Rujukan JKPTG', ['class'=>'form control col-sm-3']) !!}
		{!! Form::text('jkptg','',['class'=>'form-control col-sm-4']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('rujukan2', 'Rujukan JPS', ['class'=>'form control col-sm-3']) !!}
		{!! Form::text('jps','',['class'=>'form-control col-sm-4']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('kategori', 'Kategori Bayaran', ['class'=>'form control col-sm-3']) !!}
		{!! Form::select('kategori_pampasan', $kategori, null, ['class'=>'form-control col-sm-4']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Tambah', ['class' => 'btn btn-primary','onclick'=>'return myFunction();']) !!}
		&nbsp
		<a href="{{ route('borangh.index') }}" class="btn btn-info">Kembali</a>

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