<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplyer_model;

class SupplyerController extends Controller
{
    public function index (){
        // return ("Testing Katalog");
        $mysupplyer = new Supplyer_model();
        $supplyer = $mysupplyer->tampil_supplyer();
         
        $data = array('supplyer' => $supplyer);
        return view('supplyer/index', $data);
     }
     public function tambah(){
         // return ('Testing');
         return view('supplyer/tambah');
      }
  
      public function tambah_proses(Request $request){
          // return ('Testing Proses');
          $query = \DB::table('supplyer')
          ->insert([
            'id_supplyer' => $request->id_supplyer,
            
            'nama_supplyer' => $request->nama_supplyer,
            'alamat'  =>  $request->alamat,
            'no_hp'  =>  $request->no_hp,
              
          ]);
          return redirect('supplyer');
      }
      public function edit($id_supplyer){
        // return ('Testing');
        $views_master = \DB::table('supplyer')->where('id_supplyer', $id_supplyer)->first();
        //dd($views_master);
        $data = array('views_master_supplyer' => $views_master);
        return view('supplyer/edit_bahar', $data);
     }
 
     public function edit_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('supplyer')->where('id_supplyer',$request->id_supplyer)
         ->update([
            'nama_supplyer' => $request->nama_supplyer,
            'alamat'  =>  $request->alamat,
            'no_hp'  =>  $request->no_hp,
              ]);
         return redirect('supplyer');
     }
 
     public function delete ($id_supplyer){
         $query = \DB::table('supplyer')->where('id_supplyer',$id_supplyer)->delete();
         return redirect('supplyer');
     }
 }
 