
{{--lo que esta dentro de llaves es lo que hace blade pero igual se puede hacer con la interface de php   --}}

@include('contacto.cabecera', array('nombre' => $nombre))

<h1>Pagna de contacto {{$nombre}}  {{-- isset($edad) && !is_null($edad) ? $edad : 'No existe la edad' --}} años </h1>
@if(is_null($edad))
	No existe la edad
@else
	Si exite la edad : {{$edad}}
@endif

<p>
	{{--tambien como dije se puede hacer de la forma clasica de php--}}

		<?php $numero = 4; ?>
	Tabla del {{$numero}}
	}
</p>
@for($i = 0; $i<11; $i++)
	{{$numero.' x '.$i.'='.($i*$numero) }}</br>
@endfor

<?php $e = 1; ?>

@while($e<=7)
	<p>{{'Hola mundo'.$e}}</p>
	<?php $e++; ?>
@endwhile

<h1>listado de frutas</h1>
@foreach($frutas as $fruta)
	<p>{{$fruta}}</p>
@endforeach

