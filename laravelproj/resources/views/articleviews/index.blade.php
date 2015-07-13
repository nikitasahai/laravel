<html>
<head>
	<title>
		There there.
	</title>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"> </script>
</head>
<body>
	<h1> Index : </h1>
	<div> 
		The following displays a list of the articles.
		Click on abstract to see the content here itself or click on the article to see the contents on a separate page.
	</div>
	<div>
		<ul>
			<?php $lala=1 ?>
			@foreach($articles as $article)
			

			<li>
				<?php $a_id=$article->id; ?>
			<a href="/article/{{$article->id}}"> {{$article->name}}</a> 
			<a class="redirect" href="javascript:;" data-list="{{$lala}}" onClick="console.log('clicked')"> abstract </a>
			<label id="{{$lala}}" style="display:none;"> {{$article->content}}</label>
			<br>
			<br>
			<?php $lala++; ?>
			</li>

			@endforeach
		</ul>
	</div>
	<script>
   $(document).ready(function(){
    $(".redirect").click(function(){
    	console.log("here");
    	var parent=$(this).parent();
    	console.log(parent);
    	
    	// console.log(abc);
        $.get("/article", function(){
        	


        	var please = parent.children("label").attr("id");
            document.getElementById(please).style.display="block";
            
        	//$("#1").style.display="block";
        });
    });
});
  </script>
</body>
</html>