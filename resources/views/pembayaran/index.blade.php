@extends('layouts.members')


@section('content')

<h1>Menu Pembayaran</h1>

<hr />

<a href="{{ route('pembayaran.create') }}" class="btn btn-warning"><b>+</b></a>
<a href="{{ route('borangh.index') }}" class="btn btn-info" style="float: right;">Kembali ke Menu Borang H</a>

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>{!! Form::label('bil', 'Bil.') !!}</td>
		<td><center>{!! Form::label('pemilik', 'Nama Pemilik') !!}</td>
		<td><center>{!! Form::label('no_kp', 'No. K/Pengenalan') !!}</td>
		<td><center>{!! Form::label('sb', 'Status Pembayaran') !!}</td>
		<td><center>{!! Form::label('pilih', 'Pilihan') !!}</td>
	</tr>

	@foreach($bayar as $pay)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $pay->id_pemilik }} </td>
		<td><center>{{ $pay->pemilik->id }}</td>
		<td><center>{{ $pay->status->nama }}</td>
		
		<td><center>
				{!! Form::open(['route' => ['pembayaran.destroy', $pay->id], 'method' => 'delete']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-danger']) !!}{!! Form::close() !!}
				{!! Form::open(['route' => ['pembayaran.show', $pay->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}		
	</tr>
	@endforeach
	<tr>
		<td colspan="5" align="center"> {!! $bayar->render() !!} </td>
	</tr>
</table>

@endsection
