@extends('layouts.members')
@section('content')

<h1>Menu Tambahan Maklumat Asas</h1>

<hr />
1. <a href="{{ route('negeri.index') }}" class="btn btn-warning"><b>Tambah Maklumat Negeri</b></a>
2. <a href="{{ route('daerah.index') }}" class="btn btn-primary"><b>Tambah Maklumat Daerah</b></a>
3. <a href="{{ route('wilayah.index') }}" class="btn btn-warning"><b>Tambah Maklumat Wilayah</b></a>
4. <a href="{{ route('mukim.index') }}" class="btn btn-primary"><b>Tambah Maklumat Mukim</b></a><br><br>
5. <a href="{{ route('lokaliti.index') }}" class="btn btn-warning"><b>Tambah Maklumat Lokaliti</b></a>
6. <a href="{{ route('pakej.index') }}" class="btn btn-primary"><b>Tambah Maklumat Pakej</b></a>
7. <a href="{{ route('fasa.index') }}" class="btn btn-warning"><b>Tambah Maklumat Fasa</b></a>
8. <a href="{{ route('status_blok.index') }}" class="btn btn-primary"><b>Tambah Status Blok</b></a><br><br>
9. <a href="{{ route('blok.index') }}" class="btn btn-warning"><b>Tambah Maklumat Blok</b></a>
10. <a href="{{ route('tanah.index') }}" class="btn btn-primary"><b>Tambah Status Tanah</b></a>
11.<a href="{{ route('lot.index') }}" class="btn btn-warning"><b>Tambah Maklumat Lot</b></a>
12. <a href="{{ route('ptj.index') }}" class="btn btn-primary"><b>Tambah Maklumat PTJ</b></a><br><br>
13. <a href="{{ route('staff.index') }}" class="btn btn-warning"><b>Tambah Maklumat Staff</b></a>

14. <a href="{{ route('status_bicara.index') }}" class="btn btn-primary"><b>Tambah Status Bicara</b></a>

15. <a href="{{ route('status_aduan.index') }}" class="btn btn-warning"><b>Tambah Status Aduan</b></a>

16. <a href="{{ route('status_pembayaran.index') }}" class="btn btn-primary"><b>Tambah Status Pembayaran</b></a><br><br>
17. <a href="{{ route('kaedah_pembayaran.index') }}" class="btn btn-warning"><b>Tambah Kaedah Pembayaran</b></a>
18. <a href="{{ route('kategori.index') }}" class="btn btn-primary"><b>Tambah Kategori Bayaran</b></a>

19. <a href="{{ route('bank.index') }}" class="btn btn-warning"><b>Tambah Maklumat Bank</b></a>

20. <a href=" {{ route('penerima.index') }}" class="btn btn-primary"><b>Tambah Status Penerima </b></a>

<hr />

@endsection