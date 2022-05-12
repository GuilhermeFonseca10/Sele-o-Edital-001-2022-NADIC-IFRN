@extends('layouts.main')

@section('title', 'Criar Eleição')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">

<h1 style="margin-top: 10px">Crie uma eleição</h1>
<form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
    <br>
    <div class="form-group">
        <label for="image">Imagem da eleição:</label>
    <input type="file" id="image" name="image" class="from-control-file">
    </div>
<br>
<div class="form-group">
    <label for="title">Eleição:</label>
<input type="text" class="form-control" id="title" name="title" placeholder="Eleição para">
</div>
<br>
<div class="form-group">
    <label for="title">Candidato 1:</label>
<input type="text" class="form-control" id="candidato" name="candidato" placeholder="Nome do candidato">
</div>
<br>
<div class="form-group">
    <label for="cpf">CPF:</label>
<input type="text" class="form-control" id="cpf" name="cpf" placeholder="Apenas números">
</div>
<br>
<div class="form-group">
    <label for="numero">Número do candidato:</label>
<input type="text" class="form-control" id="numero" name="numero" placeholder="Apenas números">
</div>
<br>
<div class="form-group">
    <label for="candidato2">Candidato 2:</label>
<input type="text" class="form-control" id="candidato2" name="candidato2" placeholder="Nome do segundo candidato">
</div>
<br>
<div class="form-group">
    <label for="cpf2">CPF do segundo candidato:</label>
<input type="text" class="form-control" id="cpf2" name="cpf2" placeholder="Apenas números">
</div>
<br>
<div class="form-group">
    <label for="numero2">Número do candidato:</label>
<input type="text" class="form-control" id="numero2" name="numero2" placeholder="Apenas números">
</div>
<br>
<div class="form-group">
    <label for="date">Data da eleição:</label>
<input type="date" class="form-control" id="date" name="date">
</div>
<br>
<div class="form-group">
    <label for="title">Cidade:</label>
<input type="text" class="form-control" id="city" name="city" placeholder="Cidade da eleição">
</div>
<br>
<div class="form-group">
    <label for="title">Local:</label>
<input type="text" class="form-control" id="local" name="local" placeholder="Local da eleição">
</div>
<br>


<div class="form-group">
    <label for="title">Descrição:</label>
<textarea name="description" id="description"  class="form-control" placeholder="Fale um pouco sobre a eleição."></textarea>
</div>
<br>


<input type="submit" class="btn btn-primary" value="Criar Eleição" style="margin-top:15px; margin-bottom:20px;" >
</form>
</div>
@endsection
