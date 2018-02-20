@extends('layouts.members')

@section('content')

<h1>Kemaskini Maklumat Warta</h1>

<hr />

{!! Form::model($news, ['route' => ['warta.update', $news->id], 'method' => 'PATCH']) !!}

	<div class="form-group row">
		{!! Form::label('blok', 'Blok',['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_blok', $blok, $blok, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('fasa', 'Fasa', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_fasa', $fasa, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('pakej', 'Pakej', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_pakej',$pakej, null, ['class'=>'form-control col-sm-6']) !!}
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
		{!! Form::text('jilid_warta', null ,['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('no_warta', 'Nombor Warta', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('no_warta', null ,['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('rujukan', 'Rujukan', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('rujukan',null ,['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('catatan', 'Catatan', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('catatan', null ,['class'=>'form-control col-sm-6']) !!}
	</div>

<div class="form-group">
	{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}
	&nbsp
	<a href="{{ route('warta.index') }}" class="btn btn-info">Kembali</a>
</div>


{!! Form::close() !!}
<hr />
@endsection