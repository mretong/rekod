@extends('layouts.members')

@section('content')

<h1>Tambah Blok</h1>
<hr />


{!! Form::open(['route' => 'blok.store']) !!}

	<div class="form-group row">
		{!! Form::label('nama', 'Nama Blok', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('id_blok','',['class'=>'form-control col-sm-5']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('total', 'Jumlah Lot Total', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('jum_lot_total','',['class'=>'form-control col-sm-5']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('kos', 'Anggaran Kos', ['class'=>'form control col-sm-2']) !!}
		{!! Form::text('anggaran_kos','',['class'=>'form-control col-sm-5']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('lokaliti', 'Lokaliti',['class'=>'form control col-sm-2']) !!}
		{!! Form::select('id_lokaliti', $lokaliti , 'Sila Pilih', ['class'=>'form-control col-sm-5']) !!}
	</div>

	<div class="form-group row">
		{!! Form::label('fasa', 'Fasa Pengambilan',['class'=>'form control col-sm-2']) !!}
		{!! Form::select('fasa', $fasa, 'Sila Pilih', ['class'=>'form-control col-sm-5']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Tambah', ['class' => 'btn btn-primary','onclick'=>'return myFunction();']) !!}
		&nbsp <a href="{{ route('blok.index') }}" class="btn btn-info">Kembali</a>

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

<script language="javascript">

function uppercase() {
	alert('here');
}



</script>
@endsection