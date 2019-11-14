<?php

namespace App\Http\Controllers;
use App\Area;
use App\Condominio;
use Illuminate\Http\Request;


class AreaController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function listar(){
        return view('area.listar',['areas'=> Area::paginate(5)]);
    }
    public function  criar(){
        $condominios = Condominio::all();
        
        return view('area.criar', ['condominios'=>$condominios]);
    }
    public function editar($id){
               $condominios = Condominio::all();

      return view('area.editar',['area'=>Area::find($id),'condominios'=>$condominios]);
    }
    public function remover($id){
        $area = Area::find($id);
        $area->delete();
        return redirect('area/listar');
    }
    public function  salvar(\App\Http\Requests\AreaRequest $request){
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
