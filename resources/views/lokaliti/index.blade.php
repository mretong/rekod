@extends('layouts.members')
@section('content')

<h1>Lokaliti Menu</h1>
<hr />
[ <a href=" {{ route('lokaliti.create') }} ">Tambah Lokaliti Baru </a> ]
<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>Bil</td>
		<td><center>Nama PPK</td>
		<td><center>Kod PPK</td>
		<td><center>Pilihan</td>
	</tr>

	@foreach($lokaliti as $ptj)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $ptj->nama }}</td>
		<td><center>{{ $ptj->kod }}</td>
		
		<td><center>
				{!! Form::open(['route' => ['lokaliti.destroy', $ptj->id], 'method' => 'delete']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}
				{!! Form::open(['route' => ['lokaliti.show', $ptj->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}		
	</tr>
	@endforeach

</table>
@endsection