<h1>
@if(!isset($note))
	Crear una Nota
@else
	Actualizar la nota
@endif

</h1>
<form action="{{ !isset($note) ? url('/notas/note') : url('/notas/update-note/'.$note->id) }}" method="post">
	{!! csrf_field()!!} 
	<input type="text" name="title" placeholder="Titulo de la nota" value="{{ isset($note) ? $note->title : ''}}"><br/>
	<textarea name="descripcion" placeholder="descripcion de la nota">{{ isset($note) ? $note->descripcion : ''}}</textarea> <br/>
	<input type="submit" name="Guardar">


</form>
<a href="{{url('/notas')}}">Volver al Listado</a>

