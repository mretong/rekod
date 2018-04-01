@extends('layouts.members')


@section('content')

<h1>Menu Blok Pengairan</h1>

<hr />

<a href="{{ route('blok.create') }}" class="btn btn-warning" style=""><b>Tambah Blok Pengairan</b></a>

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>Bil</td>
		<td><center>Blok</td>
		<td><center>Fasa Pengambilan</td>
		<td><center>Lokaliti</td>
		<td><center>Pilihan</td>
	</tr>

	@foreach($blok as $tersier)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $tersier->nama }}</td>
		<td><center>{{ $tersier->fasa->nama }}</td>
		<td><center>{{ $tersier->lokaliti->nama }}</td>
		
		<td><center>
				{!! Form::open(['route' => ['blok.destroy', $tersier->id], 'method' => 'delete', 'onclick'=>'return myFunction();']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-danger']) !!}{!! Form::close() !!}
				{!! Form::open(['route' => ['blok.show', $tersier->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}

					<script>
						function myFunction()
						{
							if(!confirm("Are You Sure to Delete this Blok data from the system?"))
							event.preventDefault();
						}
					</script>			
	</tr>
	@endforeach
	<tr>
		<td colspan="5" align="center">{!! $blok->render() !!}</td>
	</tr>

</table>

@endsection