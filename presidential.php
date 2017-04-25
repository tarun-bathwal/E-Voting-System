<?php

  ob_start();
  session_start();
  $bjp="";
  $cong="";
  $aap="";
  $sp="";
  $ind1="";
  $ind2="";
  
  if(isset($_SESSION['aadhar'])){
      $db=mysqli_connect("localhost","root","","voting");
        $query="SELECT * FROM candidate WHERE cons_no LIKE  ( SELECT cons_no FROM aadhar WHERE aadhar_no LIKE '".$_SESSION['aadhar']."') ";
        $result=mysqli_query($db,$query);
        if($result)
        {
          $arr=mysqli_fetch_assoc($result);
          $bjp=$arr['bjp'];
          $cong=$arr['congress'];
          $aap=$arr['aap'];
          $sp=$arr['sp'];
          $ind1=$arr['indep_1'];
          $ind2=$arr['indep_2'];
          
        }
        else{
          echo "wrong";
          header("Refresh:10 ; url=login.php");
        }
      }
  else{
    echo $_SESSION['aadhar'];
    header("Refresh:10 ; url=login.php");
  }


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Page: Vote.Gov</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="bootstrap.css" rel="stylesheet">
    <script>
function fxn() {
    alert("successfully voted");
    $.ajax()
}
</script>
    <style type="text/css">
      /* Override some defaults */
      html, body {
        background-color: #eee;
      }
      body {
        padding-top: 40px; /* 40px to make the container go all the way to the bottom of the topbar */
      }
      .container > footer p {
        text-align: center; /* center align it with the container */
      }
      .container {
        width: 820px; /* downsize our container to make the content feel a bit tighter and more cohesive. NOTE: this removes two full columns from the grid, meaning you only go to 14 columns and not 16. */
      }

      /* The white background content wrapper */
      .content {
        background-color: #fff;
        padding: 20px;
        margin: 0 -20px; /* negative indent the amount of the padding to maintain the grid system */
        -webkit-border-radius: 0 0 6px 6px;
           -moz-border-radius: 0 0 6px 6px;
                border-radius: 0 0 6px 6px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }

      /* Page header tweaks */
      .page-header {
        background-color: #f5f5f5;
        padding: 20px 20px 10px;
        margin: -20px -20px 20px;
      }

      /* Styles you shouldn't keep as they are for displaying this base example only */
      .content .span10,
      .content .span4 {
        min-height: 500px;
      }
      /* Give a quick and non-cross-browser friendly divider */
      .content .span4 {
        margin-left: 0;
        padding-left: 19px;
        border-left: 1px solid #eee;
      }

      .topbar .btn {
        border: 0;
      }

    </style>
  </head>

  <body>

    <div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand" href="#">EVoting.Gov</a>
          <div class="pull-right"><a class="btn primary login" href="logout.php" name="logout" title="Click to Login">Logout</a></div>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="content">
        <div class="page-header">
          <h1>Political Parties</h1>
        </div>
        <div class="row">
          <div class="span14">
						<h3>Please choose one of the following options:</h3>
						<form action="form_submit.php" method="post" accept-charset="utf-8">
							<div id="ap">
              </div>
							<div class="actions">
								
								<input class="btn primary" type="submit" name="submit" value="Continue &rarr;">
							</div>
						</form>
						
          </div>
        </div>
      </div>

      <footer>
        <p>&copy; Indian General Elections</p>
      </footer>

    </div> <!-- /container -->
  <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script>
      var b="<?php echo $bjp; ?>";
      var c="<?php echo $cong; ?>";
      var a="<?php echo $aap; ?>";
      var s="<?php echo $sp; ?>";
      var i1="<?php echo $ind1; ?>";
      var i2="<?php echo $ind2; ?>";
      
      if(b){
        $('#ap').append("<div class=\"clearfix\"><div class=\"input \"><input type=\"radio\" value=\"bjp\" name=\"pres\" id=\"pres1\">"+b+" (BJP)</div></div>");
      }
      

      if(c){
        $('#ap').append("<div class=\"clearfix\"><div class=\"input \"><input type=\"radio\"  value=\"cong\" name=\"pres\" id=\"pres2\">"+c+" (CONG)</div></div>");
      }

      if(a){
       $('#ap').append("<div class=\"clearfix\"><div class=\"input \"><input type=\"radio\" value=\"aap\" name=\"pres\"  value=\"aap\"  id=\"pres3\">"+a+" (AAP)</div></div>");
      }

      if(s){
        $('#ap').append("<div class=\"clearfix\"><div class=\"input \"><input type=\"radio\" name=\"pres\" value=\"sp\" value=\"sp\" id=\"pres4\">"+s+" (SP)</div></div>");
      }

      if(i1){
        $('#ap').append("<div class=\"clearfix\"><div class=\"input \"><input type=\"radio\" name=\"pres\" value=\"indep1\" value=\"indep1\" id=\"pres5\">"+i1+" (Independent candidate)</div></div>");
      }

      if(i2){
      $('#ap').append("<div class=\"clearfix\"><div class=\"input \"><input type=\"radio\" name=\"pres\" value=\"indep2\" value=\"indep2\" id=\"pres6\">"+i2+" (Independent candidate)</div></div>");
      }

      $('#ap').append("<div class=\"clearfix\"><div class=\"input \"><input type=\"radio\" name=\"pres\" value=\"nota\" value=\"nota\" id=\"pres7\">None of the Above</div></div>");
  </script>

  </body>
</html>
