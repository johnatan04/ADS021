@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastrar Area</div>
                <div class="panel-body">
                    @if ($errors->any())
                    <ul class="alert-warning">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                    <form action="{{ url('area/salvar')}}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$area->id}}"/>
                    <div class="input-group"> 
                        <label>Condominio:</label>
                        <select name='condominio_id'>
                            
                            @foreach($condominios as $condominio)
                            <option value="{{$condominio->id }}">{{$condominio->nome}}</option>
                            @endforeach
                        </select>
            </div>

                    <div class="input-group"> 
                        <label>local:</label>
                        <input type="text" class="text-primary" name="local" value="{{$area->local}}"/>
                </div>
                    <div class="input-group"> 
                        <label>Situacao:</label>
                        <select name='situacao'>
                            <option value="1">Ativo</option>
                            <option value="0">Inativo</option>
                        </select>
            </div>
                    <button class="btn btn-primary">Salvar</button>
                    <a href="{{ url('area/listar')}}" class="btn btn-warning">Desistir</a>
                </form>
        </div>
    </div>
</div>
@endsection
