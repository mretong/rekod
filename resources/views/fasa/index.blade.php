@extends('layouts.members')


@section('content')

<h1>Menu Fasa</h1>

<hr />

<a href="{{ route('fasa.create') }}" class="btn btn-warning"><b>Tambah Maklumat Fasa Baru</b></a>
<a href="{{ route('setting.index') }}" class="btn btn-warning" style="float: right;"><b>Menu Utama</b></a>

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>Bil</td>
		<td><center>Fasa</td>
		<td><center>Kod Fasa</td>
		<td><center>Pilihan</td>
	</tr>

	@foreach($fasa as $phase)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $phase->nama }}</td>
		<td><center>{{ $phase->kod }}</td>
		
		<td><center>
				{!! Form::open(['route' => ['fasa.destroy', $phase->id], 'method' => 'delete', 'onclick'=> 'return myFunction();']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-danger']) !!}{!! Form::close() !!}
				{!! Form::open(['route' => ['fasa.show', $phase->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}

					<script>
						function myFunction()
						{
							if(!confirm("Are You Sure to Delete this Fasa data from the system?"))
							event.preventDefault();
						}
					</script>			
	</tr>
	@endforeach

</table>

@endsection