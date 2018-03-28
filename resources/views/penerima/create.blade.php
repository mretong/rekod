@extends('layouts.members')

@section('content')

<h1>Tambah Status Penerima</h1>
<hr />


{!! Form::open(['route' => 'penerima.store']) !!}

	<div class="form-group row">
		{!! Form::label('nama', 'Nama Status', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('nama','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('kod', 'Kod Status', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('kod','',['class'=>'form-control col-sm-6']) !!}
	</div>


	<div class="form-group row">
		{!! Form::submit('Tambah', ['class' => 'btn btn-primary','onclick'=>'return myFunction();']) !!}
		&nbsp<a href="{{ route('penerima.index') }}" class="btn btn-info">Kembali</a>

		<script>
			function myFunction()
			{
				if(!confirm("Adakah anda pasti??"))
					event.preventDefault();
			}
		</script>
	</div>

{!! Form::close() !!}

<hr />
@endsection