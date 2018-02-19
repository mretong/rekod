@extends('layouts.members')


@section('content')

<h1>Menu Kaedah Bayaran</h1>

<hr />

[ <a href="{{ route('kaedah_pembayaran.create') }}">Tambah Maklumat Kaedah Bayaran Baru</a> ] 

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>Bil</td>
		<td><center>Kaedah</td>
		<td><center>Kod Kaedah</td>
		<td><center>Pilihan</td>
	</tr>

	@foreach($bayar as $pay)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $pay->nama }}</td>
		<td><center>{{ $pay->kod }}</td>
		
		<td><center>
				{!! Form::open(['route' => ['kaedah_pembayaran.destroy', $pay->id], 'method' => 'delete', 'onclick'=>'return myFunction();']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-danger']) !!}{!! Form::close() !!}
				{!! Form::open(['route' => ['kaedah_pembayaran.show', $pay->id], 'method' => 'get']) !!}
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