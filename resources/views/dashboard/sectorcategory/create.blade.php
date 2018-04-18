@extends('layouts.simple')

@section('content')
<div class="container">
    
    <div class="row" style="margin-top: 50px">
        <div class="col m12">
            
            <h4>Formulário para criação de serviços</h4>
            <form method="post" action="{{route('dashboard.sector.categories.store')}}">
                
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <div class="input-field col s6">
                    <input id="name" name="name" type="text" class="validate">
                    <label for="name">Nome</label>
                </div>
                
                <div class="input-field col s6">
                    <select name="sector_id">
                        @foreach($sectors as $sector)
                            <option value="{{ $sector->id }}">{{ $sector->name }}</option>
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