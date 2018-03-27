@extends('layouts.members')

@section('content')

<h1>Tambah Perbicaraan</h1>
<hr />


{!! Form::open(['route' => 'bicara.store']) !!}
	
	<div class="form-group row">
		{!! Form::label('daerah', 'Daerah',['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_daerah', $daerah, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('mukim', 'Mukim',['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_mukim', $mukim, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('blok', 'Blok',['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_blok', $blok, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('lot', 'Lot',['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_lot', $lot, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('tarikh_1', 'Tarikh Bicara', ['class'=>'form control col-sm-2']) !!}
		{!! Form::date('tarikh_1', \Carbon\Carbon::now(), ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('nama', 'Nama Pentadbir',['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_staff', $staff, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('status', 'Status Perbicaraan',['class'=>'form control col-sm-2']) !!}
		{!! Form::select('status', $sb, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('bilangan', 'Bil. Perbicaraan', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('bilangan','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('luas', 'Luas Diambil(Ha)', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('luas_ambil','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('price', 'Harga/(Ha)', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('harga','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('bil_tuan', 'Bil. Tuan Tanah', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('tuan_tanah','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('pampasan', 'Pampasan RM:', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('pampasan','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('kosLain', 'Lain-lain Kos RM:', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('kos_lain','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('mada', 'Wakil MADA',['class'=>'form control col-sm-2']) !!}
		{!! Form::select('wakil_mada', $staff, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('jps', 'Wakil JPS',['class'=>'form control col-sm-2']) !!}
		{!! Form::select('wakil_jps', $staff, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('catatan', 'Catatan', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('catatan','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('jajaran', 'Jajaran', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('jajaran','',['class'=>'form-control col-sm-6']) !!}
	</div>


	<div class="form-group">
		{!! Form::submit('Tambah', ['class' => 'btn btn-primary','onclick'=>'return myFunction();']) !!}
		&nbsp<a href="{{ route('bicara.index') }}" class="btn btn-info">Kembali</a>

		<script>
			function myFunction()
			{
				if(!confirm("Are you sure to add this PERBICARAAN??"))
					event.preventDefault();
			}
		</script>
	</div>

{!! Form::close() !!}

<hr />
@endsection