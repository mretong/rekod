@extends('layouts.members')


@section('content')

<h1>Menu Pakej</h1>

<hr />

<a href="{{ route('pakej.create') }}" class="btn btn-warning"><b>Tambah Maklumat Pakej Baru</b></a>
<a href="{{ route('setting.index') }}" class="btn btn-warning" style="float: right;"><b>Menu Utama</b></a>

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>Bil</td>
		<td><center>Pakej</td>
		<td><center>Kod Pakej</td>
		<td><center>Pilihan</td>
	</tr>

	@foreach($pakej as $pack)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $pack->nama }}</td>
		<td><center>{{ $pack->kod }}</td>
		
		<td><center>
				{!! Form::open(['route' => ['pakej.destroy', $pack->id], 'method' => 'delete', 'onclick'=> 'return myFunction();']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-danger']) !!}{!! Form::close() !!}
				{!! Form::open(['route' => ['pakej.show', $pack->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}

					<script>
						function myFunction()
						{
							if(!confirm("Are You Sure to Delete this Pakej data from the system?"))
							event.preventDefault();
						}
					</script>			
	</tr>
	@endforeach

</table>

@endsection