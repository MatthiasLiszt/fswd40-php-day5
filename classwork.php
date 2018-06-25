<html>
<head>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<title>chaotic data insert</title>
</head>

<body>

<h1>chaotic data insertion</h1>

<form onsubmit="return false">
<input id="mediaTitle" placeholder="media title"/>
<button onclick="insertData($('#mediaTitle').val())">submit</button>

</form>

<div id="message"></div>

<script>
function insertData(data){
 console.log(data);

 var xhttp = new XMLHttpRequest();
 xhttp.onreadystatechange=function(){ $('#message').text(data+" inserted");};

 xhttp.open("GET", "insertdata.php?data="+data, true);
 xhttp.send();
 

}

</script>


</body>
</html>

