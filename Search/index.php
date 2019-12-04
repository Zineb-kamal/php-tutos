<!DOCTYPE html>
<html>
<head>
	<title>Suggestion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h3 style="color: blue">Search Users</h3>
		<form>
		Search user:<input type="text" class="form-control" onkeyup="showSuggestion(this.value)" ></input>
		<p>Suggestion:<span  id="output" style="font-weight:bold"></span></p>
	</form>
	</div>
<script type="text/javascript">
	function showSuggestion(str){
		var output=document.getElementById("output");
		if(str==""){
           output.innerHTML="";}
        else{
     	//Ajax
     	var xmlhttp=new XMLHttpRequest();
     	xmlhttp.onreadystatechange=function(){
     		if(this.readyState==4 && this.status==200){
     			output.innerHTML=this.responseText;
     		}
     	}
     	xmlhttp.open("GET","suggest.php?q="+str,true);
     	xmlhttp.send();
     }

	}
	
</script>
</body>
</html>