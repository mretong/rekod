@extends('layouts.members')

@section('content')

<h1>Tambah Maklumat Borang-K</h1>
<hr />


{!! Form::open(['route' => 'borangk.store']) !!}

	<div class="form-group row">
		{!! Form::label('blok', 'Blok', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_blok', $blok, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('lot', 'No. Lot', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_lot', $lot, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('tarikh', 'Tarikh Borang K', ['class'=>'form control col-sm-2']) !!}
		{!! Form::date('tarikh_k', \Carbon\Carbon::now(), ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('rujukan_k', 'Rujukan Borang K', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('rujukan_k','JKPTG(S).KDH/',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('rujukan_fail', 'Rujukan Fail', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('rujukan_fail','MADA/BPPP/',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('attachment', 'Attachment', ['class'=>'form control col-sm-2']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Tambah', ['class' => 'btn btn-primary','onclick'=>'return myFunction();']) !!}
		&nbsp
		<a href="{{ route('borangk.index') }}" class="btn btn-info">Kembali</a>

		<script>
			function myFunction()
			{
				if(!confirm("Are you sure??"))
					event.preventDefault();
			}
		</script>
	</div>

{!! Form::close() !!}

<hr />
@endsection