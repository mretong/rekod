@extends('layouts.members')

@section('content')

<h1>Menu Bank</h1>

<hr />

[ <a href="{{ route('bank.create') }}">Tambah Maklumat Bank Baru</a> ] 

<hr />

<table class="table table-bordered table-striped">
	<tr>
		<td><center>Bil</td>
		<td><center>Bank</td>
		<td><center>Kod Bank</td>
		<td><center>Pilihan</td>
	</tr>

	@foreach($bank as $banks)
	<tr>
		<td><center>{{ $loop->iteration }}</td>
		<td><center>{{ $banks->nama }}</td>
		<td><center>{{ $banks->kod }}</td>
		
		<td><center>
				{!! Form::open(['route' => ['bank.destroy', $banks->id], 'method' => 'delete', 'onclick'=> 'return myFunction();']) !!}
					{!! Form::submit('Buang', ['class' => 'btn btn-danger']) !!}{!! Form::close() !!}
				{!! Form::open(['route' => ['bank.show', $banks->id], 'method' => 'get']) !!}
					{!! Form::submit('Kemaskini', ['class' => 'btn btn-primary']) !!}{!! Form::close() !!}

				<script>
					function myFunction()
					{
						if(!confirm("Are you sure want to delete BANK information from system???"))
							event.preventDefault();
					}
				</script>		
	</tr>
	@endforeach
	<tr>
		<td colspan="5" align="center"> {!! $bank->render() !!} </td>
	</tr>

</table>



@endsection