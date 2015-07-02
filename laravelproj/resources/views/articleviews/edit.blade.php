@extends('app')

@section('content')
<form name="form2" action="/article/{{$article->id}}" method="POST">
<h1>Form </h1>
<input type="text" name="_method" value="PUT">
Enter name:<input type="text" name="name" value="{{$article->name}}">
Content:<input type="text" name="content" value="{{$article->content}}">
<input type= "submit" value="submit">
<input type="text" name="_token" value="{{csrf_token()}}">

</form>
@stop

{{-- @section('footer')
<script type="text/javascript"> alert('alert of js'); </script>
@stop --}}