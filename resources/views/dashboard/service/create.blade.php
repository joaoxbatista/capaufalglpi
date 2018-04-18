@extends('layouts.simple')

@section('content')
<div class="container">
    <div class="row" style="margin-top: 50px">
        <div class="col m12">
            
            <h4>Formulário para criação de serviços</h4>
            <form method="post" action="{{route('dashboard.services.store')}}">
                
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <div class="input-field col s6">
                    <input id="name" name="name" type="text" class="validate">
                    <label for="name">Nome</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="target_public" name="target_public" type="text" class="validate">
                    <label for="target_public">Público alvo</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="requirements" name="requirements" type="text" class="validate">
                    <label for="requirements">Requisitos</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="quick_help" name="quick_help" type="text" class="validate">
                    <label for="quick_help">Ajuda rápida</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="slt_id" name="slt_id" type="text" class="validate">
                    <label for="slt_id">ID da SLT</label>
                </div>
                
                <div class="input-field col s6">
                    <select name="sector_category_id">
                        @foreach($categories as $key => $name)
                            <option value="{{ $key }}">{{ $name }}</option>
                        @endforeach()
                    </select>
                    <label>Setor</label>
                </div>
                
                <div class="input-field col s12">
                    <textarea id="description" name="description" class="materialize-textarea"></textarea>
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