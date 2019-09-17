<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condominio extends Model
{
   public function unidades(){
        return $this->hasMany('\App\Unidade');
    }
    public function morador(){
        return $this->hasMany('\App\Morador');
    }
}
