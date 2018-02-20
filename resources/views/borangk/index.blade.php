@extends('layouts.members')
@section('content')

<h1>Borang-K Menu</h1>

<hr />

<a href="{{ route('borangk.create') }}" class="btn btn-warning"><b>Tambah BorangK Baru</b></a> 

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>Bil</td>
		<td><center>Blok</td>
		<td><center>No. Lot</td>
		<td><center>Tarikh Borang K</td>
		<td><center>Pilihan</td>
	</tr>

	@foreach($borangk as $formk)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $formk->id_blok }}</td>
		<td><center>{{ $formk->id_lot }}</td>
		<td><center>{{ $formk->tarikh_k }}</td>
		
		<td>
				{!! Form::open(['route' => ['borangk.destroy', $formk->id], 'method' => 'delete','onclick'=>'return myFunction();']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-danger']) !!}	||			
				{!! Form::close() !!}{!! Form::open(['route' => ['borangk.show', $formk->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}				
				{!! Form::close() !!}

				<script>
					function myFunction()
					{
						if(!confirm("Are you sure want to remove this data??"))
							event.preventDefault();
					}
				</script>
			
	</tr>
	@endforeach

@endsection