@extends('layouts.members')


@section('content')

<h1>Menu Status Blok</h1>

<hr />

[ <a href="{{ route('status_blok.create') }}">Tambah Maklumat Status Blok Baru</a> ] 

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>Bil</td>
		<td><center>Nama</td>
		<td><center>Kod</td>
		<td><center>Pilihan</td>
	</tr>

	@foreach($status as $blok)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $blok->nama }}</td>
		<td><center>{{ $blok->kod }}</td>
		
		<td><center>
				{!! Form::open(['route' => ['status_blok.destroy', $blok->id], 'method' => 'delete', 'onclick'=>'return myFunction();']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-danger']) !!}{!! Form::close() !!}
				{!! Form::open(['route' => ['status_blok.show', $blok->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}

					<script>
						function myFunction()
						{
							if(!confirm("Are you sure you want to delete this STATUS BLOK from system??"))
								event.preventDefault();
						}
					</script>		
	</tr>
	@endforeach

</table>

@endsection