<h1>listado de frutas</h1>

<a href="{{ action('FrutasController@getNaranjas') }}">Ir a Naranjas</a>

<a href="{{ action('FrutasController@getPeras') }}">Ir a Peras</a>
<ul>
	@foreach($frutas as $fruta)
		<li>{{$fruta}}</li>
	@endforeach
</ul>

<h1>formulario en laravel</h1>
<form action="{{ url('/recibir/form')}}" method="POST">
	<p>
		<label for="nombre">Nombre de la fruta: </label>
		<input type="text" name="nombre"/>
	</p>
	
	<p>
		<label for="descripcion">Descripcion de la fruta</label>
		<textarea name="descripcion"></textarea>
	</p>
	
	<input type="submit" value="Enviar"/>
</form>