<?php 
if(!isset($_COOKIE['email'])){
    header('location:userlogin.php?a=1');
  }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Diabetes Prediction System</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style type="text/css">

    	body{
    		background-color: #0091ea;
    	}
	    #home-sec { 
			background: url(../img/1.jpg) no-repeat 50% 50%;
			background-attachment: fixed;
			background-size: cover;
			width: 100%;
			display: block;
			height: auto;
			padding-top:190px;
			min-height:650px;
			color:#fff;
		}

		.head-main {
		    font-size:50px ;
		    font-weight:900;
		    border:5px outset  #fff;
		    padding:15px;
		    text-transform:uppercase;
		    color:#455a64;
    
		}

		#home-block{
            position:absolute;
            top:40%;
            left:2%;
		}

		section {
		    padding-top:2px;
		    margin-top:2px;
		}

       #footer {
            position: fixed;
            width: 100%;
            bottom: 0;
            height: 60px;
            background-color:#ff5252;
            color: #000;
            padding: 20px 50px 20px 50px;
            text-align: right;
            border-top: 1px solid #d6d6d6;
        }
    </style>
</head>
<body>
	<!-----------NAV SECTION-------->
	<nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
         </div>

          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="userIndex.php">Home</a></li>
                <li><a href="viewResult.php">View Result</a></li>
                <li><a href="userlogout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
            <span class="navbar-text" style="color:#fff;font-size: 16px;">Welcome to User Panel</span>
            <span class="navbar-text" style="color:#fff;font-size: 14px;">Logged in as :
              <?php 
                if(isset($_COOKIE['email'])){
                  echo $_COOKIE['email'];
                  }
                ?> </span>
          </div><!--/.nav-collapse -->  
        </div><!--/.container-fluid -->
      </nav>
	<!-----------END NAV SECTION-------->

    <!--HOME SECTION-->
    <div id="home-sec">
        <div class="container"  >
            <div class="row text-center">
                <div  class="col-md-12">
                    <span class="head-main">Diabetes Prediction System</span> 
                </div>
            </div>
        </div>
    </div>
    <!-- END Home SECTION -->

     <!--FOOTER SECTION -->
    <div id="footer">
        2019 www.yourdomain.com|All Right Reserved  
         
    </div>
    <!-- END FOOTER SECTION -->

</body>
</html>