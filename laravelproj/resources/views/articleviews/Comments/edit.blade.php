@extends('app')

@section('content')
<form name="formcomment" action="/article/{{$comment->article_id}}/comment/{{$comment->id}}" method="POST">
<h1>Edit </h1>
<input type="text" name="_method" value="PUT">
Edit:<input type="text" name="message" value="{{$comment->message}}">{{-- 
Content:<input type="text" name="content" value="{{$article->content}}"> --}}
<input type= "submit" value="submit">
<input type="text" name="_token" value="{{csrf_token()}}">

</form>
@stop

{{-- @section('footer')
<script type="text/javascript"> alert('alert of js'); </script>
@stop --}}