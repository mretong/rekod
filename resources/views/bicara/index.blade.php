@extends('layouts.members')

@section('content')

<h1>Perbicaraan Menu</h1>

<hr />

[ <a href="{{ route('bicara.create') }}">Tambah Perbicaraan Baru</a> ] 

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>Bil</td>
		<td><center>Lot</td>
		<td><center>Nama Pentadbir</td>
		<td><center>Status</td>
		<td><center>Pilihan</td>
	</tr>

	@foreach($bicara as $hears)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $hears->id_lot }}</td>
		<td><center>{{ $hears->no_pekerja }}</td>
		<td><center>{{ $hears->status }}</td>
		
		<td>
				{!! Form::open(['route' => ['bicara.destroy', $hears->id], 'method' => 'delete']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-primary']) !!}	||			
				{!! Form::close() !!}{!! Form::open(['route' => ['bicara.show', $hears->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}				
				{!! Form::close() !!}
			
	</tr>
	@endforeach

</table>

@endsection