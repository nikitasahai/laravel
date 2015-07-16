@extends ('app')
@section('content')
<h1> New User? </h1>
<h3> Click <a id= "show" href="javascript:">here</a> to SIGN UP </h3>
<form id="newuser" name="form1" style="display:none;" onsubmit="return usercreation()">
	<input type="text" name="_token" value="{{csrf_token()}}">
firstname: <input name="firstname" type="text">
<br>
lastname: <input name="lastname" type="text">
<br>
email address: <input name="email"type="text">
<br>
username: <input name="username" type="text">
<br>
password: <input name="password" type = "password">
<br>
<input type="submit">
	</form>

<h2> LOG IN </h2>

<form id="user" name="form" onsubmit="return loggedin()">
	<input type="text" name="_token" value="{{csrf_token()}}">
username: <input name="username" type="text">
<br/>
password: <input name="password" type="password">
<br/>
<input type="submit">

</form>


<script>
$(document).ready(function(){
$("#show").click(function(){
	console.log("where?");
	x = $(document.getElementById('newuser'));
	x.show();

})
})

function usercreation(){
	console.log("reached");
	var data = {};
	data['_token'] = $('[name=_token]').val();
	data['firstname'] = $('[name=firstname]').val();
	data['lastname']= $('[name=lastname]').val();
	data['email']= $('[name=email]').val();
	data['username']= $('[name=username]').val();
	data['password']= $('[name=password]').val();
		$.post("/user", data, function(){

		alert("hi");

	})
return false;
}


function loggedin(){
	console.log("logged in");
	var data={};
	data['_token']= $('[name=_token]').val();
	data['username']= $('[name=username]').val();
	data['password']= $('[name=password]').val();

	$.post("/user/login", data, function(){

		alert("heylo");

	})
return false;
}
	

</script>

@stop
