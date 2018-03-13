@extends('layouts.members')


@section('content')

<h1>Menu PTJ</h1>

<hr />

[ <a href="{{ route('ptj.create') }}">Tambah Maklumat PTJ Baru</a> ] 

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>Bil</td>
		<td><center>PTJ</td>
		<td><center>Kod PTJ</td>
		<td><center>Pilihan</td>
	</tr>

	@foreach($ptj as $ptjs)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $ptjs->nama }}</td>
		<td><center>{{ $ptjs->kod }}</td>
		
		<td><center>
				{!! Form::open(['route' => ['ptj.destroy', $ptjs->id], 'method' => 'delete', 'onclick'=>'return myFunction();']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-danger']) !!}{!! Form::close() !!}
				{!! Form::open(['route' => ['ptj.show', $ptjs->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}

				<script>
					function myFunction()
					{
						if(!confirm("Are you sure want to delete data from PTJ??"))
							event.preventDefault();
					}
				</script>		
	</tr>
	@endforeach
	<tr>
		<td colspan="5" align="center">{!! $ptj->render() !!}</td>
	</tr>

</table>

@endsection