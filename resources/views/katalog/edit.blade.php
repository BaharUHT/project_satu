@extends('layout1.main2')
@section('content')


<h4><b>Edit Data Transaksi</b></h1>
<br>
<<<<<<< HEAD
<form action="{{url('katalog/edit_proses')}}" method="POST">
@csrf
<input type="hidden" name="id_katalog" value="{{$katalog->id_katalog}}">
<div class="mb-3 row">
    <label for="nomor_perkiraan" class="col-sm-2 col-form-label">Nama Katalog</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nomor_perkiraan" name="nama_katalog" value="<?php echo $katalog->nama_katalog ?>">
    </div>
</div>
<div class="mb-3 row">
    <label for="nama_perkiraan" class="col-sm-2 col-form-label">Nama Penerbit</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama_perkiraan" name="penerbit" value="<?php echo $katalog->penerbit ?>">
    </div>
</div>
<div class="mb-3 row">
    <label for="nama_perkiraan" class="col-sm-2 col-form-label">Nama Pengarang</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama_perkiraan" name="pengarang" value="<?php echo $katalog->pengarang ?>">
=======
<form action="{{ asset('katalog/edit_proses') }}" method="POST">
    @csrf
<input type="hidden" name="id_katalog" value="<?php echo $katalog->id_katalog ?>">
<div class="mb-3 row">
    <label for="nama_katalog" class="col-sm-2 col-form-label">Nama Katalog</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama_katalog" name="nama_katalog" value="<?php echo $katalog->nama_katalog ?>">
    </div>
</div>
<div class="mb-3 row">
    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo $katalog->penerbit ?>">
    </div>
</div>
<div class="mb-3 row">
    <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?php echo $katalog->pengarang ?>">
>>>>>>> a1937a1d73e1b68e38efb21c5b13b53c4297593c
    </div>
</div>

<input type="submit" value="Simpan">
</form>

@endsection