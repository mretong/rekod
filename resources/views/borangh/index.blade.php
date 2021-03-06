@extends('layouts.members')
@section('content')

<h1>Borang-H Menu</h1>

<hr />

<a href="{{ route('borangh.create') }}" class="btn btn-warning""><b>Tambah Pemilik</b></a> &nbsp&nbsp
<a href="{{ route('pembayaran.index') }}" class="btn btn-warning" style="float: right;"><b>Tambah Pembayaran</b></a>

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>Bil</center></td>
		<td><center>Lot</center></td>
		<td><center>Blok</center></td>
		<td><center>No.KP</center></td>
		<td><center>Pemilik</center></td>
		<td><center>Tarikh Luput</center></td>
		<td><center>Pilihan</center></td>
	</tr>

	@foreach($borangh as $form)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $form->lot->no_lot }}</td>
		<td><center>{{ $form->blok->nama }}</td>
		<td><center>{{ $form->no_kp }}</td>
		<td><center>{{ $form->nama }}</td>
		<td><center> 'under construction'  </center></td>
		
		<td>
				{!! Form::open(['route' => ['borangh.destroy', $form->id], 'method' => 'delete', 'onclick'=>'return myFunction();']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-danger']) !!}
				{!! Form::close() !!}
				{!! Form::open(['route' => ['borangh.show', $form->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}				
				{!! Form::close() !!}

				<script>
					function myFunction()
					{
						if(!confirm("Are you sure??"))
							event.preventDefault();
					}
				</script>

		
			
	</tr>
	@endforeach
	<tr>
		<td colspan="5" align="center"> {!! $borangh->render() !!} </td>
	</tr>

@endsection