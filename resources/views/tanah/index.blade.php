@extends('layouts.members')


@section('content')

<h1>Menu Status Tanah</h1>

<hr />

[ <a href="{{ route('tanah.create') }}">Tambah Maklumat Status Tanah Baru</a> ] 

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>Bil</td>
		<td><center>Status Tanah</td>
		<td><center>Kod Tanah</td>
		<td><center>Pilihan</td>
	</tr>

	@foreach($tanah as $land)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $land->nama }}</td>
		<td><center>{{ $land->kod }}</td>
		
		<td><center>
				{!! Form::open(['route' => ['tanah.destroy', $land->id], 'method' => 'delete']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-danger']) !!}{!! Form::close() !!}
				{!! Form::open(['route' => ['tanah.show', $land->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}		
	</tr>
	@endforeach

</table>

@endsection