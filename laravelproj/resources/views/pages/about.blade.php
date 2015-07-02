@extends('app')

@section('content')
<p>

abouttt me:
All I like to doooooo:

<ul>
	<li>
		{{$first}}
	</li>
@foreach ($people as $person)
	<li>
		{{$person}}
	</li>
	
@endforeach
</ul>
</p>

@stop