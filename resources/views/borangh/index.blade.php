@extends('layouts.members')
@section('content')

<h1>Borang-H Menu</h1>

<hr />

<a href="{{ route('borangh.create') }}" class="btn btn-warning"><b>Tambah BorangH Baru</b></a>
<a href="{{ route('pembayaran.index') }}" class="btn btn-warning"><b>Tambah Maklumat Pembayaran Baru</b></a>

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center><b>Bil</b></td>
		<td><center><b>Lot</b></td>
		<td><center><b>Blok</b></td>
		<td><center><b>No.KP</b></td>
		<td><center><b>Nama</b></td>
		<td><center><b>Pilihan</b></td>
	</tr>

	@foreach($borangh as $form)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $form->id_lot }}</td>
		<td><center>{{ $form->id_blok }}</td>
		<td><center>{{ $form->no_kp }}</td>
		<td><center>{{ $form->nama }}</td>
		
		<td>
				{!! Form::open(['route' => ['borangh.destroy', $form->id], 'method' => 'delete', 'onclick'=>'return myFunction();']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-danger']) !!}
				{!! Form::close() !!}
				{!! Form::open(['route' => ['borangh.show', $form->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}				
				{!! Form::close() !!}

				<script>
					function myFunction()
					{
						if(!confirm("Are you sure??"))
							event.preventDefault();
					}
				</script>

		
			
	</tr>
	@endforeach

@endsection