<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplyer_model extends Model
{
    use HasFactory;
    protected $table ="supplyer";
    //protected $primaryKey ="id_supplyer";

    public function tampil_supplyer(){
        $query = \DB::table('supplyer')->get();
        return $query;
    }
}
