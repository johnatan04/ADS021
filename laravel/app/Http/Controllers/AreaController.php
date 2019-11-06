<?php

namespace App\Http\Controllers;
use App\Area;
use Illuminate\Http\Request;


class AreaController extends Controller
{
    public function listar(){
        return view('area.listar',['areas'=> Area::paginate(5)]);
    }
    public function  criar(){
        return view('area.criar');
    }
    public function editar($id){
       
      return view('area.editar',['area'=>Area::find($id)]);
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
