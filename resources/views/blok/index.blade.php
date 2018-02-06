@extends('layouts.members')


@section('content')

<h1>Menu Blok Pengairan</h1>

<hr />

[ <a href="{{ route('blok.create') }}">Tambah Maklumat Blok Pengairan Baru</a> ] 

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>Bil</td>
		<td><center>Blok</td>
		<td><center>Mukim</td>
		<td><center>Lokaliti</td>
		<td><center>Pilihan</td>
	</tr>

	@foreach($blok as $tersier)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $tersier->nama }}</td>
		<td><center>{{ $tersier->id_mukim }} </td>
		<td><center>{{ $tersier->id_lokaliti}} </td>
		
		<td><center>
				{!! Form::open(['route' => ['blok.destroy', $tersier->id], 'method' => 'delete']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-danger']) !!}{!! Form::close() !!}
				{!! Form::open(['route' => ['blok.show', $tersier->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}		
	</tr>
	@endforeach

</table>

@endsection