@extends('layouts.simple')

@section('content')
<div class="container">
    <div class="row" style="margin-top: 50px">
        <div class="col m12">
            <h4>{{ $service->name }}</h4>
            <p><strong>Descrição: </strong>{{ $service->description }}</p>
            <p><strong>Público alvo: </strong>{{ $service->target_public }}</p>
            <p><strong>Requisitos: </strong>{{ $service->requirements }}</p>
            
            @if($service->quick_help)
                <p><strong>Ajuda rápida: </strong>{{ $service->quick_help }}</p>
            @endif

        </div>
    </div>

    <div class="row">
        <div class="col m6">
            
            @if(Auth::check())
                <form method="post" action="{{route('dashboard.services.edit')}}" style="display: inline;">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                    <button type="submit" class="waves-effect waves-light orange accent-4 btn">Editar</button>
                </form>

                <form method="post" action="{{route('dashboard.services.remove')}}" style="display: inline;">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                    <button type="submit" class="waves-effect waves-light red accent-4 btn">Deletar</button>
                </form>

                <form method="post" action="{{route('dashboard.calls.create')}}" style="display: inline;">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                    <button type="submit" class="waves-effect waves-light btn">Criar chamado</button>
                </form>
            @endif



        </div>
    </div>

</div>

@endsection