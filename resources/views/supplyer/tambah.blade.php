@extends('layout1.main2')
@section('content')


<h4><b>Tambah Supplyer</b></h4>
<br>
<form action="{{ asset('supplyer/tambah_proses') }}" method="POST">
@csrf

<div class="mb-3 row">
    <label for="id_supplyer" class="col-sm-2 col-form-label">ID Supplyer</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="id_supplyer" name="id_supplyer">
    </div>
</div>
<div class="mb-3 row">
    <label for="nama_supplyer" class="col-sm-2 col-form-label">Nama Supplyer</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama_supplyer" name="nama_supplyer">
    </div>
</div>
<div class="mb-3 row">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="alamat" name="alamat">
    </div>
</div>
<div class="mb-3 row">
    <label for="no_hp" class="col-sm-2 col-form-label">No_Hp</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="no_hp" name="no_hp">
    </div>
</div>

<input type="submit" value="Simpan" class="btn btn-primary float-left">
</form> 

@endsection