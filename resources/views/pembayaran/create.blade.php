@extends('layouts.members')

@section('content')

<h1>Tambah Maklumat Pembayaran</h1>
<hr />


{!! Form::open(['route' => 'pembayaran.store']) !!}

	<div class="form-group row">
		{!! Form::label('pemilik', 'Pemilik', ['class'=>'form control col-sm-1']) !!}
		{!! Form::select('id_pemilik', $pemilik, null, ['class'=>'form-control col-sm-4']) !!}
		&nbsp&nbsp&nbsp&nbsp
		{!! Form::label('pemilik', 'Pemilik', ['class'=>'form control col-sm-1']) !!}
		{!! Form::select('id_pemilik', $pemilik, null, ['class'=>'form-control col-sm-4']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('pemilik', 'Kategori Pampasan', ['class'=>'form control col-sm-1']) !!}
		{!! Form::select('id_pemilik', $pemilik, null, ['class'=>'form-control col-sm-4']) !!}
		&nbsp&nbsp&nbsp&nbsp
		{!! Form::label('pemilik', 'Jumlah', ['class'=>'form control col-sm-1']) !!}
		{!! Form::text('no_akaun','',['class'=>'form-control col-sm-4']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('bicara', 'Perbicaraan', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_perbicaraan', $bicara, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('bank', 'Bank', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_bank', $bank, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('no_akaun', 'No. Akaun Bank', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('no_akaun','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('kaedah_bayaran', 'Kaedah Bayaran', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('kaedah_bayaran', $kaedah, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('no_baucer', 'No. Baucer', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('no_baucer','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('tarikh_baucer', 'Tarikh Baucer', ['class'=>'form control col-sm-2']) !!}
		{!! Form::date('tarikh_baucer', \Carbon\Carbon::now(), ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('no_cek', 'No. Cek', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('no_cek','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('tarikh_cek', 'Tarikh Cek', ['class'=>'form control col-sm-2']) !!}
		{!! Form::date('tarikh_cek', \Carbon\Carbon::now(), ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('rujukan', 'Rujukan', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('rujukan','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('catatan', 'Catatan', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('catatan','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('status', 'Status Pembayaran', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('status', $status, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('rujukan_denda', 'Rujukan Denda', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('rujukan_denda','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('tarikh_denda', 'Tarikh Denda', ['class'=>'form control col-sm-2']) !!}
		{!! Form::date('tarikh_denda', \Carbon\Carbon::now(), ['class'=>'form-control col-sm-6']) !!}
	</div>


	<div class="form-group">
		{!! Form::submit('Tambah', ['class' => 'btn btn-primary']) !!}
		[<a href="{{ route('pembayaran.index') }}">Kembali</a>]
	</div>

{!! Form::close() !!}

<hr />
@endsection