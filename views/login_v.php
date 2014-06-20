<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Signin Template for Bootstrap</title>

		<!-- Bootstrap core CSS -->
		<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>css/signin.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/nav.css" />	
		<script src="<?php echo base_url(); ?>js/jquery1.11.0.min.js"></script>
		<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>js/slidePushMenus/classie.js"></script>
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
		
			<form class="form-signin" role="form" method="post" action="<? echo site_url("welcome/login"); ?>"> <!-- $_SERVER['PHP_SELF'] กลับมาที่ตัวมันเอง -->
				<div class='row'>
					<span class='col-xs-3' style='padding-left: 10px;  padding-right: 0px;'> <span style='font-size: 50;' class='glyphicon glyphicon-fire'></span>
					</span>
					<span class='col-xs-9' style='padding-left: 0px;  padding-right: 5px;'> <h2 class="form-signin-heading">Asian Pos</h2>
					</span>
				</div>
				<input type="text" name="user" class="form-control" placeholder="<?=$this->lang->line('username');?>"  maxlength="15" required autofocus>
				<input type="password" name="pass" class="form-control" placeholder="<?=$this->lang->line('password');?>" maxlength="30" required>
				<label class="checkbox">
					<input type="checkbox" value="remember-me"> <?=$this->lang->line('remember');?>
				</label>
				<button class="btn btn-lg btn-primary btn-block" type="submit"><?=$this->lang->line('signin');?></button>
			</form>
			<br/>
			
			<form class="form-signin" role="form" method="post" action="<? echo site_url("welcome/regis"); ?>"> <!-- $_SERVER['PHP_SELF'] กลับมาที่ตัวมันเอง -->
				<a href="#" id="newacc" onclick='customer_dettail();'><?=$this->lang->line('newaccount');?></a>
				<div id='customer_detail' class="form-horizontal well" <?if(isset($act)){echo "style='display:block;'";}else{ echo "style='display:none;'";} ?>>
					<fieldset>         
						<div class="control-group">            
							<div class="controls">
								<? if(isset($userid_notnull)){echo "<font color=red>".$userid_notnull."</font>";} ?>
								<? if(isset($userid_aready)){echo "<font color=red>".$userid_aready."</font>";} ?><br>
								<div class="input-group">
									<span class="input-group-addon"><span class='glyphicon glyphicon-user'></span></span>
									<input type="text" name="userid" class="form-control" placeholder="<?=$this->lang->line('username');?>" maxlength="15" value="<? if(isset($userid_aready)){echo "";}else{if(isset($userid)){echo $userid;}}?>" required/>
								</div>
							</div>
							<label class="control-label" for="input01"></label>
							<div class="controls"><? if(isset($password_notnull)){echo "<font color=red>".$password_notnull."</font>";} ?><br>
								<div class="input-group">
									<input type="password" name="password" class="form-control" placeholder="<?=$this->lang->line('password');?>" maxlength="30" required>
								</div>
							</div>						
							<div class="controls" ><? if(isset($name_notnull)){echo "<font color=red>".$name_notnull."</font>";} ?><br>									
								<div class="input-group">
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-pencil"></span>
									</span>
									<input type="text" name="name" class="form-control" placeholder="<?=$this->lang->line('name');?>" maxlength="30" value="<? if(isset($name)){echo $name;}?>" required/>
								</div>
							</div>
							<div class="controls" >	
								<? if(isset($email_notnull)){echo "<font color=red>".$email_notnull."</font>";} ?>
								<? if(isset($email_aready)){echo "<font color=red>".$email_aready."</font>";} ?><br>									
								<label class="control-label" for="input01"></label>
								<div class="input-group">
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-envelope"></span>
									</span>
									<input type="email" name="email" class="form-control" placeholder="<?=$this->lang->line('email');?>" maxlength="30" value="<? if(isset($email_aready)){echo "";}else{if(isset($email)){echo $email;}}?>" required/>
								</div>
							</div>
							<label class="control-label" for="input01"></label>
							<button class="btn btn-lg btn-primary btn-block" type="submit"><?=$this->lang->line('signup');?></button>
						</div>
					</fieldset>
				</div>
					
			</form>		
			<div class="form-signin">   
				<a href="#"><?=$this->lang->line('forgotpassword');?></a>
			</div>
			<div class="form-signin">  	
				<span align="center"><a href="<? echo site_url("welcome/lang/thai"); ?>"> ไทย </a>|<a href="<? echo site_url("welcome/lang/english"); ?>"> English</a></span>
			</div>
		</div> 

	</body>
</html>