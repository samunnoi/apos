<!--<label class="control-label" for="input01">Customer</label>-->

	<!-- <div class="control-group">
				<div class="input-group input-group-lg">
				  <input style='padding: 10px 8px;' placeholder="Customer" type="text" class="form-control">
					<span class="input-group-btn">
						<button id='dettail_button' onclick='customer_dettail();' style='padding: 10px 8px;' class="btn btn-default" type="button">Detail</button>
					</span>
				</div>	
				
				<div id='customer_detail' class="form-horizontal well" style='display:none;'>
					<fieldset>         
					  <div class="control-group">            
						<div class="controls">
							<div class="input-group">
								<span class="input-group-addon"><span class='glyphicon glyphicon-user'></span></span>
								<input type="text" class="form-control" placeholder="name"/>
							</div>
						</div>
						<label class="control-label" for="input01"></label>
						<div class="controls">
							<div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-phone-alt"></span>
								</span>
							<input type="text" class="form-control" placeholder="Tel"/>
							</div>
						</div>						
						<div class="controls" style=''>										
							<label class="control-label" for="input01"></label> 
							<textarea class="form-control" placeholder="Adress" rows="3"></textarea>
						</div>
					  </div>
					  
					</fieldset>
				</div> -->
     </div>			
			<br/>
			<form  method="post" action="<?=$_SERVER['PHP_SELF']."/searchitem"?>"> 
     <div class="control-group">
            <!--<label class="control-label" for="input01">Barcode</label>-->
			   <div class="input-group input-group-lg" style=''>
				<input name="name" style='padding: 10px 8px;' placeholder="Search Item" type="text" class="form-control">
					<div class="input-group-btn">
						        <!--  onclick='product_search();'   -->
						<button type="submit" style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-search"></span></button>
					</div>
				</div>				
		<!--	<div id='product_search' class="form-horizontal well" style='display:none; padding:5px;'>	
			<fieldset>  
			
					  
					<table class="table table-bordered table-hover">
    <thead>
      <tr>
        
        <th>√“¬°“√</th>
        <th class='col-xs-1'>Qty</th>
        <th class='col-xs-1'>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>        
        <td>
		<span>¢π¡</span>
		<span style='float:right'>
			<button type="button" class="btn btn-default btn-sm">
				<span class="glyphicon glyphicon-trash"></span> 
			</button>
		</span>
		</td>
         <td  align='center'>
		 <select>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
		 </select>
		 </td>
        <td align='center'>1,100</td>
      </tr>
      <tr>
        
         <td>
		<span>πÈ” È¡</span>
		<span style='float:right'>
			<button type="button" class="btn btn-default btn-sm">
				<span class="glyphicon glyphicon-trash"></span> 
			</button>
		</span>
		</td>
         <td  align='center'><select>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
		 </select></td>
        <td align='center'>200</td>
      </tr>
      <tr>
        
         <td>
		<span>πÈ”Õ—¥≈¡</span>
		<span style='float:right'>
			<button type="button" class="btn btn-default btn-sm">
				<span class="glyphicon glyphicon-trash"></span> 
			</button>
		</span>
		</td>
        <td  align='center'><select>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
		 </select></td>
        <td align='center'>300</td>
      </tr>
	  <tr>
		<td colspan="2" align='right' ><b>√«¡</b></td>
		<td align='center'>1,600</td>
	  </tr>
    </tbody>
  </table>
        
        
			</fieldset>  
			</div >	-->
     </div>
		 <br style='clear:both;'/>
		 </form>
		 
	<div class="control-group">
	
            <!--<label class="control-label" for="input01">Barcode</label>-->
			   <div class="input-group input-group-lg" style=''>
				<input style='padding: 10px 8px;' placeholder="Detail" type="text" class="form-control">
					<div class="input-group-btn">
						            
						<button onclick='product_search1();' style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-circle-arrow-down"></span></button>
					</div>
				</div>		
				</div> <br style='clear:both;'/>	
		  
		 <form  method="post" action="<?=$_SERVER['PHP_SELF']."/additem"?>"> 
	<div class="control-group">
	
				<button id="btn1" style='padding: 10px 10px;' type="reset" class="btn btn-default"><span style='padding-top: 1px;padding-bottom: 1px;' class="glyphicon glyphicon-plus"> ADD</span></button>
				<button id="btn2" style='padding: 10px 10px;' type="button" class="btn btn-default"><span style='padding-top: 1px;padding-bottom: 1px;' class="glyphicon glyphicon-trash"> DELETE</span></button>
				<button id="btn3" style='padding: 10px 10px;' type="button" class="btn btn-default"><span style='padding-top: 1px;padding-bottom: 1px;' class="glyphicon glyphicon-list-alt"> REPORT</span></button>				
			
		</div>  
		  
		<br style='clear:both;'/>
		
		<?
		
					
						
		?>
		<div class="input-group input-group-lg" style=''>
	<div class="input-group-btn">
			<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-pencil"></span></button>
	</div>
	<input name="itemid" style='padding: 10px 8px;'id="itemid" placeholder="Item ID" type="text" class="form-control" value="<?=$itemid?>">
	</div> <br style='clear:both;'/>	
		
	<div class="input-group input-group-lg" style=''>
	<div class="input-group-btn">
			<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-pencil"></span></button>
	</div>
	<input name="barcode" style='padding: 10px 8px;'id="barcode" placeholder="Barcode" type="text" class="form-control" value="<?=$barcode?>">
	</div> <br style='clear:both;'/>
	
	
	<div class="input-group input-group-lg" style=''>
	<div class="input-group-btn">
			<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-pencil"></span></button>
	</div>
	<input name="name" style='padding: 10px 8px;' placeholder="Name" type="text" class="form-control" value="<?=$name?>" >
	</div> <br style='clear:both;'/>
	
	
	<div class="input-group input-group-lg" style=''>
	<div class="input-group-btn">
			<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-pencil"></span></button>
	</div>
	<input name="price" style='padding: 10px 8px;' placeholder="Price" type="text" class="form-control" value="<??>">
	</div> <br style='clear:both;'/>
		
	
            <!--<label class="control-label" for="input01">Barcode</label>-->
				<div class="input-group input-group-lg" style=''>
				<div class="input-group-btn">
					<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-pencil"></span></button>
				</div>
				<input name="detail" style='padding: 10px 8px;' placeholder="Detail" type="text" class="form-control" value="<?=$detail?>">
				</div><br style='clear:both;'/>		
		
				<div class="input-group input-group-lg" style=''>
				<div class="input-group-btn">
					<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-pencil"></span></button>
				</div>
				<input name="type" style='padding: 10px 8px;' placeholder="Type Of Item" type="text" class="form-control" value="<??>">
				</div><br style='clear:both;'/>		

	<?
	
?>	
		
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