@extends('layouts.members')
@section('content')

<h1>Menu Tambahan Maklumat Asas</h1>

<hr />
1. <a href="{{ route('negeri.index') }}" class="btn btn-warning">Tambah Maklumat Negeri</a>
2. <a href="{{ route('daerah.index') }}" class="btn btn-primary">Tambah Maklumat Daerah</a>
3. <a href="{{ route('wilayah.index') }}" class="btn btn-warning">Tambah Maklumat Wilayah</a>
4. <a href="{{ route('mukim.index') }}" class="btn btn-primary">Tambah Maklumat Mukim</a><br><br>
5. <a href="{{ route('lokaliti.index') }}" class="btn btn-warning">Tambah Maklumat Lokaliti</a>
6. <a href="{{ route('pakej.index') }}" class="btn btn-primary">Tambah Maklumat Pakej</a>
7. <a href="{{ route('fasa.index') }}" class="btn btn-warning">Tambah Maklumat Fasa</a>
8. <a href="{{ route('status_blok.index') }}" class="btn btn-primary">Tambah Status Blok</a><br><br>
9. <a href="{{ route('blok.index') }}" class="btn btn-warning">Tambah Maklumat Blok</a>
10 <a href="{{ route('tanah.index') }}" class="btn btn-primary">Tambah Status Tanah</a>
11 <a href="{{ route('lot.index') }}" class="btn btn-warning">Tambah Maklumat Lot</a>
12 <a href="{{ route('ptj.index') }}" class="btn btn-primary">Tambah Maklumat PTJ</a><br><br>
13 <a href="{{ route('staff.index') }}" class="btn btn-warning">Tambah Maklumat Staff</a>

14 <a href="{{ route('status_bicara.index') }}" class="btn btn-primary">Tambah Status Bicara</a>

15 <a href="{{ route('status_aduan.index') }}" class="btn btn-warning">Tambah Status Aduan</a>

16 <a href="{{ route('status_pembayaran.index') }}" class="btn btn-primary">Tambah Status Pembayaran</a><br><br>
17 <a href="{{ route('kaedah_pembayaran.index') }}" class="btn btn-warning">Tambah Kaedah Pembayaran</a>
18 <a href="{{ route('kategori.index') }}" class="btn btn-primary">Tambah Kategori Bayaran</a>

19 <a href="{{ route('bank.index') }}" class="btn btn-warning">Tambah Maklumat Bank</a>

20 <a href=" {{ route('penerima.index') }}" class="btn btn-primary">Tambah Status Penerima </a>

<hr />

@endsection