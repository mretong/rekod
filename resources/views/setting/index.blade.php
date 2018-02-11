@extends('layouts.members')
@section('content')

<h1>Menu Tambahan Maklumat Asas</h1>

<hr />
<center>
|| <a href="{{ route('negeri.index') }}">Tambah Maklumat Negeri</a>&nbsp&nbsp||<br>
|| <a href="{{ route('daerah.index') }}">Tambah Maklumat Daerah</a> 	||<br>
|| <a href="{{ route('mukim.index') }}">Tambah Maklumat Mukim</a> 	||<br>
|| <a href="{{ route('lokaliti.index') }}">Tambah Maklumat Lokaliti</a> ||<br>
|| <a href="{{ route('pakej.index') }}">Tambah Maklumat Pakej</a>&nbsp&nbsp&nbsp&nbsp||<br>
|| <a href="{{ route('fasa.index') }}">Tambah Maklumat Fasa</a>&nbsp&nbsp&nbsp&nbsp 	||<br>
|| <a href="{{ route('lot.index') }}">Tambah Maklumat Lot</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp||<br>
|| <a href="{{ route('blok.index') }}">Tambah Maklumat Blok</a>&nbsp&nbsp&nbsp&nbsp	||<br>
|| <a href="{{ route('staff.index') }}">Tambah Maklumat Staff</a>&nbsp&nbsp&nbsp&nbsp	||<br>
|| <a href="{{ route('wilayah.index') }}">Tambah Maklumat Wilayah</a>||<br>
|| <a href="{{ route('status_bicara.index') }}">Tambah Status Bicara</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp||<br>
|| <a href="{{ route('tanah.index') }}">Tambah Status Tanah</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp||<br>
|| <a href="{{ route('status_aduan.index') }}">Tambah Status Aduan</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp||<br>
|| <a href="{{ route('status_pembayaran.index') }}">Tambah Status Pembayaran</a>||<br>
|| <a href="{{ route('kaedah_pembayaran.index') }}">Tambah Kaedah Pembayaran</a>||<br>
|| <a href="{{ route('kategori.index') }}">Tambah Kategori Pampasan</a>||<br>
|| <a href="{{ route('bank.index') }}">Tambah Maklumat Bank</a>&nbsp&nbsp&nbsp&nbsp	||

<hr />

@endsection