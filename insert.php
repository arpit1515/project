<?php  
 $connect = mysqli_connect("localhost", "root", "", "test_db");  
 $sql = "INSERT INTO tbl_sample(NAME, TASK) VALUES('".$_POST["NAME"]."', '".$_POST["TASK"]."')";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Inserted';  
 }  
 ?> 