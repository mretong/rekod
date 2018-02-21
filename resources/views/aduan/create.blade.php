@extends('layouts.members')

@section('content')

<h1>Tambah Aduan</h1>
<hr />


{!! Form::open(['route' => 'aduan.store']) !!}

	<div class="form-group row">
		{!! Form::label('aduan', 'No. Aduan', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('aduan','MADA/BPPP/NKEA/',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('tarikh_terima', 'Tarikh Aduan', ['class'=>'form control col-sm-2']) !!}
		{!! Form::date('tarikh_terima', \Carbon\Carbon::now(), ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('tarikh_selesai', 'Tarikh Selesai', ['class'=>'form control col-sm-2']) !!}
		{!! Form::date('tarikh_selesai', \Carbon\Carbon::now(), ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('masa', 'Masa Terima', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('masa','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('staff', 'Staff Terima', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('staff',$staff, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('blok', 'Blok', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_blok',$blok, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('lot', 'No.Lot', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_lot',$lot, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('hakmilik', 'No. Hak Milik', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('hakmilik','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('pengadu', 'Nama Pengadu', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('pengadu','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('no_tel', 'No. Tel Pengadu', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('no_tel','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('catatan', 'Catatan', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('catatan','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('maklumbalas', 'Maklumbalas', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('maklumbalas','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('pemaklum', 'Pemaklum', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('pemaklum','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('status', 'Status Aduan', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('status',$sa, null, ['class'=>'form-control col-sm-6']) !!}
	</div>


	<div class="form-group">
		{!! Form::submit('Simpan', ['class' => 'btn btn-primary','onclick'=>'return myFunction();']) !!}
		<a href="{{ route('aduan.index') }}" class="btn btn-info">Kembali</a>

		<script>
			function myFunction()
			{
				if(!confirm("Are you sure to create this new data??"))
					event.preventDefault();
			}
		</script>
	</div>

{!! Form::close() !!}

<hr />
@endsection