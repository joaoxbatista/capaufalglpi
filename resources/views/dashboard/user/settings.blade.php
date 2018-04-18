@extends('layouts.simple')

@section('content')
<div class="container">
    <div class="row" style="margin-top: 50px">
        <div class="col m12">
       
            <h5>CONFIGURAÇÕES DO USUÁRIO</h5>
            
            <form method="post" action="{{route('dashboard.user.settings')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                <div class="row">
                    <div class="input-field col s3">
                        <input placeholder="Insira seu nome" id="first_name" name="first_name" type="text" value="{{ $user_settings->first_name }}" class="validate" required>
                        <label for="first_name">Nome</label>
                    </div>
                    <div class="input-field col s3">
                        <input placeholder="Insira seu sobrenome" id="first_name" name="last_name" type="text" value="{{ $user_settings->last_name }}" class="validate" required>
                        <label for="last_name">Sobrenome</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Insira seu email" id="first_name" name="email" type="email" value="{{ $user_settings->email }}"class="validate" required>
                        <label for="last_name">E-mail</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s4">
                        <input placeholder="Insira seu CPF" id="cpf" name="cpf" type="text" value="{{ $user_settings->cpf }}" class="validate" required>
                        <label for="cpf">CPF</label>
                    </div>
                    <div class="input-field col s4">
                        <input placeholder="Insira seu telefone principal" id="phone1" name="phone1" type="text" value="{{ $user_settings->phone1 }}"class="validate" required>
                        <label for="phone1">Telefone principal</label>
                    </div>

                    <div class="input-field col s4">
                        <input placeholder="Insira seu telefone alternativo" id="phone2" name="phone2" type="text" value="{{ $user_settings->phone2 }}" class="validate">
                        <label for="phone1">Telefone alternativo</label>
                    </div>
                </div>
                  
                <div class="row">
                    <div class="col s12">
                        <button class="waves-effect waves-light btn" type="submit">Atualizar</button>
                   </div>
                </div>
            </form>
            
        </div>
    </div>
</div>
@endsection