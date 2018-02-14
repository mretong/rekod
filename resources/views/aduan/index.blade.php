@extends('layouts.members')


@section('content')

<h1>Menu Aduan</h1>

<hr />

[ <a href="{{ route('aduan.create') }}">Tambah Maklumat Aduan Baru</a> ] 

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>Bil</td>
		<td><center>No. Aduan</td>
		<td><center>Tarikh Terima</td>
		<td><center>No. Lot</td>
		<td><center>Status Aduan</td>
		<td><center>Pilihan</td>
	</tr>

	@foreach($aduan as $rep)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $rep->no_aduan }}</td>
		<td><center>{{ $rep->tarikh_terima }}</td>
		<td><center>{{ $rep->id_lot }}</td>
		<td><center>{{ $rep->status_aduan }}</td>
		
		<td><center>
				{!! Form::open(['route' => ['aduan.destroy', $rep->id], 'method' => 'delete']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}
				{!! Form::open(['route' => ['aduan.show', $rep->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}		
	</tr>
	@endforeach

</table>

@endsection