@extends('layouts.members')

@section('content')

<h1>Kemaskini Maklumat Borang K</h1>

<hr />

{!! Form::model($formk, ['route' => ['borangk.update', $formk->id], 'method' => 'PATCH']) !!}
	
	<div class="form-group row">
		{!! Form::label('blok', 'Blok', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_blok', $blok, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('lot', 'No. Lot & Hakmilik', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_lot', $lot, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('tarikh', 'Tarikh Borang K', ['class'=>'form control col-sm-2']) !!}
		{!! Form::date('tarikh_k', \Carbon\Carbon::now(), ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('tarikh', 'Tarikh Terima(MADA)', ['class'=>'form control col-sm-2']) !!}
		{!! Form::date('tarikh_terima', \Carbon\Carbon::now(), ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('rujukan1', 'Rujukan JKPTG', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('rujukan_jkptg',null,['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('rujukan2', 'Rujukan JPS', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('rujukan_jps',null,['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('rujukan_fail', 'Rujukan Fail', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('rujukan_fail', null ,['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('attachment', 'Attachment', ['class'=>'form control col-sm-2']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary','onclick'=>'return myFunction();']) !!}
		&nbsp
		<a href="{{ route('borangk.index') }}" class="btn btn-info">Kembali</a>

		<script>
			function myFunction()
			{
				if(!confirm("Are you sure to update this data??"))
					event.preventDefault();
			}
		</script>
	</div>


{!! Form::close() !!}
<hr />
@endsection