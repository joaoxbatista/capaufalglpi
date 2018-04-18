@extends('layouts.simple')

@section('content')

<!-- Catálogo de Serviços -->
<div class="container">

    
    
    <div class="col s12 m12">
        @if(session('success_message'))
           <p>{{ session('success_message') }}</p>
        @endif

        @if(Auth::check())
            <div class="row" style="margin-top: 50px">
                <a href="{{ route('dashboard.sector.categories.create') }}" class="btn blue darken-2">Subcategoria + </a>
                <a href="{{ route('dashboard.services.create') }}" class="btn blue darken-4">Serviço + </a>
            </div>
        @endif
        
        <div class="row" style="margin: 50px 0px;">

            <ul class="tabs ">
                @foreach($sectors as $sector)
                    <li class="tab col m3">
                        <a href="#sector-{{ $sector->id }}">{{ $sector->name }}</a>
                    </li>
                @endforeach
            </ul>

            @foreach($sectors as $sector)
                <div id="sector-{{ $sector->id }}" class="sector col-s12">
                    @foreach($sector->sector_categories as $category)
                        <div class="">
                            @if(count($category->services) > 0)
                                <div class="category-chip">
                                    @if(!empty($category->icon))
                                        <img src="{{$category->icon}}">
                                    @endif
                                    {{$category->name}}
                                </div>

                                <ul class="collapsible" data-collapsible="accordion">
                                    @foreach($category->services as $service)
                                        <li>
                                            <div class="collapsible-header"><strong>{{ $service->name }}</strong></div>
                                            <div class="collapsible-body">

                                                <div>
                                                    <span class="service-title"><i class="material-icons">announcement</i>  Descrição: </span>
                                                    <div class="service-content">
                                                        <p>{{ $service->description }}</p>
                                                    </div>
                                                </div>

                                                @if($service->requeriments != null)
                                                    <div>
                                                        <span class="service-title"><i class="material-icons">attach_file</i>  Requisitos: </span>
                                                        <div class="service-content">
                                                            <p>{{ $service->requeriments }}</p>
                                                        </div>
                                                    </div>
                                                @endif

                                                @if($service->quick_help != null)
                                                    <div>
                                                        <span class="service-title"><i class="material-icons">av_timer</i>  Ajuda rápida: </span>
                                                        <i class="material-icons"></i>
                                                        <div class="service-content">
                                                            <p>{{ $service->quick_help }}</p>
                                                        </div>
                                                    </div>
                                                @endif

                                                @if($service->target_public != null)
                                                    <div>
                                                        <span class="service-title"><i class="material-icons">person_pin</i>  Público alvo: </span>
                                                        <div class="service-content">
                                                            <p>{{ $service->target_public }}</p>
                                                        </div>
                                                    </div>
                                                @endif

                                                <div class="service-buttons">
                                                    <a href="{{ route('dashboard.services.view', ['id' => $service->id]) }}" class="waves-effect blue lighten-2 btn">Detalhes</a>

                                                    @if(Auth::check())
                                                        <form method="post" action="{{route('dashboard.calls.create')}}" style="display: inline;">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            <input type="hidden" name="service_id" value="{{ $service->id }}">
                                                            <button type="submit" class="waves-effect waves-light btn">Criar chamado</button>
                                                        </form>
                                                    @endif
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>

                            @endif

                        </div>
                    @endforeach
                </div>
            @endforeach


        </div>
    </div>

</div>
@endsection

@section('styles')
    <style>
        .sector
        {
            min-height: 400px;
            color: #898989;
            padding: 10px;
        }
    </style>
@endsection
@section('scripts')
    <script>
        $(document).ready(function(){
            $('ul.tabs').tabs({
                responsiveThreshold: true
            });
        });
    </script>
@endsection