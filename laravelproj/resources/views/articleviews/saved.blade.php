@extends('app')

@section('content')

<h1>contact me again @ {{$newArticle->name}}</h1>
{{$newArticle->content}}
@stop

@section('footer')
<script type="text/javascript"> alert('alert of js'); </script>
@stop