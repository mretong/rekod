@extends('layouts.members')

@section('content')
<h1>Home</h1>
<hr />
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <!-- {!! Form::open(['route' => 'negeri.store']) !!} -->

                       <!--  <div class="form-group row">
                            {!! Form::label('nama', 'Nama Negeri', ['class'=>'form control col-sm-2']) !!}
                            {!! Form::select('size', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Sila Pilih','class'=>'form-control col-sm-6']) !!}
                        </div>

                        <div class="form-group row">
                            {!! Form::label('no_ic', 'No. Kad Pengenalan', ['class'=>'form control col-sm-3']) !!}
                            {!! Form::text('no_ic','',['class'=>'form-control col-sm-6']) !!}

                        </div>


                        <div class="form-group row">
                            {!! Form::submit('Cari', ['class' => 'btn btn-primary']) !!}
                        </div>
                {!! Form::close() !!} -->

                Selamat Datang ke Sistem NKEA
        </div>
    </div>

@endsection
