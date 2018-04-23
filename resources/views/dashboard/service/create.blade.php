@extends('layouts.simple')

@section('content')
<div class="container">
    <div class="row" style="margin-top: 50px">
        <div class="col m12">
            
            <div class="card">
                <div class="card-content">
                    <div class="card-title">
                        CADASTRO DE SERVIÇOS
                    </div>
                    <form method="post" action="{{route('dashboard.services.store')}}">
                    
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="name" name="name" type="text" class="validate">
                                <label for="name">Nome</label>
                            </div>
                            
                            <div class="input-field col s6">
                                <input id="target_public" name="target_public" type="text" class="validate">
                                <label for="target_public">Público alvo</label>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="requirements" name="requirements" type="text" class="validate">
                                <label for="requirements">Requisitos</label>
                            </div>
                            
                            <div class="input-field col s6">
                                <input id="quick_help" name="quick_help" type="text" class="validate">
                                <label for="quick_help">Ajuda rápida</label>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="input-field col s6">
                                <select name="type" id="type">
                                    <option value="1"> Incidente</option>
                                    <option value="2"> Requisição</option>
                                </select>
                                <label>Tipo</label>
                            </div>

                            <div class="input-field col s4">
                                <input id="slt_id" name="slt_id" type="text" class="validate">
                                <label for="slt_id">ID da SLT</label>
                            </div>
                        </div>
                        
                        <div class="row">
                            
                            <div class="input-field col s4">
                                <select name="sector_category_id">
                                    @foreach($categories as $key => $name)
                                        <option value="{{ $key }}">{{ $name }}</option>
                                    @endforeach()
                                </select>
                                <label>Setor</label>
                            </div>

                            <div class="col s4" style="padding-top: 30px;">
                                <label >
                                    <input type="checkbox" id="localizable" name="localizable"/>
                                    <label for="localizable">Necessário informar a localidade do chamado</label>
                                </label>
                            </div>
                        </div>


                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="description" name="description" class="materialize-textarea"></textarea>
                                <label for="description">Descrição</label>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col s12">
                                 <button class="waves-effect waves-light btn" type="submit">Salvar</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            
            
        </div>
    </div>
</div>

@endsection