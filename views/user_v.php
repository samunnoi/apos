<!--<label class="control-label" for="input01">Customer</label>-->
	<form  method="post" action="<? echo site_url("user/setuser"); ?>">
		<br style='clear:both;'/>
			
			
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-pencil"></span></button>
			</div>
			<input name="userid" style='padding: 10px 8px;' placeholder="User ID" type="text" class="form-control" value="<? if(isset($userid)){echo $userid;}?>" maxlength="15" required >
		</div> <br style='clear:both;'/>	
			
			<? if(isset($name_error)){echo "<font color=red>".$name_error."</font>";} ?>
			<? if(isset($name_notnull)){echo "<font color=red>".$name_notnull."</font>";} ?><br>
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-user"></span></button>
			</div>
			<input name="name" style='padding: 10px 8px;' placeholder="Name" type="text" class="form-control" value="<? if(isset($name)){echo $name;}?>" maxlength="30" required>
		</div> <br style='clear:both;'/>
		
		
			<? if(isset($suname_error)){echo "<font color=red>".$suname_error."</font>";} ?>
			<? if(isset($suname_notnull)){echo "<font color=red>".$suname_notnull."</font>";} ?><br>
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-user"></span></button>
			</div>
			<input name="suname" style='padding: 10px 8px;' placeholder="Surname" type="text" class="form-control" value="<? if(isset($suname)){echo $suname;}?>" maxlength="50" required>
		</div> <br style='clear:both;'/>
		
		
			<? if(isset($personal_error)){echo "<font color=red>".$personal_error."</font>";} ?>
			<? if(isset($personal_notnull)){echo "<font color=red>".$personal_notnull."</font>";} ?><br>
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-tasks"></span></button>
			</div>
			<input name="personal" style='padding: 10px 8px;' placeholder="Personal ID" type="text" class="form-control" value="<? if(isset($personal)){echo $personal;}?>" maxlength="15" required>
		</div> <br style='clear:both;'/>
		
		
			<? if(isset($tel_error)){echo "<font color=red>".$tel_error."</font>";} ?>
			<? if(isset($tel_notnull)){echo "<font color=red>".$tel_notnull."</font>";} ?><br>
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-phone"></span></button>
			</div>
			<input name="tel" style='padding: 10px 8px;' placeholder="Telephone" type="text" class="form-control" value="<? if(isset($tel)){echo $tel;}?>" maxlength="12" required>
		</div> <br style='clear:both;'/>
		
		
		
			<? if(isset($address1_error)){echo "<font color=red>".$address1_error."</font>";} ?>
			<? if(isset($address1_notnull)){echo "<font color=red>".$address1_notnull."</font>";} ?><br>
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-home"></span></button>
			</div>
			<input name="address1" style='padding: 10px 8px;' placeholder="Address" type="text" class="form-control" value="<? if(isset($address1)){echo $address1;}?>" maxlength="50" required>
		</div> <br style='clear:both;'/>
		
		
		
			<? if(isset($province_error)){echo "<font color=red>".$province_error."</font>";} ?>
			<? if(isset($province_notnull)){echo "<font color=red>".$province_notnull."</font>";} ?><br>
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-globe"></span></button>
			</div>
			<input name="province" style='padding: 10px 8px;' placeholder="Province" type="text" class="form-control" value="<? if(isset($province)){echo $province;}?>" maxlength="30" required>
		</div> <br style='clear:both;'/>
		
		
		
			<? if(isset($post1_error)){echo "<font color=red>".$post1_error."</font>";} ?>
			<? if(isset($post1_notnull)){echo "<font color=red>".$post1_notnull."</font>";} ?><br>
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-send"></span></button>
			</div>
			<input name="post1" style='padding: 10px 8px;' placeholder="Post Number" type="text" class="form-control" value="<? if(isset($post1)){echo $post1;}?>" maxlength="10" required>
		</div> <br style='clear:both;'/>
		
			<? if(isset($email_error)){echo "<font color=red>".$email_error."</font>";} ?>
			<? if(isset($email_notnull)){echo "<font color=red>".$email_notnull."</font>";} ?>
			<? if(isset($email_aready)){echo "<font color=red>".$email_aready."</font>";} ?><br>
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-envelope"></span></button>
			</div>
			<input name="email" style='padding: 10px 8px;' placeholder="E-mail" type="text" class="form-control" value="<? if(isset($email)){echo $email;}?>" maxlength="30" required>
		</div> <br style='clear:both;'/>
	
	
			<? if(isset($password_error)){echo "<font color=red>".$password_error."</font>";} ?>
			<? if(isset($password_notnull)){echo "<font color=red>".$password_notnull."</font>";} ?><br>
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-lock"></span></button>
			</div>
			<input name="password" style='padding: 10px 8px;' placeholder="Password" type="text" class="form-control" value="<? if(isset($password)){echo $password;}?>" maxlength="30" required>
		</div> <br style='clear:both;'/>
	
            <!--<label class="control-label" for="input01">Barcode</label>-->
				
		
			


		
		<div align='center'>
			<!-- <a href='submit.html' style='width:20%;' class="btn btn-primary">Cancel</a> -->
			<button style='width:20%;' class="btn btn-lg btn-primary btn-block" type="submit">Save</button>
			<button style='width:20%;' class="btn btn-lg btn-primary btn-block" type="submit">Cancel</button>
		</div>
	</form>
	</div>
	</div>
		
   </div>
   <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>js/jquery1.11.0.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>js/slidePushMenus/classie.js"></script>
		<script>
					var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
					menuRight = document.getElementById( 'cbp-spmenu-s2' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				showRightPush = document.getElementById( 'showRightPush' ),
				body = document.body;

			$(function(){		       
	     $(window).resize(function(){
			if($(window).width()>750){
				$('#cbp-spmenu-s1').removeClass('cbp-spmenu-open');
				$('body').removeClass('cbp-spmenu-push-toright');
			}			
			});   
		});
		
			
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			showRightPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toleft' );
				classie.toggle( menuRight, 'cbp-spmenu-open' );
				disableOther( 'showRightPush' );
			};








		</script>