<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    
      public function condominio(){
        return $this->belongsTo('\App\Condominio');
   }
   public function morador(){
        return $this->belongsTo('\App\Morador');
   }
  
}
