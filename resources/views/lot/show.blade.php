@extends('layouts.members')

@section('content')

<h1>Kemaskini Maklumat Lot</h1>

<hr />

{!! Form::model($soil, ['route' => ['lot.update', $soil->id], 'method' => 'PATCH']) !!}

	<div class="form-group row">
		{!! Form::label('blok', 'Blok', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('no_blok',$blok, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('mukim', 'Mukim', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_mukim',$mukim, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('pakej', 'Pakej', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('pakej',$pakej, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('tanah', 'Status Tanah', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('tanah',$tanah, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('nolot', 'No. Lot', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('no_lot',null,['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('hakmilik', 'Hakmilik', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('no_hakmilik',null,['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}
		[ <a href="{{ route('lot.index') }}">Kembali</a> ] 
	</div>


{!! Form::close() !!}
<hr />
@endsection