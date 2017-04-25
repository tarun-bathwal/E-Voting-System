<?php
   ob_start();
   session_start();
   
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Register : EVoting.gov</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
<script>
function fxn() {
    alert("Your username is Rishabh1458 Password is ADR478@");
}
</script>

    <link href="bootstrap.css" rel="stylesheet">
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
          <h1>My info</h1>
        </div>
        <div class="row">
          <div class="span14">
            <div>
              <form action="presidential.php" method="post" accept-charset="utf-8">
                
                <div class="clearfix">
                  <label for="sent1">Name : </label>
                  <div class="input" >
                    <input type="text" name="name" id="name" readonly>
                  </div>
                </div>
                <div class="clearfix">
                  <label for="sent2">Father's Name : </label>
                  <div class="input">
                    <input type="text" name="fname" id="fname" readonly>
                  </div>
                </div>
                <div class="clearfix">
                  <label for="sent1">DOB :  </label>
                  <div class="input">
                    <input type="text" id="dob" name="dob" readonly>
                  </div>
                </div>
                <div class="clearfix">
                  <label for="sent1">Mobile No. :  </label>
                  <div class="input">
                    <input type="text" name="mobile" id="mobile" readonly>
                    <input class="btn" type="reset" value="Edit" onclick="window.location='https://ssup.uidai.gov.in/web/guest/update';">
                  </div>

                

                </div>

                <div class="clearfix">
                  <label for="sent1"> Aadhar Card : </label>
                  <div class="input">
                    <input type="text" name="aadhar"  id="aadhar"  readonly>
                  </div>
                </div>
                <div class="clearfix">
                  <label for="sent1"> Voter ID : </label>
                  <div class="input">
                    <input type="text" name="voter"  id="voter"  readonly>
                  </div>
                </div>
                <div class="clearfix">
                  <label for="sent1"> Sex: </label>
                  <div class="input">
                    <input type="text" name="sex"  id="sex"  readonly>
                  </div>
                </div>
                <div class="clearfix">
                  <label for="sent1"> Constituency: </label>
                  <div class="input">
                    <input type="text" name="cons"  id="cons"  readonly>
                  </div>
                </div>

                <div class="clearfix">
                  <label for="sent1">Email Id : </label>
                  <div class="input">
                    <input type="email" name="email" id="email" readonly>
                    <input class="btn" type="reset" value="Edit" onclick="window.location='https://ssup.uidai.gov.in/web/guest/update';">
                  </div>

                  
                </div>




                <div class="actions">
                  
                  <input class="btn primary" id="submit" type="submit" value="Go to voting! &rarr;"></a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <footer>
        <p>&copy; Indian General Elections</p>
      </footer>

    </div> <!-- /container -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script>
      var n="<?php echo $_SESSION['name']; ?>";
      var f="<?php echo $_SESSION['fname']; ?>";
      var d="<?php echo $_SESSION['dob']; ?>";
      var m="<?php echo $_SESSION['mob']; ?>";
      var a="<?php echo $_SESSION['aadhar']; ?>";
      var e="<?php echo $_SESSION['email']; ?>";
      var v="<?php echo $_SESSION['voted']; ?>";
      var s="<?php echo $_SESSION['sex']; ?>";
      var c="<?php echo $_SESSION['cons']; ?>";
      var vot="<?php echo $_SESSION['voter']; ?>";
      if(v){
        $('#submit').prop("disabled", true);
      }
      $('#name').val(n);
      $('#fname').val(f);
      $('#dob').val(d);
      $('#mobile').val(m);
      $('#aadhar').val(a);
      $('#email').val(e);
      $('#cons').val(c);
      $('#sex').val(s);
      $('#voter').val(vot);


    </script>

  </body>
</html>
