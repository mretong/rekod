@extends('layouts.members')

@section('content')

<h1>Menu Carian</h1>

<hr />



<table class="table table-bordered table-striped">
	<tr>
		{!! Form::open(['route' => 'ajax']) !!}

                        <div class="form-group row">
                            {!! Form::label('blok', 'Blok', ['class'=>'form control col-sm-2']) !!}
                            {!! Form::select('size', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Pick a size...']) !!}

                        </div>
                        <div class="form-group row">
                            {!! Form::label('lot', 'Lot', ['class'=>'form control col-sm-2']) !!}
                            {!! Form::select('size', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Pick a size...']) !!}

                        </div>
                        <div class="form-group row">
                            {!! Form::label('fasa', 'Fasa', ['class'=>'form control col-sm-2']) !!}
                            {!! Form::select('size', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Pick a size...']) !!}

                        </div>
                        <div class="form-group row">
                            {!! Form::label('pakej', 'Pakej', ['class'=>'form control col-sm-2']) !!}
                            {!! Form::select('size', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Pick a size...']) !!}

                        </div>


                        <div class="form-group row">
                            {!! Form::submit('Cari', ['class' => 'btn btn-primary']) !!}
                        </div>
                {!! Form::close() !!}

	</tr>

<hr />	
</table>

@endsection