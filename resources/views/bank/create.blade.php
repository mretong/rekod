@extends('layouts.members')

@section('content')

<h1>Tambah Bank</h1>
<hr />


{!! Form::open(['route' => 'bank.store']) !!}

	<div class="form-group row">
		{!! Form::label('nama', 'Nama Bank', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('nama','',['class'=>'form-control col-sm-6']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('kod', 'Kod Bank', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('kod','',['class'=>'form-control col-sm-6']) !!}
	</div>


	<div class="form-group">
		{!! Form::submit('Tambah Bank', ['class' => 'btn btn-primary','onclick'=>'return myFunction();']) !!}
		&nbsp<a href="{{ route('bank.index') }}" class="btn btn-info">Kembali</a>

		<script>
			function myFunction()
			{
				if(!confirm("Are you sure want to create this data??"))
					event.preventDefault();
			}
		</script>
	</div>

{!! Form::close() !!}

<hr />
@endsection