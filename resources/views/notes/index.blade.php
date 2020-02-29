<h1>Aplicacion de notas </h1>

<a href="{{ url('/notas/save-note')}}">Crear notas</a>

@if(session('status'))
	<p style="background: red;">{{session('status')}}</p>
@endif

<h3>listado de notas</h3>

<ul>
@foreach($notes as $note)
	<li>{{$note->title}}</li>
	<li><a href="{{url('/notas/note/'.$note->id)}}">ver</a></li>
	<li><a href="{{url('/notas/delete-note/'.$note->id)}}">Borrar</a></li>
	<li><a href="{{url('/notas/update-note/'.$note->id)}}">Editar</a></li>
@endforeach
</ul>





 
