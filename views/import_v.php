		
			<form action="<? echo site_url("import/upload"); ?>" method="post"enctype="multipart/form-data">
				<label>File Import</label>
				<input type="file" name="myfile" id="file"><br>
				<div align='left'>
					<button style='width:20%;' class="btn btn-lg btn-primary" type="submit" ><?=$this->lang->line('import');?></button>
					<a href="<?echo site_url("import/download");?>"><button style='width:20%;' class="btn btn-lg btn-primary" type="button" >Download Template</button></a>
				</div>
				
			</form>
		
		<br style='clear:both;'/>
		
		
		
	<?
	if(isset($rowtable)){
	?>
		<table  class="table table-bordered ">
		  <tr>
			<td>ItemID</td>
			<td>Item</td>
			<td>Barcode</td>
			<td>Type</td>
			<td>Detail</td>
			<td>Cash</td>
			<td>VIP1</td>
			<td>VIP2</td>
			<td>VIP3</td>
			<td>Member</td>
		  </tr>
	<?
		
		for( $count=0; $count<$rowtable; $count++ ){ 
			
	?>		
			
			
	<?	if(isset($error)){	 		
			if(array_key_exists($count,$error)==true){
			
	?>	
				<tr <? if(array_key_exists( $count,$error)==true||isset($primary_already[$count])){?> style="background-color:#ff7373;"   <?}?> class="tip-left" data-toggle="tooltip" data-placement="left" title="
	<?	
				foreach($error[$count] as $row){
					
					if(isset($primary_already[$count])){echo $primary_already[$count];}
					if(isset($row['itemid_aready'])){echo $row['itemid_aready'];}
					if(isset($row['itemid_error'])){echo $row['itemid_error'];}
					if(isset($row['itemid_notnull'])){echo $row['itemid_notnull'];}
					if(isset($row['name_error'])){echo $row['name_error'];}
					if(isset($row['name_notnull'])){echo $row['name_notnull'];}
					if(isset($row['barcode_error'])){echo $row['barcode_error'];}
					if(isset($row['barcode_notnull'])){echo $row['barcode_notnull'];}
					if(isset($row['type_error'])){echo $row['type_error'];}
					if(isset($row['type_notnull'])){echo $row['type_notnull'];}
					if(isset($row['detail_error'])){echo $row['detail_error'];}
					if(isset($row['detail_notnull'])){echo $row['detail_notnull'];}
					if(isset($row['cash_nav'])){echo $row['cash_nav'];}
					if(isset($row['cash_notnum'])){echo $row['cash_notnum'];}
					if(isset($row['vip1_nav'])){echo $row['vip1_nav'];}
					if(isset($row['vip1_notnum'])){echo $row['vip1_notnum'];}
					if(isset($row['vip2_nav'])){echo $row['vip2_nav'];}
					if(isset($row['vip2_notnum'])){echo $row['vip2_notnum'];}
					if(isset($row['vip3_nav'])){echo $row['vip3_nav'];}
					if(isset($row['vip3_notnum'])){echo $row['vip3_notnum'];}
					if(isset($row['member_nav'])){echo $row['member_nav'];}
					if(isset($row['member_notnum'])){echo $row['member_notnum'];}
				
					}
		?>
				"> 
				
				<td <? if(isset($primary_already[$count])||isset($row['itemid_aready'])){?> style="background-color:#ff0d00;"   <?}?>><?=$item['itemid'][$count];?></td>
				<td <? if(isset($row['name_error'])){?> style="background-color:#ff0d00;"   <?}?>><?=$item['item'][$count];?></td>
				<td <? if(isset($row['barcode_error'])){?> style="background-color:#ff0d00;"   <?}?>><?=$item['barcode'][$count];?></td>
				<td <? if(isset($row['type_error'])){?> style="background-color:#ff0d00;"   <?}?>><?=$item['type'][$count];?></td>
				<td <? if(isset($row['detail_error'])){?> style="background-color:#ff0d00;"   <?}?>><?=$item['detail'][$count];?></td>
				<td <? if(isset($row['cash_nav'])||isset($row['cash_notnum'])){?> style="background-color:#ff0d00;"   <?}?>><?=$item['cash'][$count];?></td>
				<td <? if(isset($row['vip1_nav'])||isset($row['vip1_notnum'])){?> style="background-color:#ff0d00;"   <?}?>><?=$item['vip1'][$count];?></td>
				<td <? if(isset($row['vip2_nav'])||isset($row['vip2_notnum'])){?> style="background-color:#ff0d00;"   <?}?>><?=$item['vip2'][$count];?></td>
				<td <? if(isset($row['vip3_nav'])||isset($row['vip3_notnum'])){?> style="background-color:#ff0d00;"   <?}?>><?=$item['vip3'][$count];?></td>
				<td <? if(isset($row['member_nav'])||isset($row['member_notnum'])){?> style="background-color:#ff0d00;"   <?}?>><?=$item['member'][$count];?></td>
			  </tr>
	<?
				}else{
	?>
					<tr <? if(isset($primary_already[$count])){?> style="background-color:#ff7373;"   <?}?>>
					
					<td ><?=$item['itemid'][$count];?></td>
					<td ><?=$item['item'][$count];?></td>
					<td ><?=$item['barcode'][$count];?></td>
					<td ><?=$item['type'][$count];?></td>
					<td ><?=$item['detail'][$count];?></td>
					<td ><?=$item['cash'][$count];?></td>
					<td ><?=$item['vip1'][$count];?></td>
					<td ><?=$item['vip2'][$count];?></td>
					<td ><?=$item['vip3'][$count];?></td>
					<td ><?=$item['member'][$count];?></td>
					</tr>
	<?			
				}
				
			}else{
	?>
				<tr <? if(isset($primary_already[$count])){?> style="background-color:#ff7373;"   <?}?>>	
					<td ><?=$item['itemid'][$count];?></td>
					<td ><?=$item['item'][$count];?></td>
					<td ><?=$item['barcode'][$count];?></td>
					<td ><?=$item['type'][$count];?></td>
					<td ><?=$item['detail'][$count];?></td>
					<td ><?=$item['cash'][$count];?></td>
					<td ><?=$item['vip1'][$count];?></td>
					<td ><?=$item['vip2'][$count];?></td>
					<td ><?=$item['vip3'][$count];?></td>
					<td ><?=$item['member'][$count];?></td>
				</tr>		
	
	
	
	
	<?
			}
		}
	?>
		</table>
	<?
		if(isset($primary_already)||isset($error)){
	?>
		<div align='right'>
			<a href="<? echo site_url("import"); ?>"> <button style='width:20%;' class="btn btn-lg btn-primary"  ><?=$this->lang->line('cancel');?></button></a>
			<button style='width:20%;' class="btn btn-lg btn-primary"   OnClick="JavaScript:importAlert();"><?=$this->lang->line('import');?></button>
		</div>
	<?	
		}else{
	?>
		<div align='right'>
			<a href="<? echo site_url("import"); ?>"> <button style='width:20%;' class="btn btn-lg btn-primary"  ><?=$this->lang->line('cancel');?></button></a>
			<a href="<? echo site_url("import/additem"); ?>"> <button style='width:20%;' class="btn btn-lg btn-primary"   OnClick="JavaScript:importOkAlert();"><?=$this->lang->line('import');?></button></a>
		</div>
	<?	
		}
	}
	?>	
	

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

		$(document).ready(function(){
			$(".tip-left").tooltip({ placement : 'bottom'}); 
		});
			
//////////////////////////////////////////////////////////////////////////////////////////////////////
		function importAlert()
		{
			alert("ข้อมูลไม่ถูกต้อง กรุณาแก้ไข");
		}
		
		function importOkAlert()
		{
			window.confirm("ข้อมูลถูกต้อง ต้องการบันทึกข้อมูล.");
		}

	</script>
	<style>	
			.container{
				margin-top:20px;
			}
			.image-preview-input {
				position: relative;
				overflow: hidden;
				margin: 0px;    
				color: #333;
				background-color: #fff;
				border-color: #ccc;    
			}
			.image-preview-input input[type=file] {
				position: absolute;
				top: 0;
				right: 0;
				margin: 0;
				padding: 0;
				font-size: 20px;
				cursor: pointer;
				opacity: 0;
				filter: alpha(opacity=0);
			}
			.image-preview-input-title {
				margin-left:2px;
			}
	</style>