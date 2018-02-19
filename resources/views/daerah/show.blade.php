@extends('layouts.members')

@section('content')

<h1>Kemaskini Maklumat Daerah</h1>

<hr />

{!! Form::model($district, ['route' => ['daerah.update', $district->id], 'method' => 'PATCH']) !!}

	<div class="form-group row">
		{!! Form::label('nama', 'Nama Daerah',['class'	=>	'form control col-sm-2']) !!}
		{!! Form::text('nama', null, ['class' => 'form-control col-sm-6' ]) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('kod', 'Kod Daerah',['class'	=>	'form control col-sm-2']) !!}
		{!! Form::text('kod', null, ['class' => 'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('negeri', 'Negeri', ['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_negeri',$negeri, null, ['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary','onclick'=>'return myFunction();']) !!}
		&nbsp
		<a href="{{ route('daerah.index') }}" class="btn btn-info">Kembali</a>

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