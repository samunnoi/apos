<!--<label class="control-label" for="input01">Customer</label>-->
	<form  method="post" action="<?=$_SERVER['PHP_SELF']."/addcustomer"?>"> 
		<br style='clear:both;'/>
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-pencil"></span></button>
			</div>
			<input name="cusid" style='padding: 10px 8px;' placeholder="Customer ID" type="text" class="form-control" value="<? if(isset($itemid)){echo $itemid;}?>" maxlength="15" required>
		</div> <br style='clear:both;'/>	
				
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-user"></span></button>
			</div>
			<input name="name" style='padding: 10px 8px;' placeholder="Name" type="text" class="form-control" value="<? if(isset($itemid)){echo $itemid;}?>" maxlength="30" required>
		</div> <br style='clear:both;'/>
		
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-user"></span></button>
			</div>
			<input name="suname" style='padding: 10px 8px;' placeholder="Surname" type="text" class="form-control" value="<? if(isset($itemid)){echo $itemid;}?>" maxlength="30" required>
		</div> <br style='clear:both;'/>
		
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-phone"></span></button>
			</div>
			<input name="tel1" style='padding: 10px 8px;' placeholder="Telephone" type="text" class="form-control" value="<? if(isset($itemid)){echo $itemid;}?>" maxlength="15" required>
		</div> <br style='clear:both;'/>
		
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-home"></span></button>
			</div>
			<input name="address1" style='padding: 10px 8px;' placeholder="Address" type="text" class="form-control" value="<? if(isset($itemid)){echo $itemid;}?>" maxlength="50" required>
		</div> <br style='clear:both;'/>
		
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-globe"></span></button>
			</div>
			<input name="province" style='padding: 10px 8px;' placeholder="Province" type="text" class="form-control" value="<? if(isset($itemid)){echo $itemid;}?>" maxlength="30" required>
		</div> <br style='clear:both;'/>
		
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-send"></span></button>
			</div>
			<input name="post1" style='padding: 10px 8px;' placeholder="Post Number" type="text" class="form-control" value="<? if(isset($itemid)){echo $itemid;}?>" maxlength="10" required>
		</div> <br style='clear:both;'/>
		
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-envelope"></span></button>
			</div>
			<input name="email" style='padding: 10px 8px;' placeholder="E-mail" type="text" class="form-control" value="<? if(isset($itemid)){echo $itemid;}?>" maxlength="30" required>
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