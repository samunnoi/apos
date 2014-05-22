
<!-- Optional theme -->


<!-- Latest compiled and minified JavaScript -->

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>Sign In </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/signin.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/nav.css" />	
	<script src="<?php echo base_url(); ?>js/jquery1.11.0.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>js/slidePushMenus/classie.js"></script>
    <!-- Custom styles for this template -->
   

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script type='text/javascript'>
	var now_line =0; // ไว้ check ว่า ตอนนี้ lineไหน ใน group เปิดไว้อยู่
	var now_group_id =0; // ไว้ check ว่า ตอนนี้ lineไหน ใน group เปิดไว้อยู่
		function customer_dettail(){
		
		 $('#customer_detail').slideToggle('slow', function() {
				if ($(this).is(':visible')) {
						  $('#dettail_button').html("&nbsp;Hide&nbsp;");
				} else {
					$('#dettail_button').html("Detail");
				}        
			});       
		}
		</script>
  </head>
 <body>

    <div class="container" style='padding-top:10px;'>

      <form class="form-signin" role="form" method="post" action="<?=$_SERVER['PHP_SELF']."/welcome/login" ?>"> <!-- $_SERVER['PHP_SELF'] กลับมาที่ตัวมันเอง -->
			<div class='row'>
				<span class='col-xs-3' style='padding-left: 10px;  padding-right: 0px;'> <span style='font-size: 50;' class='glyphicon glyphicon-fire'></span>
				</span>
				<span class='col-xs-9' style='padding-left: 0px;  padding-right: 5px;'> <h2 class="form-signin-heading">Asian Pos</h2>
				</span>
			</div>
			<input type="text" name="user" class="form-control" placeholder="Username" required autofocus>
			<input type="password" name="pass" class="form-control" placeholder="Password" required >
			
			<label class="checkbox">
				<input type="checkbox" value="remember-me"> Remember me
			</label>
			
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		</form>
		
		
		<br/>
		
		<form class="form-signin" role="form" method="post" action="<?=$_SERVER['PHP_SELF']."/welcome/regis" ?>"> <!-- $_SERVER['PHP_SELF'] กลับมาที่ตัวมันเอง -->

		<a href="#" id="newacc" onclick='customer_dettail();'>New account</a>
		<div id='customer_detail' class="form-horizontal well" style='display:none;'>
					<fieldset>         
						<div class="control-group">            
						<div class="controls">
							<div class="input-group">
								<span class="input-group-addon"><span class='glyphicon glyphicon-user'></span></span>
								<input type="text" name="userid" class="form-control" placeholder="Username"/>
							</div>
						</div>
							<label class="control-label" for="input01"></label>
						<div class="controls">
							<div class="input-group">
								
									<input type="password" name="password" class="form-control" placeholder="Password" required="">
							</div>
						</div>						
						<div class="controls" >										
						
							<div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-pencil"></span>
								</span>
									<input type="text" name="name" class="form-control" placeholder="Name"/>
							</div>
						</div>
						
						<div class="controls" >										
						<label class="control-label" for="input01"></label>
							<div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-envelope"></span>
								</span>
									<input type="email" name="email" class="form-control" placeholder="Email"/>
							</div>
						</div>
						
						<label class="control-label" for="input01"></label>
						<button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
					  </div>
					  
					</fieldset>
					
					
				</div>
				
		</form>		
				
		<a href="#">Forgot password</a>
		
  

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  

</body>
</html>