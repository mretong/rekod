@extends('layouts.members')


@section('content')

<h1>Menu Status Bicara</h1>

<hr />

[ <a href="{{ route('status_bicara.create') }}">Tambah Maklumat Status Bicara Baru</a> ] 

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>Bil</td>
		<td><center>Status Bicara</td>
		<td><center>Kod Status Bicara</td>
		<td><center>Pilihan</td>
	</tr>

	@foreach($sb as $sbs)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $sbs->nama }}</td>
		<td><center>{{ $sbs->kod }}</td>
		
		<td><center>
				{!! Form::open(['route' => ['status_bicara.destroy', $sbs->id], 'method' => 'delete']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-danger']) !!}{!! Form::close() !!}
				{!! Form::open(['route' => ['status_bicara.show', $sbs->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}		
	</tr>
	@endforeach

</table>

@endsection