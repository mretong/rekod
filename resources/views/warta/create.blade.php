@extends('layouts.members')

@section('content')

<h1>Add Warta</h1>
<hr />


{!! Form::open(['route' => 'warta.store']) !!}

	<div class="form-group row">
		{!! Form::label('blok', 'Blok',['class'=>'form control col-sm-2']) !!}
		{!! Form::select('blok', $blok, 'Sila Pilih', ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('fasa', 'Fasa', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('fasa', $fasa, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('pakej', 'Pakej', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('pakej',$pakej, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('tarikh_warta', 'Tarikh Warta', ['class'=>'form control col-sm-2']) !!}
		{!! Form::date('tarikh_warta', \Carbon\Carbon::now(), ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('tarikh_luput', 'Tarikh Luput Warta', ['class'=>'form control col-sm-2']) !!}
		{!! Form::date('tarikh_luput', \Carbon\Carbon::now(), ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('jilid', 'Jilid Warta', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('jilid','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('no_warta', 'Nombor Warta', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('no_warta','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('rujukan', 'Rujukan', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('rujukan','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('catatan', 'Catatan', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('catatan','',['class'=>'form-control col-sm-6']) !!}
	</div>


	<div class="form-group">
		{!! Form::submit('Tambah Warta', ['class' => 'btn btn-primary']) !!}
		[ <a href="{{ route('warta.index') }}">Kembali</a> ]
	</div>

{!! Form::close() !!}

<hr />
@endsection