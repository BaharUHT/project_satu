@extends('layout1.main2')
@section('content')

<h4><b>Daftar Supplyer</b></h4>
<br>
<a class="btn btn-warning " href="{{ asset('supplyer/tambah')  }}">Tambah Data</a>
<table class="table table-striped" width="100%">
 <tr class="table-primary">
    <td><b>No</td>
    <td><b>ID Supplyer</td>
    <td><b>Nama Supplyer</td>
    <td><b>Alamat</td>
    <td><b>No HP</td>
    <td><b>Aksi</td>
 </tr>   
<?php
$no=0;

foreach ($supplyer as $rows){
$no++;

?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->id_supplyer }}</td>
    <td>{{ $rows->nama_supplyer }}</td>
    <td>{{ $rows->alamat }}</td>
    <td>{{ $rows->no_hp }}</td>
    <td>
        <a class="btn btn-warning"href="{{ asset('supplyer/edit/'.$rows->id_supplyer ) }}">Edit</a>
        <a class="btn btn-danger" href="{{ asset('supplyer/delete/'.$rows->id_supplyer ) }}">delete</a>
       
</td>
</tr>
<?php 
}
?>
</table>
@endsection