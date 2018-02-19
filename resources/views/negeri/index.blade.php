@extends('layouts.members')


@section('content')

<h1>Menu Negeri</h1>

<hr />

[ <a href="{{ route('negeri.create') }}">Tambah Maklumat Negeri Baru</a> ] 

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>Bil</td>
		<td><center>Negeri</td>
		<td><center>Kod Negeri</td>
		<td><center>Pilihan</td>
	</tr>

	@foreach($negeri as $state)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $state->nama }}</td>
		<td><center>{{ $state->kod }}</td>
		
		<td><center>
				{!! Form::open(['route' => ['negeri.destroy', $state->id], 'method' => 'delete', 'onclick'=>'return myFunction();']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-danger']) !!}{!! Form::close() !!}
				{!! Form::open(['route' => ['negeri.show', $state->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}		

					<script>
						function myFunction()
						{
							if(!confirm("Are You Sure to delete this Negeri data from the system?"))
							event.preventDefault();
						}
					</script>
	</tr>

	@endforeach

</table>

@endsection