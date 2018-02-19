@extends('layouts.members')


@section('content')

<h1>Warta Menu</h1>

<hr />

<a href="{{ route('warta.create') }}" class="btn btn-warning"><b>Tambah Warta Baru</b></a>

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

	@foreach($warta as $news)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $news->id_blok }}</td>
		<td><center>{{ $news->no_warta }}</td>
		<td><center>{{ $news->tarikh_warta }}</td>
		<td><center>{{ $news->tarikh_luput }}</td>
		
		<td>
				{!! Form::open(['route' => ['warta.destroy', $news->id], 'method' => 'delete', 'onclick'=>'return myFunction();']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-danger']) !!}	||			
				{!! Form::close() !!}{!! Form::open(['route' => ['warta.show', $news->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}				
				{!! Form::close() !!}

				<script>
					function myFunction()
					{
						if(!confirm("Are you sure you want to delete this WARTA information??"))
							event.preventDefault();
					}
				</script>
			
	</tr>
	@endforeach

</table>

@endsection