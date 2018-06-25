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

<div id="outputData" onclick="outputData()">show data from database</div>

<script>
function insertData(data){
 console.log(data);

 var xhttp = new XMLHttpRequest();
 xhttp.onreadystatechange=function(){ $('#message').text(data+" inserted");};

 xhttp.open("GET", "insertdata.php?data="+data, true);
 xhttp.send();
 

}

function outputData(){
 console.log("outputData running");
 
 function showData(data){
  $('#outputData').text(data);
 }

 $.post("outputdata.php","",function(x){showData(x);});
 
}


</script>


</body>
</html>

