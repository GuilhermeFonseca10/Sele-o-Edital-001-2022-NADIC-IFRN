@extends('layouts.main')

@section('title', $event->title)

@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
       <img src="/imag/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->title }}">
        </div>

        <div id="info-container" class="col-md-6">
      <h1>{{ $event->title }}</h1>
      <p class="event-city"><ion-icon name="location-outline"></ion-icon>{{ $event->city }}</p>
 <p class="events-participants"><ion-icon name="star-outline"></ion-icon> {{ $eventOwner['name']}}</p>

<a href="/events/votar" class="btn btn-primary" id="event-submit">Votar</a>
<a href="/events/resultado" class="btn btn-primary" id="event-submit">Resultado</a>
</ul>
        </div>
        <div class="col-md-12" id="description-container">
            <br>
<h3>Sobre a eleição:</h3>
<p class="event-description">{{$event->description}}</p>

<h3>Candidato 1</h3>
<p class="event-candidato"><b>Nome:</b> {{$event->candidato}}</p>
<p class="event-numero"><b>Número do candidato:</b> {{$event->numero}}</p>

<h3>Candidato 2</h3>
<p class="event-candidato2"><b>Nome:</b> {{$event->candidato2}}</p>
<p class="event-numero2"><b>Número do segundo candidato:</b> {{$event->numero2}}</p>

        </div>
    </div>
</div>

@endsection
