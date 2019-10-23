<?php

namespace App\Http\Controllers;
use App\Area;
use Illuminate\Http\Request;


class AreaController extends Controller
{
    public function listar(){
        return Area::all();
    }
    public function  criar(){
        
    }
    public function editar($id){
      return Area::find($id);  
    }
    public function remover($id){
        $area = Area::find($id);
        $area->delete();
        return redirect('area/listar');
    }
    public function  salvar(request $request){
        $area = new Area();
         if ($request->has('id')){
             $area = Area::find($request->id);
         }
         $area->local = $request->local;
         $area->situacao = $request->situacao;
         $area->condominio_id=$request->condominio_id;
         $area->save();
         return redirect('area/listar');
         
    }
}
