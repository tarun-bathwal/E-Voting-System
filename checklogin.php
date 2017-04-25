<?php
   ob_start();
   session_start();
   $aadhar='';
   $name='';
    $fname='';
    $dob='';
    $mob='';
    $email='';
   if(isset($_POST['username']) && isset($_POST['password']))
   {
      $u=$_POST['username'];
      $p=$_POST['password'];
      
      if( !empty($u) && !empty($p))
      {
        $db=mysqli_connect("localhost","root","","voting");
        $query="SELECT * FROM login WHERE login_username like '".$u."'";
        $result=mysqli_query($db,$query);
        if($result)
        {
          $arr=mysqli_fetch_assoc($result);
          if(isset($arr['login_username']))
          {
            if($p==$arr['login_password'])
            {
              $aadhar=$arr['aadhar_no'];
              $_SESSION['aadhar']=$aadhar;
              $_SESSION['voted']=$arr['party_voted'];
              $q="SELECT * FROM aadhar WHERE aadhar_no like '".$aadhar."'";
              $res=mysqli_query($db,$q);
              if($res){
                $newarr=mysqli_fetch_assoc($res);
                $_SESSION['name']=$newarr['aadhar_name'];
                $_SESSION['fname']=$newarr['aadhar_father'];
                $_SESSION['dob']=$newarr['aadhar_dob'];
                $_SESSION['mob']=$newarr['aadhar_mob'];
                $_SESSION['email']=$newarr['aadhar_email'];
                $_SESSION['sex']=$newarr['aadhar_sex'];
                $_SESSION['cons']=$newarr['cons_no'];
                $_SESSION['voter']=$newarr['voter_id'];
                header("Refresh:0; url=userinfo.php");

              }
              else{
                echo "try again";
                header("Refresh:2; url=login.php");
              }
            }
            else
            {
              echo "wrong password";
              header("Refresh:2 ; url=login.php");
            }
          }
          else{
            echo "wrong username";
            header("Refresh:2 ; url=login.php");
          }
        }
        else{
        echo "try again";
        header("Refresh:2 ; url=login.php");}
      }
      else{
        header("Refresh:0 ; url=login.php");
      }
    }
    else{
      header("Refresh:0; url=login.php");
    }
?>