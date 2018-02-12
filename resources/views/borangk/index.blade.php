@extends('layouts.members')
@section('content')

<h1>Borang-K Menu</h1>

<hr />

[ <a href="{{ route('borangk.create') }}">Tambah BorangK Baru</a> ] 

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
				{!! Form::open(['route' => ['borangk.destroy', $formk->id], 'method' => 'delete']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-primary']) !!}	||			
				{!! Form::close() !!}{!! Form::open(['route' => ['borangk.show', $formk->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}				
				{!! Form::close() !!}
			
	</tr>
	@endforeach

@endsection