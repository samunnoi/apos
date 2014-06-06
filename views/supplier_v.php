		<br style='clear:both;'/>
		
		<form  method="post" action="<? echo site_url("supplier/searchsupplier"); ?>"> 
			<? if(isset($superror)){echo "<font color=red>".$superror."</font>";} ?><br>
				<div class="control-group">
				<!--<label class="control-label" for="input01">Barcode</label>-->
					<div class="input-group input-group-lg" style=''>
						<input name="name" style='padding: 10px 8px;' placeholder="Search Supplier ID" type="text" class="form-control">
						<div class="input-group-btn">
						        <!--  onclick='product_search();'   -->
							<button type="submit" style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-search"></span></button>
						</div>
					</div>				
				</div><br style='clear:both;'/>
			</form>
			<? if(isset($searchtable)){?>
			
						<table class="table table-bordered table-hover">
					<thead>
					  <tr>
						
						<th class='col-xs-3'>Supplier ID</th>
						<th class='col-xs-9'>Name</th>
						
						
					  </tr>
					</thead>
					<tbody>
					<?php for( $count=0; $count<$rowtable; $count++ ){ ?>
					  <tr>        
						<td align='center'>
						<span><a href="<? echo site_url("supplier/searchsupplier/".$searchtable['supid'][$count]); ?>"><?php echo $searchtable['supid'][$count]; ?></span>
						
						</td>
						
						<td  align='center'>
						<span><?php echo $searchtable['supname'][$count]; ?></span>
						</td>
						
						
						</td>
						
						
					  </tr>
					  <? } ?>
					</tbody>
				  </table>
					

			<? } ?>
			
			
	<form  method="post" action="<? echo site_url("supplier/addsupplier"); ?>"> 
			
		<br style='clear:both;'/>
		<div class="control-group">
	
				<button id="btn1" style='padding: 10px 10px;' type="reset" class="btn btn-default"><span style='padding-top: 1px;padding-bottom: 1px;' class="glyphicon glyphicon-plus"> ADD</span></button>
				<a href="<? if(isset($supid)){echo site_url("supplier/delsupplier/".$supid); } ?>"><button id="btn2" style='padding: 10px 10px;' type="button" class="btn btn-default"><span style='padding-top: 1px;padding-bottom: 1px;' class="glyphicon glyphicon-trash"> DELETE</span></button></a>
				<a href="<?echo site_url("supplierreport");?>"> <button id="btn3" style='padding: 10px 10px;' type="button" class="btn btn-default"><span style='padding-top: 1px;padding-bottom: 1px;' class="glyphicon glyphicon-list-alt"> REPORT </span></button></a>
		</div>  
		
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