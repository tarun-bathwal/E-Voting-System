<?php

	include"dbconn.php";
	$n=$_GET['name'];
	$f=$_GET['fathername'];
	$d=$_GET['dob'];
	$a=$_GET['aadhar'];
	$v=$_GET['voter'];
	
    $query = " SELECT aadhar_no from aadhar WHERE aadhar_name LIKE '".$n."' and aadhar_father LIKE '".$f."' and aadhar_dob = '".$d."' and aadhar_no = '".$a."' and voter_id LIKE '".$v."'";
    
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){
      	$q = "INSERT INTO registered (aadhar_no) VALUES (".$a.")";
      	$res = mysqli_query($conn,$q);
      	


      			if($res)
      			{
      				echo "done";
      			}
      			else{
      				echo "fail";
      			}
    }
    else
    {
    	echo "nouser";
    }
                        

?>