@extends('layouts.members')

@section('content')

<h1>Add Warta</h1>


{!! Form::open(['route' => 'warta.store']) !!}

<div class="form-group">
{!! Form::label('blok', 'Blok') !!}
{!! Form::select('blok') !!}
</div>

<div class="form-group">
{!! Form::label('fasa', 'Fasa') !!}
{!! Form::select('fasa') !!}
</div>

<div class="form-group">
{!! Form::label('pakej', 'Pakej') !!}
{!! Form::select('pakej') !!}
</div>

<div class="form-group">
{!! Form::label('tarikh_warta', 'Tarikh Warta') !!}
{!! Form::date('tarikh_warta', \Carbon\Carbon::now()) !!}
</div>

<div class="form-group">
{!! Form::label('tarikh_luput', 'Tarikh Luput Warta') !!}
{!! Form::date('tarikh_luput', \Carbon\Carbon::now()) !!}
</div>

<div class="form-group">
{!! Form::label('jilid', 'Jilid Warta') !!}
{!! Form::text('jilid') !!}
</div>

<div class="form-group">
{!! Form::label('no_warta', 'Nombor Warta') !!}
{!! Form::text('no_warta') !!}
</div>

<div class="form-group">
{!! Form::label('rujukan', 'Rujukan') !!}
{!! Form::text('rujukan') !!}
</div>

<div class="form-group">
{!! Form::label('catatan', 'Catatan') !!}
{!! Form::text('catatan') !!}
</div>


<div class="form-group">
	{!! Form::submit('Add Warta', ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}

@endsection