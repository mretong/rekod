@extends('layouts.members')


@section('content')

<h1>Menu Staff</h1>

<hr />

[ <a href="{{ route('staff.create') }}">Tambah Maklumat Staff Baru</a> ] 

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>Bil</td>
		<td><center>Nama Staff</td>
		<td><center>No. Pekerja</td>
		<td><center>Pilihan</td>
	</tr>

	@foreach($staff as $pic)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $pic->nama }}</td>
		<td><center>{{ $pic->no_pekerja }}</td>
		
		<td><center>
				{!! Form::open(['route' => ['staff.show', $pic->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}
				{!! Form::open(['route' => ['staff.destroy', $pic->id], 'method' => 'delete']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-danger','glyphicon glyphicon-trash']) !!}{!! Form::close() !!}	
	</tr>
	@endforeach

</table>

@endsection