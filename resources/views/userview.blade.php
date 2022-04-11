@extends('layouts.main')
@section('title','BA Teste Pratico - Visualizar')

@section('content')   
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row col-lg1" style="padding: 20px 0;vertical-align: middle;">
                <a href="{{ url('/home') }}"><ion-icon name="arrow-back-sharp"></ion-icon> Voltar</a>
            </div>
            <div class="row">
                <div class="col-sm-4 justify-content-center">
                    <img src="{{$avatar_url}}" alt="Foto" width="200px" class="col-sm-12">
                </div>
                <div class="col-sm-8" style="font-size: 20px;">
                    <div class="row">
                        <span class="col-sm-6"><b>#</b> {{$id}}</span>
                        <span class="col-sm-6"><b>Login:</b>  {{$login}}</span>
                    </div>
                    <div class="row">
                        <span class="col-sm-12"><b>Nome:</b> {{$name}}</span>
                    </div>
                    <div class="row">
                        <span class="col-sm-12"><b>Endereço de Email:</b> {{$email}}</span>
                    </div>
                    <div class="row">
                        <span class="col-sm-12"><b>Empresa:</b> {{$company}}</span> 
                    </div>
                    <div class="row">
                        <span class="col-sm-12"><b>Cidade:</b> {{$location}}</span> 
                    </div>
                    <div class="row">
                        <span class="col-sm-12"><b>Site:</b> {{$html_url}}</span> 
                    </div>
                    <div class="row">
                        <span class="col-sm-12"><b>Blog:</b> {{$blog}}</span> 
                    </div>
                    <div class="row">
                        <span class="col-sm-6"><b>Seguindo:</b> {{$following}}</span> 
                        <span class="col-sm-6"><b>Seguidores:</b> {{$followers}}</span>                         
                    </div>

                </div>
               
            </div>
        </div>
    </div>
@endsection
