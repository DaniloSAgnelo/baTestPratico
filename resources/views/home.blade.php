@extends('layouts.main')
@section('title','BA Teste Pratico - Home')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">

            <table id="listar-usuarios" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col" style="width:20%">#</th>
                        <th scope="col" style="width:60%">Login</th>
                        <th scope="col" style="width:20%">Visualizar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usersApi as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->login }}</td>
                        <td><a href="{{ url('/userview/'. $item->login) }}"><ion-icon name="eye-outline" class="blue"></ion-icon> Visualizar</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
    </div>
    

@endsection
