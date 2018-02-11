@extends('layouts.members')


@section('content')

<h1>Menu Status Aduan</h1>

<hr />

[ <a href="{{ route('status_aduan.create') }}">Tambah Maklumat Status Aduan Baru</a> ] 

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>Bil</td>
		<td><center>Nama</td>
		<td><center>Kod Status</td>
		<td><center>Pilihan</td>
	</tr>

	@foreach($sa as $sas)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $sas->nama }}</td>
		<td><center>{{ $sas->kod }}</td>
		
		<td><center>
				{!! Form::open(['route' => ['status_aduan.destroy', $sas->id], 'method' => 'delete']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}
				{!! Form::open(['route' => ['status_aduan.show', $sas->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}		
	</tr>
	@endforeach

</table>

@endsection