@extends('layouts.members')
@section('content')

<h1>Borang-H Menu</h1>

<hr />

[ <a href="{{ route('borangh.create') }}">Tambah BorangH Baru</a> ]
[ <a href="{{ route('borangh.create') }}">Tambah Maklumat Pembayaran Baru</a> ]

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>Bil</td>
		<td><center>Lot</td>
		<td><center>Kategori</td>
		<td><center>No.KP</td>
		<td><center>Nama</td>
		<td><center>Pilihan</td>
	</tr>

	@foreach($borangh as $form)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $form->id_lot }}</td>
		<td><center>{{ $form->kategori_pampasan }}</td>
		<td><center>{{ $form->no_kp }}</td>
		<td><center>{{ $form->nama }}</td>
		
		<td>
				{!! Form::open(['route' => ['borangh.destroy', $form->id], 'method' => 'delete']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-primary']) !!}	||			
				{!! Form::close() !!}{!! Form::open(['route' => ['borangh.show', $form->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}				
				{!! Form::close() !!}
			
	</tr>
	@endforeach

@endsection