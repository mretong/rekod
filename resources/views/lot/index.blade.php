@extends('layouts.members')


@section('content')

<h1>Menu Lot</h1>

<hr />

[ <a href="{{ route('lot.create') }}">Tambah Maklumat Lot Baru</a> ] 

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>Bil</td>
		<td><center>Blok</td>
		<td><center>Lot</td>
		<td><center>Hakmilik</td>
		<td><center>Pakej</td>
		<td><center>Pilihan</td>
	</tr>

	@foreach($lot as $soil)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $soil->blok->nama }}</td>
		<td><center>{{ $soil->no_lot }}</td>
		<td><center>{{ $soil->no_hakmilik }}</td>
		<td><center>{{ $soil->id_pakej }}</td>
		
		<td><center>
				{!! Form::open(['route' => ['lot.destroy', $soil->id], 'method' => 'delete', 'onclick'=> 'return myFunction();']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-danger']) !!}{!! Form::close() !!}
				{!! Form::open(['route' => ['lot.show', $soil->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}

					<script>
						function myFunction()
						{
							if(!confirm("Are You Sure to Delete this Lot data from the system?"))
							event.preventDefault();
						}
					</script>			
	</tr>
	@endforeach

</table>

@endsection