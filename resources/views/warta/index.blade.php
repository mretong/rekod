@extends('layouts.members')


@section('content')

<h1>Listing Warta</h1>

<hr />

[ <a href="{{ route('warta.create') }}">Tambah Warta Baru</a> ] 

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>Bil</td>
		<td><center>Blok</td>
		<td><center>No. Warta</td>
		<td><center>Tarikh Warta</td>
		<td><center>Tarikh Luput Warta</td>
		<td><center>Pilihan</td>
	</tr>
<!--
	@foreach($warta as $news)
	<tr>
		<td>{{ $loop->iteration }}</td>
		<td>{{ $news->blok->id_blok }}</td>
		<td>{{ $news->id }}</td>
		<td>{{ $news->t_warta }}</td>
		<td>{{ $news->t_luputwarta }}</td>
		
		<td>
				{!! Form::open(['route' => ['warta.destroy', $news->id], 'method' => 'delete']) !!}
					{!! Form::submit('Delete', ['class' => 'btn btn-primary']) !!}				
				{!! Form::close() !!}{!! Form::open(['route' => ['warta.show', $news->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}				
				{!! Form::close() !!}
			
	</tr>
	@endforeach
-->
</table>

@endsection