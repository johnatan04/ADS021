@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listagem de area</div>

                <div class="panel-body">
                    <a href="{{ url('area/criar')}}" cass="btn btn-success">Novo</a>
                       <table class="table">
                           <tr>
                               <th>local</th>
                               <th>situacao</th>
                               <th>local</th>
                           </tr> 
                           @foreach($areas as $area)
                           <tr>
                               <td>{{ $area->local}}</td>
                           <td>{{$area->situacao ? "Ativo" : "Inativo" }}</td>
                           <td><a href="{{url('area/'.$area->id.'/editar')}}" class="btn btn-primary">Editar</a>
                               <a href="{{url('area/'.$area->id.'/remover')}}" class="btn btn-danger" onclick="return confirm('deseja remover')">Remover</a></td>
                           </tr>                                                 
                      @endforeach
                      </table>
                       {{$areas->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
