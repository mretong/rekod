@extends('layouts.members')

@section('content')

<h1>Tambah Lot</h1>
<hr />


{!! Form::open(['route' => 'lot.store']) !!}

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
		{!! Form::text('no_lot','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('hakmilik', 'Hakmilik', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('no_hakmilik','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Tambah', ['class' => 'btn btn-primary']) !!}
		[<a href="{{ route('lot.index') }}">Kembali</a>]
	</div>

{!! Form::close() !!}

<hr />
@endsection