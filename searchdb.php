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

 function searchData($connect,$data){
  $sql="select * from media where data like '$data%' ";
  $result=mysqli_query($connect,$sql);
  $i=0;
  if(mysqli_num_rows($result)>0)
   {
    while($row=mysqli_fetch_assoc($result))
     {echo " { \"index\": \"$i\", ";
      $datum=$row['data']; 
      echo "   \"data\": \"$datum\" },";
      $i+=1;
     }

   }
  else
   {echo "{ \"index\": \"0\", \"data\": \"\" },";}
  echo "{ \"index\": \"-1\", \"data\": \"\" }";
 }
 
 $data=$_GET['look'];
 echo "["; 
 searchData($connect,$data);
 echo "]";
?>

