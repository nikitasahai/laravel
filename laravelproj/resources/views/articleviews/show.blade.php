@extends('app')

@section('content')
<h1>ShowTime!!</h1>
 name: {{$article->name}}
 <br>
Content: {{$article->content}}
<br>

<form name="cmt" method="POST" action="/article/{{ $article->id }}/comment"> {{-- /comment is the route as specified in routes.php. --}}
	<h2> Comment Section</h2>
	<input type = "text" name="message" value="Enter comment here">
	<input type="submit" name="submit" value="submit">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
</form>	

All COMMENTS:
@foreach ($allcomments as $comment)
<a href="/article/{{ $article->id }}/comment/{{ $comment->id }}">
{{$comment->message}}
</a>
<br>

@endforeach
@stop
