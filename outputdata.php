
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

 function outputData($connect){
  $sql="select * from media";
  $result=mysqli_query($connect,$sql);
  if(mysqli_num_rows($result)>0)
   {
    while($row=mysqli_fetch_assoc($result))
     {echo $row['data']."\n";}

   }
  else
   {echo "nothing inside";}
 }
 
 
 outputData($connect);
?>

