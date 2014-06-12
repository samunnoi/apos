	<br style='clear:both;'/>
	<form  method="post" action="<? echo site_url("customer/searchcustomer"); ?>"> 
		<? if(isset($cuserror)){echo "<font color=red>".$cuserror."</font>";} ?><br>
		<div class="control-group">
			<div class="input-group input-group-lg" style=''>
				<input name="name" style='padding: 10px 8px;' placeholder="Search Customer ID" type="text" class="form-control">
				<div class="input-group-btn">
					<button type="submit" style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-search"></span></button>
				</div>
			</div>				
		</div>
		<br style='clear:both;'/>
	</form>
	<? if(isset($searchtable)){?>
	<table class="table table-bordered table-hover">
		<thead>
			<tr>			
				<th class='col-xs-3'>Customer ID</th>
				<th class='col-xs-5'>Name</th>
				<th class='col-xs-5'>Surname</th>
			</tr>
		</thead>
		<tbody>
			<?php for( $count=0; $count<$rowtable; $count++ ){ ?>
			<tr>        
				<td align='center'>
				<span><a href="<? echo site_url("customer/searchcustomer/".$searchtable['cusid'][$count]); ?>"><?php echo $searchtable['cusid'][$count]; ?></span>
				</td>
				<td  align='center'>
				<span><?php echo $searchtable['name'][$count]; ?></span>
				</td>
				<td  align='center'>
				<span><?php echo $searchtable['suname'][$count]; ?></span>
				</td>
			</tr>
			<? } ?>
		</tbody>
	</table>
	<br style='clear:both;'/>
	<? } ?>
			
			
	<form  method="post" action="<? echo site_url("customer/addcustomer"); ?>"> 
		<br style='clear:both;'/>
		<div class="control-group">
			<button id="btn1" style='padding: 10px 10px;' type="reset" class="btn btn-default"><span style='padding-top: 1px;padding-bottom: 1px;' class="glyphicon glyphicon-plus"> ADD</span></button>
			<a href="<? if(isset($cusid)){echo site_url("customer/delcustomer/".$cusid); } ?>"> <button id="btn2" style='padding: 10px 10px;' type="button" class="btn btn-default"><span style='padding-top: 1px;padding-bottom: 1px;' class="glyphicon glyphicon-trash">DELETE</span></button></a>
			<a href="<?echo site_url("customerreport");?>"> <button id="btn3" style='padding: 10px 10px;' type="button" class="btn btn-default"><span style='padding-top: 1px;padding-bottom: 1px;' class="glyphicon glyphicon-list-alt"> REPORT </span></button></a>
		</div> 
		<br style='clear:both;'/>
		
		<span id="scusid"></span>
		<? if(isset($cusid_error)){echo "<font color=red>".$cusid_error."</font>";} ?>
		<? if(isset($cusid_notnull)){echo "<font color=red>".$cusid_notnull."</font>";} ?>
		<? if(isset($cusid_aready)){echo "<font color=red>".$cusid_aready."</font>";} ?><br>
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-pencil"></span></button>
			</div>
			<input name="cusid" style='padding: 10px 8px;' id="cusid" placeholder="Customer ID" type="text" class="form-control" value="<? if(isset($cusid)){echo $cusid;}?>" maxlength="15" required>
		</div> 
		<br style='clear:both;'/>	
			

		<? if(isset($name_error)){echo "<font color=red>".$name_error."</font>";} ?>
		<? if(isset($name_notnull)){echo "<font color=red>".$name_notnull."</font>";} ?><br>
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-user"></span></button>
			</div>
			<input name="name" style='padding: 10px 8px;' placeholder="Name" type="text" class="form-control" value="<? if(isset($name)){echo $name;}?>" maxlength="30" required>
		</div> 
		<br style='clear:both;'/>
		
		
		<? if(isset($suname_error)){echo "<font color=red>".$suname_error."</font>";} ?>
		<? if(isset($suname_notnull)){echo "<font color=red>".$suname_notnull."</font>";} ?><br>
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-user"></span></button>
			</div>
			<input name="suname" style='padding: 10px 8px;' placeholder="Surname" type="text" class="form-control" value="<? if(isset($suname)){echo $suname;}?>" maxlength="30" required>
		</div> 
		<br style='clear:both;'/>
		
		
		<? if(isset($tel1_error)){echo "<font color=red>".$tel1_error."</font>";} ?>
		<? if(isset($tel1_notnull)){echo "<font color=red>".$tel1_notnull."</font>";} ?><br>
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-phone"></span></button>
			</div>
			<input name="tel1" style='padding: 10px 8px;' placeholder="Telephone" type="text" class="form-control" value="<? if(isset($tel1)){echo $tel1;}?>" maxlength="15" required>
		</div> 
		<br style='clear:both;'/>
		
		
		<? if(isset($address1_error)){echo "<font color=red>".$address1_error."</font>";} ?>
		<? if(isset($address1_notnull)){echo "<font color=red>".$address1_notnull."</font>";} ?><br>
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-home"></span></button>
			</div>
			<input name="address1" style='padding: 10px 8px;' placeholder="Address" type="text" class="form-control" value="<? if(isset($address1)){echo $address1;}?>" maxlength="50" required>
		</div> 
		<br style='clear:both;'/>
		
		
		<? if(isset($province_error)){echo "<font color=red>".$province_error."</font>";} ?>
		<? if(isset($province_notnull)){echo "<font color=red>".$province_notnull."</font>";} ?><br>
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-globe"></span></button>
			</div>
			<input name="province" style='padding: 10px 8px;' placeholder="Province" type="text" class="form-control" value="<? if(isset($province)){echo $province;}?>" maxlength="30" required>
		</div> 
		<br style='clear:both;'/>
		
		
		<? if(isset($post1_error)){echo "<font color=red>".$post1_error."</font>";} ?>
		<? if(isset($post1_notnull)){echo "<font color=red>".$post1_notnull."</font>";} ?><br>
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-send"></span></button>
			</div>
			<input name="post1" style='padding: 10px 8px;' placeholder="Post Number" type="text" class="form-control" value="<? if(isset($post1)){echo $post1;}?>" maxlength="10" required>
		</div> 
		<br style='clear:both;'/>
		
		
		<!-- <? if(isset($cutid_error)){echo "<font color=red>".$cutid_error."</font>";} ?>
		<? if(isset($cutid_notnull)){echo "<font color=red>".$cutid_notnull."</font>";} ?><br>
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-send"></span></button>
			</div>
			<input name="cutid" style='padding: 10px 8px;' placeholder="Customer Type" type="text" class="form-control" value="<? if(isset($cutid)){echo $cutid;}?>" maxlength="10" required>
		</div> 
		<br style='clear:both;'/> -->
		
		
		<? if(isset($cutid_error)){echo "<font color=red>".$cutid_error."</font>";} ?>
		<? if(isset($cutid_notnull)){echo "<font color=red>".$cutid_notnull."</font>";} ?><br>
		<br style='clear:both;'/>
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;'>Customer Type</span></button>
			</div>
			<input type="hidden" id="hideinputtype" name="addtype" class="form-control" style="width:30%; height:46px;" />
			<select id="inputtype" name="cutid" class="form-control" style="width:30%; height:46px;">
				<span id="showselect">
				<option value="cash" >Cash</option>
				</span>
				<option value="member">Member</option>
				<option value="vip">Vip</option>
			</select>
			<button type="button" id="btndetail" class="btn btn-default btn-sm" style=" height:46px;">
				<span class="glyphicon glyphicon-plus" > Detail  </span> 
			</button>
			<span id="showbtn">
				<button type="button" id="btnadd" class="btn btn-default btn-sm" style=" height:46px;">
					<span class="glyphicon glyphicon-plus" > ADD  </span> 
				</button>
			</span>
		</div> 
		<br style='clear:both;'/>

		
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;'>Customer Type Name</span></button>
			</div>
			<input name="typedetail1" id="typedetail" style='padding: 10px 8px;' placeholder="" type="text" class="form-control" value="" maxlength="50">
		</div> 
		<br style='clear:both;'/>
		<textarea name="typedetail2"  rows="5" id="typedetail2" class="form-control" placeholder="Detail" ></textarea>	
		<br style='clear:both;'/>
		
		
		<? if(isset($email_error)){echo "<font color=red>".$email_error."</font>";} ?>
		<? if(isset($email_notnull)){echo "<font color=red>".$email_notnull."</font>";} ?><br>
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-envelope"></span></button>
			</div>
			<input type="email" name="email" style='padding: 10px 8px;' placeholder="E-mail" type="text" class="form-control" value="<? if(isset($email)){echo $email;}?>" maxlength="30" required>
		</div> 
		<br style='clear:both;'/>
	
		<input type="hidden" name="status" id="actionupdate" value="add">
		<input type="hidden" name="oldcusid" id="oldid" value="<? if(isset($cusid)){echo $cusid;}?>">
		<div align='center'>
			<button style='width:20%;' class="btn btn-lg btn-primary " type="submit">Cancel</button>
			<button style='width:20%;' class="btn btn-lg btn-primary " type="submit" OnClick="JavaScript:fncAlert();">Save</button>
		</div>
	</form>

<!-- Bootstrap core JavaScript ================================================== -->
		
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




/////////////////////////////////////////////////////////////////////////////////////////////////////////  เช็คค่า cusid ว่าซ้ำหรือไม่ 
			$(document).ready(function(){
				if($('#cusid').val()==""){
					// เมื่อ หลุด focus จะทำการส่งค่า
					$("#cusid").focusout(function(){
						// ส่งข้อมูลไปยัง controller
						$("#scusid").empty();		
							$.ajax({ 
							url: "<?php echo base_url()."index.php/customer/validatecusid";?>",
							type: "POST",
							data: 'scusid=' +$("#cusid").val()
							})
							// เมื่อสำเร็จจะทำการเปิดไฟล์ json และเปรียบเทียบค่า
							.success(function(result) { 
								var obj = jQuery.parseJSON(result);
								if(obj != ''){
									$.each(obj, function(key, inval) {
									if($("#cusid").val() == inval["cusid"]){
									   $("#scusid").html(" <font color='red'>CustomerID is already.</font>");
									}
									});					
								}
							});
					});
				}
			});
			
///////////////////////////////////////////////////////////////////////////////////////////////////////// จัดการ customer type
			
			
			$(document).on('click', '#btnadd', function(){ 
				$('#inputtype').hide();
				$('#hideinputtype').show();
					document.getElementById('inputtype').value = ''; 
				$('#btnadd').hide();
				$('#hideinputtype').get(0).type = 'text'; // เปลี่ยน type ของ input
				$("#showbtn").html(" <button type='button' id='btncan' class='btn btn-default btn-sm' style=' height:46px;'><span class='glyphicon glyphicon-remove' >   </span> </button>");
			});
			
			$(document).on('click', '#btncan', function(){ 
				$('#hideinputtype').hide();
				$('#btncan').hide();
				$('#inputtype').show();
				$("#showbtn").html(" <button type='button' id='btnadd' class='btn btn-default btn-sm' style=' height:46px;'><span class='glyphicon glyphicon-plus' > ADD  </span> </button>");
			
			});
			

/*---------------------------------------------   ----------------------------------------------------  */		
		var isDirty = false;
		
		if($('#cusid').val()!=""){
		$("input, select").change(function(){
			isDirty = true;
		});
		
		function fncAlert()
		{
			if (isDirty == true) {
			var sSave;	
			sSave = window.confirm("You have some changes that have not been saved. Click OK to save now or CANCEL to continue without saving.");
			if (sSave == true) {
				document.getElementById('actionupdate').value = 'update'; 
				
				} else {
				return true;
				}
			}
		}
		}
///////////////////////////////////////////////////////////
		
		
	</script>