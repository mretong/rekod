@extends('layouts.members')


@section('content')

<h1>Menu Lot</h1>

<hr />

[ <a href="{{ route('lot.create') }}">Tambah Maklumat Lot Baru</a> ] 

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>Bil</td>
		<td><center>Nama Lot</td>
		<td><center>Pakej</td>
		<td><center>Status Tanah</td>
		<td><center>Pilihan</td>
	</tr>

	@foreach($lot as $soil)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $soil->nama }}</td>
		<td><center>{{ $soil->id_pakej }}</td>
		<td><center>{{ $soil->status_tanah }}</td>
		
		<td><center>
				{!! Form::open(['route' => ['lot.destroy', $soil->id], 'method' => 'delete']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-danger']) !!}{!! Form::close() !!}
				{!! Form::open(['route' => ['lot.show', $soil->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}		
	</tr>
	@endforeach

</table>

@endsection