@extends('layouts.members')

@section('content')

<h1>Kemaskini Maklumat Staff</h1>

<hr />

{!! Form::model($pic, ['route' => ['staff.update', $pic->id], 'method' => 'PATCH']) !!}

	<div class="form-group row">
		{!! Form::label('nama', 'Nama Staff',['class'	=>	'form control col-sm-2']) !!}
		{!! Form::text('nama', null, ['class' => 'form-control col-sm-6' ]) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('no_pekerja', 'No. Pekerja',['class'	=>	'form control col-sm-2']) !!}
		{!! Form::text('no_pekerja', null, ['class' => 'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('ptj', 'PTJ', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('ptj',$ptj, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}
		[ <a href="{{ route('staff.index') }}">Kembali</a> ] 
	</div>


{!! Form::close() !!}
<hr />
@endsection