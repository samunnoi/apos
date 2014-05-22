<!--<label class="control-label" for="input01">Customer</label>-->
				<div class="input-group input-group-lg">
				  <input style='padding: 10px 8px;' placeholder="Customer" type="text" class="form-control">
					<span class="input-group-btn">
						<button id='dettail_button' onclick='customer_dettail();' style='padding: 10px 8px;' class="btn btn-default" type="button">Detail</button>
					</span>
				</div><!-- /input-group -->				
				
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
				</div>
     </div>			
			<br/>
     <div class="control-group">
            <!--<label class="control-label" for="input01">Barcode</label>-->
			   <div class="input-group input-group-lg" style=''>
				<input style='padding: 10px 8px;' placeholder="Barcode" type="text" class="form-control">
					<div class="input-group-btn">
						<button style='padding: 10px 8px;' type="button" class="btn btn-default">Add</button>            
						<button onclick='product_search();' style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-search"></span></button>
					</div>
				</div>				
			<div id='product_search' class="form-horizontal well" style='display:none; padding:5px;'>	
			<fieldset>  
			
					  
					<div class="control-group">
						<span class='col-xs-4 span_menu' >
							<button  onclick='show_list(1,1);' type="button" class="btn btn-default btn-lg sub_menu">
									<span class="glyphicon"></span>1ขนม
							</button>								
							</span>
							<span class='col-xs-4 span_menu'>
							<button  onclick='show_list(1,2);' type="button" class="btn btn-default btn-lg sub_menu">
									<span class="glyphicon"></span>ผลไม้
							</button>	
							</span>
							<span class='col-xs-4 span_menu'>
							<button  onclick='show_list(1,3);' type="button" class="btn btn-default btn-lg sub_menu">
									<span class="glyphicon"></span>น้ำอัดลม
							</button>
							</span>
					  </div>
					 <br style='clear:both;'/>
					  <div id="line1" class="list-group form-horizontal well sub_menu" style='display:none;'>		
					  
						<div class="control-group ">
							
							
								<div class='row'>
								<span class='col-xs-4 span_menu'>
									<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
											<span class="glyphicon"></span>ฮานามิ
									</button>								
								</span>
								<span class='col-xs-4 span_menu'>
									<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
											<span class="glyphicon"></span>เลย์
									</button>	
								</span>
								<span class='col-xs-4 span_menu'>
									<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
											<span class="glyphicon"></span>ปลาทาโร่
									</button>
								</span>
								</div>
								<div class='row'>
									<span class='col-xs-4 span_menu'>
										<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
												<span class="glyphicon"></span>ฮานามิ
										</button>								
									</span>
									<span class='col-xs-4 span_menu'>
										<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
												<span class="glyphicon"></span>โดริเทส
										</button>	
									</span>
									<span class='col-xs-4 span_menu'>
										<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
												<span class="glyphicon"></span>ปาปีก้า
										</button>
									</span>
								</div>
								<div class='row'>
								<span class='col-xs-4 span_menu'>
									<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
											<span class="glyphicon"></span>ฮานามิ
									</button>								
								</span>
								<span class='col-xs-4 span_menu'>
									<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
											<span class="glyphicon"></span>เลย์
									</button>	
								</span>
								<span class='col-xs-4 span_menu'>
									<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
											<span class="glyphicon"></span>ปลาทาโร่
									</button>
								</span>
								</div>
									<div class='row'>
									<span class='col-xs-4 span_menu'>
										<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
												<span class="glyphicon"></span>ฮานามิ
										</button>								
									</span>
									<span class='col-xs-4 span_menu'>
										<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
												<span class="glyphicon"></span>โดริเทส
										</button>	
									</span>
									<span class='col-xs-4 span_menu'>
										<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
												<span class="glyphicon"></span>ปาปีก้า
										</button>
									</span>
								</div>
						</div>
					  </div>
					 <div class="control-group">
						<span class='col-xs-4 span_menu' >
							<button onclick='show_list(2,4);' type="button" class="btn btn-default btn-lg col-xs-4 sub_menu">
									<span class="glyphicon"></span>เหล้า
							</button>								
						</span>
						<span class='col-xs-4 span_menu' >
							<button onclick='show_list(2,5);' type="button" class="btn btn-default btn-lg col-xs-4 sub_menu">
									<span class="glyphicon"></span>บุหรี่
							</button>	
						</span>
						<span class='col-xs-4 span_menu' >
							<button onclick='show_list(2,6);' type="button" class="btn btn-default btn-lg col-xs-4 sub_menu">
									<span class="glyphicon"></span>เบียร์
							</button>
						</span>
					  </div>
					 <br style='clear:both;'/>
					  <div id="line2" class="list-group form-horizontal well sub_menu" style='display:none;'>						
						
						<div class="control-group ">
							
							
								<div class='row'>
								<span class='col-xs-4 span_menu'>
									<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
											<span class="glyphicon"></span>ฮานามิ
									</button>								
								</span>
								<span class='col-xs-4 span_menu'>
									<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
											<span class="glyphicon"></span>เลย์
									</button>	
								</span>
								<span class='col-xs-4 span_menu'>
									<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
											<span class="glyphicon"></span>ปลาทาโร่
									</button>
								</span>
								</div>
								<div class='row'>
									<span class='col-xs-4 span_menu'>
										<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
												<span class="glyphicon"></span>ฮานามิ
										</button>								
									</span>
									<span class='col-xs-4 span_menu'>
										<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
												<span class="glyphicon"></span>โดริเทส
										</button>	
									</span>
									<span class='col-xs-4 span_menu'>
										<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
												<span class="glyphicon"></span>ปาปีก้า
										</button>
									</span>
								</div>
								<div class='row'>
								<span class='col-xs-4 span_menu'>
									<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
											<span class="glyphicon"></span>ฮานามิ
									</button>								
								</span>
								<span class='col-xs-4 span_menu'>
									<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
											<span class="glyphicon"></span>เลย์
									</button>	
								</span>
								<span class='col-xs-4 span_menu'>
									<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
											<span class="glyphicon"></span>ปลาทาโร่
									</button>
								</span>
								</div>
									<div class='row'>
									<span class='col-xs-4 span_menu'>
										<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
												<span class="glyphicon"></span>ฮานามิ
										</button>								
									</span>
									<span class='col-xs-4 span_menu'>
										<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
												<span class="glyphicon"></span>โดริเทส
										</button>	
									</span>
									<span class='col-xs-4 span_menu'>
										<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
												<span class="glyphicon"></span>ปาปีก้า
										</button>
									</span>
								</div>
						</div>
					
					  </div>
					<div class="control-group">
						<span class='col-xs-4 span_menu' >
						<button onclick='show_list(3,7);' type="button" class="btn btn-default btn-lg col-xs-4 sub_menu">
									<span class="glyphicon"></span>ขนม
							</button>						
						</span>
						<span class='col-xs-4 span_menu' >	
							<button onclick='show_list(3,8);' type="button" class="btn btn-default btn-lg col-xs-4 sub_menu">
									<span class="glyphicon"></span>ผลไม้
							</button>	
						</span>
						<span class='col-xs-4 span_menu' >						
							<button onclick='show_list(3,9);' type="button" class="btn btn-default btn-lg col-xs-4 sub_menu">
									<span class="glyphicon"></span>น้ำอัดลม
							</button>
						</span>
					  </div>
					 <br style='clear:both;'/>
					  <div id="line3" class="list-group control-group" style='display:none;'>						
						
						<div class="control-group ">
							
							
								<div class='row'>
								<span class='col-xs-4 span_menu'>
									<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
											<span class="glyphicon"></span>ฮานามิ
									</button>								
								</span>
								<span class='col-xs-4 span_menu'>
									<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
											<span class="glyphicon"></span>เลย์
									</button>	
								</span>
								<span class='col-xs-4 span_menu'>
									<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
											<span class="glyphicon"></span>ปลาทาโร่
									</button>
								</span>
								</div>
								<div class='row'>
									<span class='col-xs-4 span_menu'>
										<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
												<span class="glyphicon"></span>ฮานามิ
										</button>								
									</span>
									<span class='col-xs-4 span_menu'>
										<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
												<span class="glyphicon"></span>โดริเทส
										</button>	
									</span>
									<span class='col-xs-4 span_menu'>
										<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
												<span class="glyphicon"></span>ปาปีก้า
										</button>
									</span>
								</div>
								<div class='row'>
								<span class='col-xs-4 span_menu'>
									<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
											<span class="glyphicon"></span>ฮานามิ
									</button>								
								</span>
								<span class='col-xs-4 span_menu'>
									<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
											<span class="glyphicon"></span>เลย์
									</button>	
								</span>
								<span class='col-xs-4 span_menu'>
									<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
											<span class="glyphicon"></span>ปลาทาโร่
									</button>
								</span>
								</div>
									<div class='row'>
									<span class='col-xs-4 span_menu'>
										<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
												<span class="glyphicon"></span>ฮานามิ
										</button>								
									</span>
									<span class='col-xs-4 span_menu'>
										<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
												<span class="glyphicon"></span>โดริเทส
										</button>	
									</span>
									<span class='col-xs-4 span_menu'>
										<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
												<span class="glyphicon"></span>ปาปีก้า
										</button>
									</span>
								</div>
						</div>
					
					  </div>
					  <div class="control-group">
					 <span class='col-xs-4 span_menu' >							
						<button onclick='show_list(4,10);' type="button" class="btn btn-default btn-lg col-xs-4 sub_menu">
									<span class="glyphicon"></span>เหล้า
							</button>
						</span>
						<span class='col-xs-4 span_menu' >							
							<button onclick='show_list(4,11);' type="button" class="btn btn-default btn-lg col-xs-4 sub_menu">
									<span class="glyphicon"></span>บุหรี่
							</button>	
						</span>
						<span class='col-xs-4 span_menu' >							
							<button onclick='show_list(4,12);' type="button" class="btn btn-default btn-lg col-xs-4 sub_menu">
									<span class="glyphicon"></span>เบียร์
							</button>
						</span>
					  </div>
					 <br style='clear:both;'/>
					  <div id="line4" class="list-group control-group" style='display:none;'>						
						
						<div class="control-group ">
							
							
								<div class='row'>
								<span class='col-xs-4 span_menu'>
									<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
											<span class="glyphicon"></span>ฮานามิ
									</button>								
								</span>
								<span class='col-xs-4 span_menu'>
									<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
											<span class="glyphicon"></span>เลย์
									</button>	
								</span>
								<span class='col-xs-4 span_menu'>
									<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
											<span class="glyphicon"></span>ปลาทาโร่
									</button>
								</span>
								</div>
								<div class='row'>
									<span class='col-xs-4 span_menu'>
										<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
												<span class="glyphicon"></span>ฮานามิ
										</button>								
									</span>
									<span class='col-xs-4 span_menu'>
										<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
												<span class="glyphicon"></span>โดริเทส
										</button>	
									</span>
									<span class='col-xs-4 span_menu'>
										<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
												<span class="glyphicon"></span>ปาปีก้า
										</button>
									</span>
								</div>
								<div class='row'>
								<span class='col-xs-4 span_menu'>
									<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
											<span class="glyphicon"></span>ฮานามิ
									</button>								
								</span>
								<span class='col-xs-4 span_menu'>
									<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
											<span class="glyphicon"></span>เลย์
									</button>	
								</span>
								<span class='col-xs-4 span_menu'>
									<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
											<span class="glyphicon"></span>ปลาทาโร่
									</button>
								</span>
								</div>
									<div class='row'>
									<span class='col-xs-4 span_menu'>
										<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
												<span class="glyphicon"></span>ฮานามิ
										</button>								
									</span>
									<span class='col-xs-4 span_menu'>
										<button  onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
												<span class="glyphicon"></span>โดริเทส
										</button>	
									</span>
									<span class='col-xs-4 span_menu'>
										<button   onclick='select_product();' type="button" class="btn btn-primary btn-lg sub_menu">
												<span class="glyphicon"></span>ปาปีก้า
										</button>
									</span>
								</div>
						</div>
					
					  </div>
        
         
			</fieldset>  
			</div >	
     </div>
		  <br style='clear:both;'/>
		<table class="table table-bordered table-hover">
    <thead>
      <tr>
        
        <th>รายการ</th>
        <th class='col-xs-1'>Qty</th>
        <th class='col-xs-1'>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>        
        <td>
		<span>ขนม</span>
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
		<span>น้ำส้ม</span>
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
		<span>น้ำอัดลม</span>
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
		<td colspan="2" align='right' ><b>รวม</b></td>
		<td align='center'>1,600</td>
	  </tr>
    </tbody>
  </table>
  
  <div align='center'>
	<a href='submit.html' style='width:80%;' class="btn btn-primary">Save</a>
  </div>
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