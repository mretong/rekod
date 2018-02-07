@extends('layouts.members')


@section('content')

<h1>Menu Daerah</h1>

<hr />

[ <a href="{{ route('daerah.create') }}">Tambah Maklumat Daerah Baru</a> ] 

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>Bil</td>
		<td><center>Daerah</td>
		<td><center>Kod Daerah</td>
		<td><center>Pilihan</td>
	</tr>

	@foreach($daerah as $district)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $district->nama }}</td>
		<td><center>{{ $district->kod }}</td>
		
		<td><center>
				{!! Form::open(['route' => ['daerah.destroy', $district->id], 'method' => 'delete']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}
				{!! Form::open(['route' => ['daerah.show', $district->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}		
	</tr>
	@endforeach

</table>

@endsection