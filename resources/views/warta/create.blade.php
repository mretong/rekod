@extends(layouts.members)

@section('content')

<h1>Add Peserta</h1>

<hr />

[ <a href="{{ route('warta.create') }}">Add Peserta</a> ] 

<hr />

{!! Form::open(['route' => 'warta.store']) !!}

<div class="form-group">
{!! Form::label('nama', 'Nama') !!}
{!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('noIC', 'No IC') !!}
{!! Form::text('no_ic', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('jabatan', 'Jabatan') !!}
{!! Form::select('id_jabatan', $jabatan, null, ['class' => 'form-control', 'placeholder' => 'Blok']) !!}
</div>

<div class="form-group">
	{!! Form::submit('Add Peserta', ['class' => 'btn btn-primary']) !!}
</div>


{!! Form::close() !!}

@endsection