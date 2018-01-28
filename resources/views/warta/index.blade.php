@extends('layouts.members')


@section('content')

<h1>Listing Warta</h1>

<hr />

[ <a href="{{ route('warta.index') }}">Warta Menu</a> ] 

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td>Bil</td>
		<td>Blok</td>
		<td>No. Warta</td>
		<td>Tarikh Warta</td>
		<td>Tarikh Luput Warta</td>
		<td>Pilihan</td>
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