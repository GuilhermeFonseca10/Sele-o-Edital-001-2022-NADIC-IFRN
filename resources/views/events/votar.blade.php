@extends('layouts.main')

@section('title', 'votar')

@section('content')




<div id="event-create-container" class="col-md-6 offset-md-3">


    <h1 style="margin-top: 10px">Votação</h1>
    <form action="/events/votacao" method="POST" enctype="multipart/form-data">
        @csrf
        <br>
        <div class="form-group">
            <label for="eleitor">Nome do eleitor:</label>
        <input type="text" class="form-control" id="eleitor" name="eleitor" placeholder="Digite o nome completo">
        </div>
        <br>

        <div class="form-group">
            <label for="cpfeleitor">CPF do eleitor:</label>
        <input type="text" class="form-control" id="cpfeleitor" name="cpfeleitor" placeholder="Apenas números">
        </div>
        <br>
        <div class="form-group">
            <label for="numero_votado">Número do candidato:</label>
        <input type="text" class="form-control" id="numero_votado" name="numero_votado" placeholder="Apenas números">
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Concluido" style="margin-top:15px; margin-bottom:20px;" >


    </form>
</div>

@endsection
