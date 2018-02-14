@extends('layouts.members')


@section('content')

<h1>Menu PTJ</h1>

<hr />

[ <a href="{{ route('ptj.create') }}">Tambah Maklumat PTJ Baru</a> ] 

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>Bil</td>
		<td><center>PTJ</td>
		<td><center>Kod PTJ</td>
		<td><center>Pilihan</td>
	</tr>

	@foreach($ptj as $ptjs)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $ptjs->nama }}</td>
		<td><center>{{ $ptjs->kod }}</td>
		
		<td><center>
				{!! Form::open(['route' => ['ptj.destroy', $ptjs->id], 'method' => 'delete']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}
				{!! Form::open(['route' => ['ptj.show', $ptjs->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}		
	</tr>
	@endforeach

</table>

@endsection