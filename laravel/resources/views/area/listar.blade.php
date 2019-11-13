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
                               @foreach($areas as $area)
                           </tr> 
                           <d>{{ $area->local}}</d>
                           <td>$area->situacao}}</td>
                           <td><a href="{{url('area/'.$area->id.'/editar')}}"class="btn btn-primary">Editar</a>
                           <td><a href="{{url('area/'.$area->id.'/remover')}}" class="btn btn-danger" onclick="return"></a>
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
