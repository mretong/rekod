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
		<td><center>{{ $pay->pemilik->nama }} </td>
		<td><center>{{ $pay->pemilik->no_kp }}</td>
		<td><center>{{ $pay->status->nama }}</td>
		
		<td>
			<form class="form-inline"> 

				<a href="{{ route('logout') }}"
	                onclick="event.preventDefault();
	                         document.getElementById('logout-form').submit();">
	                <center>Logout
	            </a>

	            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                {{ csrf_field() }}
	            </form>

	            <a href="{{ route('pembayaran.destroy', $pay->id) }}">Buang</a>

				{!! Form::open(['route' => ['pembayaran.destroy', $pay->id], 'method' => 'delete']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-danger']) !!}
				{!! Form::close() !!}
				{!! Form::open(['route' => ['pembayaran.show', $pay->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}
				{!! Form::close() !!}


			</form>

		</td>
	</tr>
	@endforeach
	<tr>
		<td colspan="5" align="center"> {!! $bayar->render() !!} </td>
	</tr>
</table>

@endsection
