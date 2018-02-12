@extends('layouts.members')


@section('content')

<h1>Menu Mukim</h1>

<hr />

[ <a href="{{ route('mukim.create') }}">Tambah Maklumat Mukim Baru</a> ] 

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>Bil</td>
		<td><center>Nama</td>
		<td><center>Daerah</td>
		<td><center>Wilayah</td>
		<td><center>Pilihan</td>
	</tr>

	@foreach($mukim as $stay)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $stay->nama }}</td>
		<td><center>{{ $stay->id_daerah }}</td>
		<td><center>{{ $stay->id_wilayah }}</td>

		<td><center>
				{!! Form::open(['route' => ['mukim.destroy', $stay->id], 'method' => 'delete']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-danger']) !!}{!! Form::close() !!}
				{!! Form::open(['route' => ['mukim.show', $stay->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}		
	</tr>
	@endforeach

</table>

@endsection