@extends('app')

@section('content')
<form name="form1" action="/article" method="POST">
<h1>Form </h1>
<input type="text" name="_token" value="{{csrf_token()}}">
Enter name:<input type="text" name="name">
Content:<input type="text" name="content" value="thisisit">
<input type= "submit" value="submit">
</form>
@stop

{{-- @section('footer')
<script type="text/javascript"> alert('alert of js'); </script>
@stop --}}