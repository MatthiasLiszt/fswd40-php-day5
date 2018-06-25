<html>
<body>

<?php

define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'mytrash');

function connectDB()
  {$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);


     if ( !$conn ) {
      die("Connection failed : " . mysqli_error());
     }
    return $conn; 
   }  

 $connect=connectDB();

 function insertData($connect,$data){
  $sql="insert into media (data) values ('$data')";
  $result=mysqli_query($connect,$sql);
  if(!$result)
   {echo "error inserting in table or database";}
 }
 
 $data=$_GET['data'];
 
 insertData($connect,$data);
?>
</body>
</html>

