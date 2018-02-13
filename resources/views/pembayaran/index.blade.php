@extends('layouts.members')


@section('content')

<h1>Menu Pembayaran</h1>

<hr />

[ <a href="{{ route('pembayaran.create') }}">Tambah Maklumat Pembayaran Baru</a> ] 

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>Bil</td>
		<td><center>Lot</td>
		<td><center>Nama Pemilik</td>
		<td><center>Status Pembayaran</td>
		<td><center>Pilihan</td>
	</tr>

	@foreach($bayar as $pay)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $pay->nama }}</td>
		<td><center>{{ $pay->kod }}</td>
		
		<td><center>
				{!! Form::open(['route' => ['pembayaran.destroy', $pay->id], 'method' => 'delete']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}
				{!! Form::open(['route' => ['pembayaran.show', $pay->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}		
	</tr>
	@endforeach

</table>

@endsection