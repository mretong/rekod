@extends('layouts.members')


@section('content')

<h1>Menu Status Tanah</h1>

<hr />

<a href="{{ route('tanah.create') }}" class="btn btn-warning"><b>Tambah Maklumat Status Tanah Baru</b></a>
<a href=" {{ route('setting.index') }} " class="btn btn-warning" style="float: right;"><b>Menu Utama</b></a>

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>Bil</td>
		<td><center>Status Tanah</td>
		<td><center>Kod Tanah</td>
		<td><center>Pilihan</td>
	</tr>

	@foreach($tanah as $land)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $land->nama }}</td>
		<td><center>{{ $land->kod }}</td>
		
		<td><center>
				{!! Form::open(['route' => ['tanah.destroy', $land->id], 'method' => 'delete', 'onclick'=>'return myFunction();']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-danger']) !!}{!! Form::close() !!}
				{!! Form::open(['route' => ['tanah.show', $land->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}

					<script>
						function myFunction()
						{
							if(!confirm("Are you sure you want to delete this STATUS TANAH from system?"))
								event.preventDefault();
						}
					</script>		
	</tr>
	@endforeach

</table>

@endsection