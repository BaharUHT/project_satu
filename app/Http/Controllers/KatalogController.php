<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Katalog_model;

class KatalogController extends Controller
{
    public function index (){
       // return ("Testing Katalog");
       $mykatalog = new Katalog_model();
        $katalog = $mykatalog->tampil_katalog();
        
        $data = array('katalog' => $katalog);
        return view('katalog/index', $data);
    }
    public function tambah(){
        // return ('Testing');
        return view('katalog/tambah');
     }
 
     public function tambah_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('table_katalog_dayat')
         ->insert([
             'nama_katalog' => $request->nama_katalog,
             'penerbit'  =>  $request->penerbit,
             'pengarang'  =>  $request->pengarang,
             
         ]);
         return redirect('katalog');
     }
     public function edit($id_katalog){
        // return ('Testing');
<<<<<<< HEAD
        $katalog = \DB::table('katalog')->where('id_katalog', $id_katalog)->first();
        //dd($views_master);
<<<<<<< HEAD
        $data = array('katalog' => $katalog);
        return view('katalog/edit', $id_katalog);
=======
        // $data = array('katalog' => $katalog);
        $data['katalog'] =  $katalog;
=======
        $katalog = \DB::table('table_katalog_dayat')->where('id_katalog', $id_katalog)->first();
        //dd($view_master);
        $data = array('katalog' => $katalog);
>>>>>>> a1937a1d73e1b68e38efb21c5b13b53c4297593c
        return view('katalog/edit', $data);
>>>>>>> 60cfdb8e7f6e08820b88e156f85715eea6b07c71
    }

    public function edit_proses(Request $request){
        // return ('Testing Proses');
<<<<<<< HEAD
        $query = \DB::table('katalog')->where('id_katalog',$request->id_katalog)
=======
        $query = \DB::table('table_katalog_dayat')->where('id_katalog',$request->id_katalog)
>>>>>>> a1937a1d73e1b68e38efb21c5b13b53c4297593c
        ->update([
            'nama_katalog' => $request->nama_katalog,
            'penerbit'  =>  $request->penerbit,
            'pengarang'  =>  $request->pengarang,
             ]);
        return redirect('katalog');
    }

    public function delete ($id_katalog){
<<<<<<< HEAD
        $query = \DB::table('katalog')->where('id_katalog',$id_katalog)->delete();
=======
        $query = \DB::table('table_katalog_dayat')->where('id_katalog',$id_katalog)->delete();
>>>>>>> a1937a1d73e1b68e38efb21c5b13b53c4297593c
        return redirect('katalog');
    }
}
