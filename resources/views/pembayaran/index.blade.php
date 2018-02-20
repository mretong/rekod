@extends('layouts.members')


@section('content')

<h1>Menu Pembayaran</h1>

<hr />

<a href="{{ route('pembayaran.create') }}" class="btn btn-warning"><b>Tambah Maklumat Pembayaran Baru</b></a>
<a href="{{ route('borangh.index') }}" class="btn btn-warning"><b>Kembali ke Menu Borang H</b></a>

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>Bil</td>
		<td><center>Nama Pemilik</td>
		<td><center>No.K/Pengenalan</td>
		<td><center>Status Pembayaran</td>
		<td><center>Pilihan</td>
	</tr>

	@foreach($bayar as $pay)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $pay->id_pemilik }}</td>
		<td><center>{{ $pay->kod }}</td>
		<td><center>{{ $pay->status }}</td>
		
		<td><center>
				{!! Form::open(['route' => ['pembayaran.destroy', $pay->id], 'method' => 'delete']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-danger']) !!}{!! Form::close() !!}
				{!! Form::open(['route' => ['pembayaran.show', $pay->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}		
	</tr>
	@endforeach

</table>

@endsection