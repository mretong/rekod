@extends('layouts.members')


@section('content')

<h1>Menu Status Pembayaran</h1>

<hr />

[ <a href="{{ route('status_pembayaran.create') }}">Tambah Maklumat Status Pembayaran Baru</a> ] 

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>Bil</td>
		<td><center>Status</td>
		<td><center>Kod Status</td>
		<td><center>Pilihan</td>
	</tr>

	@foreach($pembayaran as $pays)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $pays->nama }}</td>
		<td><center>{{ $pays->kod }}</td>
		
		<td><center>
				{!! Form::open(['route' => ['status_pembayaran.destroy', $pays->id], 'method' => 'delete']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}
				{!! Form::open(['route' => ['status_pembayaran.show', $pays->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}		
	</tr>
	@endforeach

</table>

@endsection