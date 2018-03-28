@extends('layouts.members')

@section('content')

<h1>Kemaskini Maklumat Pakej</h1>

<hr />

{!! Form::model($rep, ['route' => ['aduan.update', $rep->id], 'method' => 'PATCH']) !!}

	<div class="form-group row">
		{!! Form::label('aduan', 'No. Aduan', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('aduan',null,['class'=>'form-control col-sm-6']) !!}
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
		{!! Form::text('masa',null,['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('staff', 'Staff Terima', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('staff',$staff, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('blok', 'No.Lot', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_blok',$blok, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('lot', 'No.Lot', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_lot',$lot, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('hakmilik', 'No. Hak Milik', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('hakmilik',null,['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('pengadu', 'Nama Pengadu', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('pengadu',null,['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('no_tel', 'No. Tel Pengadu', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('no_tel',null,['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('catatan', 'Catatan', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('catatan',null,['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('maklumbalas', 'Maklumbalas', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('maklumbalas',null,['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('status', 'Status Aduan', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('status',$sa, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary','onclick'=>'return myFunction();']) !!}
		[ <a href="{{ route('negeri.index') }}">Kembali</a> ]

		<script>
			function myFunction()
			{
				if(!confirm("Are you sure want to update this data??"))
					event.preventDefault();
			}
		</script>
	</div>


{!! Form::close() !!}
<hr />
@endsection