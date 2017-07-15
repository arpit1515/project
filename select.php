<?php  
 $connect = mysqli_connect("localhost", "root", "", "test_db");  
 $output = '';  
 $sql = "SELECT * FROM tbl_sample ORDER BY id";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Id</th>  
                     <th width="40%">NAME</th>  
                     <th width="40%">TASK</th>  
                     <th width="10%">DELETE</th>  
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="NAME" data-id1="'.$row["id"].'" contenteditable>'.$row["NAME"].'</td>  
                     <td class="TASK" data-id2="'.$row["id"].'" contenteditable>'.$row["TASK"].'</td>  
                     <td><button type="button" name="delete_btn" data-id3="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="NAME" contenteditable></td>  
                <td id="TASK" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="3"><center>No Data Found</center></td>
                          <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>						  
                          </tr>
					      <tr>
						  <td colspan="2" id="NAME" contenteditable></td>  
                          <td colspan="2" id="TASK" contenteditable></td>  
					      </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>