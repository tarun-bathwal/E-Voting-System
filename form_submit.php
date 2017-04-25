<?php
 ob_start();
  session_start();

if (isset($_POST['submit'])) {
	if(isset($_POST['pres']))
	{
		  //  Displaying Selected Value
		 $db=mysqli_connect("localhost","root","","voting");
        $query="UPDATE login SET party_voted = '".$_POST['pres']."' WHERE aadhar_no LIKE ".$_SESSION['aadhar'];
        $result=mysqli_query($db,$query);
        if($result)
        {
        	$k;
        	if($_POST['pres']==='bjp'){
        		$k="bjp";
        		$p="bjp_vote";
        	}
        	if($_POST['pres']==='aap'){
        		$k="aap";
        		$p="aap_vote";	
        	}
        	if($_POST['pres']==='sp'){
        		$k="sp";
        		$p="sp_vote";
        	}
        	if($_POST['pres']==='cong'){
        		$k="congress";
        		$p="congress_vote";
        	}
        	if($_POST['pres']==='indep1'){
        		$k="indep_1_vote";
        	}
        	if($_POST['pres']==='indep2'){
        		$k="indep_2_vote";
        	}
        	if($_POST['pres']==='nota'){
        		$k="nota";
        		$p="nota";
        	}
        	$q="UPDATE candidate SET ".$p." = ".$p."+1 where cons_no LIKE ( select cons_no from login where aadhar_no LIKE ".$_SESSION['aadhar'].")";
        	$res=mysqli_query($db,$q);
        	if($res){
        		echo "successfully voted to : ".$_POST['pres'];
          header("Refresh:2;  url=logout.php");
        	}
          
	
			else{
			echo "voting not successful. try again";
			header("Refresh:2 ;  url=login.php");
		}
	}
}
}
?>