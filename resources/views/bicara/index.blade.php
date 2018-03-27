@extends('layouts.members')

@section('content')

<h1>Perbicaraan Menu</h1>

<hr />

<a href="{{ route('bicara.create') }}" class="btn btn-warning" style="float: right"><b>Tambah</b></a>
&nbsp
<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>Bil</td>
		<td><center>No. Lot & Hakmilik</td>
		<td><center>Nama Pentadbir</td>
		<td><center>Status</td>
		<td><center>Pilihan</td>
	</tr>

	@foreach($bicara as $hears)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $hears->lot->no_lot }} - {{$hears->lot->no_hakmilik}} </td>
		<td><center>{{ $hears->staff->nama }} </td>
		<td><center>{{ $hears->status->nama }}</td>
		
		<td>
				{!! Form::open(['route' => ['bicara.destroy', $hears->id], 'method' => 'delete', 'onclick'=>'return myFunction();']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-danger']) !!}	||			
				{!! Form::close() !!}{!! Form::open(['route' => ['bicara.show', $hears->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}				
				{!! Form::close() !!}

				<script>
					function myFunction()
					{
						if(!confirm("Are you sure want to delete this PERBICARAAN data from the system??"))
							event.preventDefault();
					}
				</script>
			
	</tr>
	@endforeach
	<tr>
		<td colspan="5" align="center"> {!! $bicara->render() !!} </td>
	</tr>

</table>

@endsection