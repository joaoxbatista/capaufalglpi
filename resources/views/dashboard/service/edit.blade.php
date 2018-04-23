@extends('layouts.simple')

@section('content')
<div class="container">
    <div class="row" style="margin-top: 50px">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <div class="card-title">
                        ATUALIZAÇÃO DE SERVIÇOS
                    </div>

                    <form method="post" action="{{route('dashboard.services.update')}}">
                    
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{{ $service->id }}">

                        <div class="row">
                            <div class="input-field col s6">
                                <input id="name" name="name" value="{{ $service->name }}" type="text" class="validate">
                                <label for="name">Nome</label>
                            </div>

                            <div class="input-field col s6">
                                <input id="target_public" name="target_public" value="{{ $service->target_public }}" type="text" class="validate">
                                <label for="target_public">Público alvo</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s6">
                                <input id="requirements" name="requirements" value="{{ $service->requirements }}" type="text" class="validate">
                                <label for="requirements">Requisitos</label>
                            </div>

                            <div class="input-field col s6">
                                <input id="quick_help" name="quick_help" value="{{ $service->quick_help }}" type="text" class="validate">
                                <label for="quick_help">Ajuda rápida</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s6">
                                <select name="type" id="type">
                                    @if($service->type == 1)
                                        <option selected value="1"> Incidente</option>
                                        <option value="2"> Requisição</option>
                                    @else
                                        <option value="1"> Incidente</option>
                                        <option selected value="2"> Requisição</option>
                                    @endif
                                </select>
                                <label>Tipo</label>
                            </div>
    
                            <div class="input-field col s6">
                                <input id="slt_id" name="slt_id" type="number" class="validate" value="{{ $service->slt_id }}" >
                                <label for="slt_id">ID da SLT</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s6">
                                <select name="sector_category_id">
                                    @foreach($categories as $key => $name)
                                        <option value="{{ $key }}">{{ $name }}</option>
                                    @endforeach()
                                </select>
                                <label>Setor</label>
                            </div>

                            <div class="col s4" style="padding-top: 30px;">
                                <label >
                                    @if($service->localizable)
                                        <input checked="checked" type="checkbox" id="localizable" name="localizable"/>
                                    @else
                                        <input type="checkbox" id="localizable" name="localizable"/>
                                    @endif
                                    <label  for="localizable">Necessário informar a localidade do chamado</label>
                                    
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="description" name="description" class="materialize-textarea"> {{ $service->description }}</textarea>
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