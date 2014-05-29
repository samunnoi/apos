<!--<label class="control-label" for="input01">Customer</label>-->
	<form  method="post" action="<?=$_SERVER['PHP_SELF']."/addsupplier"?>"> 
			
		<br style='clear:both;'/>
		
		<? if(isset($supid_error)){echo "<font color=red>".$supid_error."</font>";} ?>
		<? if(isset($sup_notnull)){echo "<font color=red>".$sup_notnull."</font>";} ?>
		<? if(isset($supid_aready)){echo "<font color=red>".$supid_aready."</font>";} ?><br>
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-pencil"></span></button>
			</div>
			<input name="supid" style='padding: 10px 8px;' placeholder="Supplier ID" type="text" class="form-control" value="<? if(isset($supid)){echo $supid;}?>" maxlength="15" required>
		</div> <br style='clear:both;'/>	
			

		<? if(isset($name_error)){echo "<font color=red>".$name_error."</font>";} ?>
		<? if(isset($name_notnull)){echo "<font color=red>".$name_notnull."</font>";} ?><br>
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-user"></span></button>
			</div>
			<input name="supname" style='padding: 10px 8px;' placeholder="Supplier Name" type="text" class="form-control" value="<? if(isset($supname)){echo $supname;}?>" maxlength="50" required>
		</div> <br style='clear:both;'/>
		
		<? if(isset($tel1_error)){echo "<font color=red>".$tel1_error."</font>";} ?>
		<? if(isset($tel1_notnull)){echo "<font color=red>".$tel1_notnull."</font>";} ?><br>
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-phone"></span></button>
			</div>
			<input name="tell" style='padding: 10px 8px;' placeholder="Telephone" type="text" class="form-control" value="<? if(isset($tell)){echo $tell;}?>" maxlength="15" required>
		</div> <br style='clear:both;'/>
		
		
		<? if(isset($address1_error)){echo "<font color=red>".$address1_error."</font>";} ?>
		<? if(isset($address1_notnull)){echo "<font color=red>".$address1_notnull."</font>";} ?><br>
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-home"></span></button>
			</div>
			<input name="address1" style='padding: 10px 8px;' placeholder="Address" type="text" class="form-control" value="<? if(isset($address1)){echo $address1;}?>" maxlength="50" required>
		</div> <br style='clear:both;'/>
		
		
		<? if(isset($sellman_error)){echo "<font color=red>".$sellman_error."</font>";} ?>
		<? if(isset($sellman_notnull)){echo "<font color=red>".$sellman_notnull."</font>";} ?><br>
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-user"></span></button>
			</div>
			<input name="sellman" style='padding: 10px 8px;' placeholder="Sellman" type="text" class="form-control" value="<? if(isset($sellman)){echo $sellman;}?>" maxlength="80" required>
		</div> <br style='clear:both;'/>
		
		
		<? if(isset($account_error)){echo "<font color=red>".$account_error."</font>";} ?>
		<? if(isset($account_notnull)){echo "<font color=red>".$account_notnull."</font>";} ?><br>
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-euro"></span></button>
			</div>
			<input name="account" style='padding: 10px 8px;' placeholder="Bank Account" type="text" class="form-control" value="<? if(isset($account)){echo $account;}?>" maxlength="20" required>
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