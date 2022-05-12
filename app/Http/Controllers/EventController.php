<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\User;

class EventController extends Controller
{
  public function index(){

$search = request('search');

if($search){
$events=Event::where([
    ['title',  'like', '%'.$search.'%']
])->get();

}else {

    $events = Event::all();
}


    return view('welcome',['events' => $events, 'search' => $search ]);

  }

  public function create(){
      return view('events.create');
  }


public function store(Request $request){

$event = new Event;

$event->title = $request->title;
$event->candidato = $request->candidato;
$event->cpf = $request->cpf;
$event->numero = $request->numero;
$event->candidato2 = $request->candidato2;
$event->cpf2 = $request->cpf2;
$event->numero2 = $request->numero2;
$event->date = $request->date;
$event->city = $request->city;
$event->local = $request->local;
$event->description = $request->description;

//Image upload
if($request->hasFile('image') && $request->file('image')->isValid()){
$requestImage = $request->image;
$extension = $requestImage->extension();
$imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

$requestImage->move(public_path('imag/events'), $imageName);

$event->image = $imageName;

}

$user = auth()->user();
$event->user_id = $user->id;

$event->save();
return redirect('/')->with('msg', 'Eleição criada com sucesso!');


}


public function show($id){

$event = Event::findOrFail($id);

$eventOwner = User::where('id', $event->user_id)->first()->toArray();

return view('/events.show', ['event' => $event, 'eventOwner'=>$eventOwner]);

}

public function votar(){
    return view('events.votar');
}

public function votacao(){
 return view('events.votacao' );

}
public function resultado(){
    return view('events.resultado');
}

public function dashboard(){
    $user = auth()->user();

    $events = $user->events;

    return view('events.dashboard', ['events'=> $events]);
}
public function destroy($id){
Event::findOrFail($id)->delete();
return redirect('/dashboard')->with('msg', 'Eleição excluída com sucesso');

}
}
