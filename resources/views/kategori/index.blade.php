@extends('layouts.members')


@section('content')

<h1>Menu Kategori Pampasan</h1>

<hr />

[ <a href="{{ route('kategori.create') }}">Tambah Maklumat Kategori Pampasan Baru</a> ] 

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>Bil</td>
		<td><center>Kategori Pampasan</td>
		<td><center>Kod Kategori</td>
		<td><center>Pilihan</td>
	</tr>

	@foreach($kategori as $list)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $list->nama }}</td>
		<td><center>{{ $list->kod }}</td>
		
		<td><center>
				{!! Form::open(['route' => ['kategori.destroy', $list->id], 'method' => 'delete', 'onclick'=>'return myFunction();']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-danger']) !!}{!! Form::close() !!}
				{!! Form::open(['route' => ['kategori.show', $list->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}

					<script>
						function myFunction()
						{
							if(!confirm("Are you sure??"))
								event.preventDefault();
						}
					</script>		
	</tr>
	@endforeach

</table>

@endsection