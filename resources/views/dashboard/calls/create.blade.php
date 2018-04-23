@extends('layouts.simple')

@section('content')
<div class="container">
    <div class="row" style="margin-top: 50px">
        <div class="col m12">
            <div class="card">
                <div class="card-content">
                    <div class="card-title"> {{ $service->name }} </div>
                    
                    <div class="info-service">
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
                    </div>

                    <form method="post" action="{{route('dashboard.calls.store')}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="service_id" value="{{ $service->id }}">
                        
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="description" name="description" style="height: 100px" class="materialize-textarea"></textarea>
                                <label for="description">Descrição do problema</label>
                            </div>
                        </div>
                        
                          
                        {{-- <div class="row">
                            <div class="file-field input-field col s12">
                                <div class="btn">
                                    <span><i class="material-icons left">attach_file</i> Anexo 1</span>
                                    <input type="file" name="annex1">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="file-field input-field col s12">
                                <div class="btn">
                                    <span><i class="material-icons left">attach_file</i> Anexo 2</span>
                                    <input type="file" name="annex2">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="file-field input-field col s12">
                                <div class="btn">
                                    <span><i class="material-icons left">attach_file</i> Anexo 3</span>
                                    <input type="file" name="annex3">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>
                        </div> --}}
                        

                        <div class="row">
                            <div class="col s12">
                                <button class="waves-effect waves-light btn" type="submit">Enviar</button>
                           </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection