@extends('layouts.simple')

@section('content')
<div class="container">
    <div class="row" style="margin-top: 50px">
        <div class="col m12">
            
            <h4>Formulário para criação de serviços</h4>
            <form method="post" action="{{route('dashboard.services.update')}}">
                
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ $service->id }}">

                <div class="input-field col s6">
                    <input id="name" name="name" value="{{ $service->name }}" type="text" class="validate">
                    <label for="name">Nome</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="target_public" name="target_public" value="{{ $service->target_public }}" type="text" class="validate">
                    <label for="target_public">Público alvo</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="requirements" name="requirements" value="{{ $service->requirements }}" type="text" class="validate">
                    <label for="requirements">Requisitos</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="quick_help" name="quick_help" value="{{ $service->quick_help }}" type="text" class="validate">
                    <label for="quick_help">Ajuda rápida</label>
                </div>

                <div class="input-field col s6">
                    <select name="type" id="type">
                        <option value="1"> Incidente</option>
                        <option value="2"> Requisição</option>
                    </select>
                    <label>Tipo</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="slt_id" name="slt_id" type="number" class="validate" value="{{ $service->slt_id }}" >
                    <label for="slt_id">ID da SLT</label>
                </div>
                
                <div class="input-field col s6">
                    <select name="sector_id" value="{{ $service->sector_id }}" >
                        @foreach($sectors as $sector)
                            <option value="{{ $sector->id }}">{{ $sector->name }}</option>
                        @endforeach()
                    </select>
                    <label>Setor</label>
                </div>
                
                <div class="input-field col s12">
                    <textarea id="description" name="description" class="materialize-textarea"> {{ $service->description }}</textarea>
                    <label for="description">Descrição</label>
                </div>
                
                <div class="col s12">
                     <button class="waves-effect waves-light btn" type="submit">Salvar</button>
                </div>
            </form>
            
        </div>
    </div>
</div>

@endsection