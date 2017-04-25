
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
        </div>
      </div>
    </div>

    <div class="container">

      <div class="content">
        <div class="page-header">
          <h1>Register</h1>
        </div>
        <div class="row">
          <div class="span14">
						<div>
              <p id="ans"></p>
							<form method="post" accept-charset="utf-8">
								
								<div class="clearfix">
									<label for="sent1">Name : </label>
									<div class="input">
										<input type="text" name="sent1" id="sent1">
									</div>
								</div>
								<div class="clearfix">
									<label for="sent2">Father's Name : </label>
									<div class="input">
										<input type="text" name="sent2" id="sent2">
									</div>
								</div>
                <div class="clearfix">
                  <label for="sent1">DOB :  </label>
                  <div class="input">
                    <input type="text" placeholder="DD/MM/YYYY" name="sent3" id="sent3">
                  </div>
                </div>
                <div class="clearfix">
                  <label for="sent1">Aadhar :  </label>
                  <div class="input">
                    <input type="text" name="sent4" id="sent4">
                  </div>
                </div>
                <div class="clearfix">
                  <label for="sent1">Voter ID :  </label>
                  <div class="input">
                    <input type="text" name="sent5" id="sent5">
                  </div>
                </div>
               
								<div class="actions">
									<input class="btn" type="reset" value="Cancel" onclick="window.location='index.html';">
									<input class="btn primary"  id="submit"   value="Continue &rarr;">
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
    $(document).ready(function(){
      alert("Please create an account on https://digilocker.gov.in before registering since your username and password will be sent there.")
    })
$('#submit').click(function(){ 


     $.ajax({
            url : "checkreg.php",
            type:"GET",
            async:true,
            data : {name:$('#sent1').val() , fathername : $('#sent2').val() , dob : $('#sent3').val() , aadhar : $('#sent4').val() , voter : $('#sent5').val() },
            dataType: "html",
            success : function(data){
                     console.log(data);
                    if(data=="done"){
                      
                      alert("Successfully registered. Please collect your login credentials from https://digilocker.gov.in/");
                      window.setTimeout(function(){ window.location = "index.html"; });
                  }
                  else if (data=="fail"){
                   
                    alert("You have already registered.");
                    window.setTimeout(function(){ window.location = "register.php"; });
                  }
                  else{

                    alert("please enter correct details.");
                    window.setTimeout(function(){ window.location = "register.php"; });
                  }

            
        }
      });
});
</script>


  </body>
</html>
