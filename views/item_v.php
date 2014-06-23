
  		
	<br/>
	<form  method="post" action="<? echo site_url("item/searchitem"); ?>" > 
	<? if(isset($itemerror)){echo "<font color=red>".$itemerror."</font>";} ?><br>
		<div class="control-group">
		<!--<label class="control-label" for="input01">Barcode</label>-->
			<div class="input-group input-group-lg" style=''>
				<input name="name" style='padding: 10px 8px;' placeholder="<?=$this->lang->line('search');?>" type="text" class="form-control">
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
					<th class='col-xs-3'><?=$this->lang->line('itemid');?></th>
					<th class='col-xs-9'><?=$this->lang->line('product');?></th>
				</tr>
			</thead>
			<tbody>
			<?php for( $count=0; $count<$rowtable; $count++ ){ ?>
				<tr>        
					<td align='center'>
					<span><a href="<? echo site_url("item/searchitemall/".$searchtable['itemid'][$count]); ?>"><?php echo $searchtable['itemid'][$count]; ?></span>
					</td>
					<td  align='center'>
						<span><?php echo $searchtable['name'][$count]; ?></span>
					</td>	
				</tr>
			<? } ?>
			</tbody>
		</table>
		<br style='clear:both;'/>

	<? 
	} 
	?>
		 
	
		 
	<form  method="post" action="<? echo site_url("item/additem");?>" enctype="multipart/form-data" > 
		<div class="control-group">
			<button id="btn1" style='padding: 10px 10px;' type="reset" class="btn btn-default"><span style='padding-top: 1px;padding-bottom: 1px;' class="glyphicon glyphicon-plus"> <?=$this->lang->line('add');?> </span></button>
			<a href="<? if(isset($itemid)){echo site_url("item/delitem/".$itemid); } ?>"><button id="btn2" style='padding: 10px 10px;' type="button" class="btn btn-default"><span style='padding-top: 1px;padding-bottom: 1px;' class="glyphicon glyphicon-trash"> <?=$this->lang->line('delete');?> </span></button></a>
			<a href="<?echo site_url("itemreport");?>"> <button id="btn3" style='padding: 10px 10px;' type="button" class="btn btn-default"><span style='padding-top: 1px;padding-bottom: 1px;' class="glyphicon glyphicon-list-alt"> <?=$this->lang->line('report');?> </span></button></a>				
		</div>  
		<br style='clear:both;'/>
		
		<span id="sitemid"></span>
		<? if(isset($itemid_notnull)){echo "<font color=red>".$itemid_notnull."</font>";} ?>
		<? if(isset($itemid_aready)){echo "<font color=red>".$itemid_aready."</font>";} ?><br>
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-pencil"></span></button>
			</div>
			<input name="itemid" style='padding: 10px 8px;'id="itemid" placeholder="<?=$this->lang->line('itemid');?>" type="text" class="form-control" value="<? if(isset($itemid)){echo $itemid;}?>" maxlength="15" required>
		</div> 
		<br style='clear:both;'/>	
		
		
		<? if(isset($barcode_notnull)){echo "<font color=red>".$barcode_notnull."</font>";} ?>
		<? if(isset($barcode_error)){echo "<font color=red>".$barcode_error."</font>";} ?><br>
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-barcode"></span></button>
			</div>
			<input name="barcode" style='padding: 10px 8px;'id="barcode" placeholder="<?=$this->lang->line('barcode');?>" type="text" class="form-control" value="<? if(isset($barcode)){echo $barcode;}?>" maxlength="20" required>
		</div> 
		<br style='clear:both;'/>
		
	
		<? if(isset($name_notnull)){echo "<font color=red>".$name_notnull."</font>";} ?>
		<? if(isset($name_error)){echo "<font color=red>".$name_error."</font>";} ?><br>
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-pencil"></span></button>
			</div>
			<input name="name" style='padding: 10px 8px;' placeholder="<?=$this->lang->line('name');?>" type="text" class="form-control" value="<? if(isset($name)){echo $name;} ?>" maxlength="50" required>
		</div> 
		<br style='clear:both;'/>
	

		<? if(isset($detail_notnull)){echo "<font color=red>".$detail_notnull."</font>";} ?>
		<? if(isset($datail_error)){echo "<font color=red>".$datail_error."</font>";} ?><br>
		<div class="input-group input-group-lg" style=''>
			<div class="input-group-btn">
				<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-list-alt"></span></button>
			</div>
			<input name="detail" style='padding: 10px 8px;' placeholder="<?=$this->lang->line('detail');?>" type="text" class="form-control" value="<? if(isset($detail)){echo $detail;} ?>"  maxlength="255" required>
		</div>
		<br style='clear:both;'/>	
				
				
		<div class="col-xs-12">
			<table class="table table-bordered table-hover ">
				<thead>
					<tr>
						<th class='col-xs-3'><?=$this->lang->line('type');?></th>
						<th class='col-xs-3'><?=$this->lang->line('price');?></th>
						<th class='col-xs-3'><?=$this->lang->line('discount');?></th>
						<th class='col-xs-3'><?=$this->lang->line('percent');?></th>
					</tr>
				</thead>
				<tbody>
					<tr>        
						<td align='center'>
							<span><?=$this->lang->line('cash');?></span>
							<span style='float:right'></span>
						</td>
						<td  align='center'>
							<? if(isset($price_notnull)){echo "<font color=red>".$price_notnull."</font>";} ?>
							<? if(isset($price_nav)){echo "<font color=red>".$price_nav."</font>";} ?>
							<? if(isset($price_notnum)){echo "<font color=red>".$price_notnum."</font>";} ?><br>
							<input name="price" style='padding: 10px 8px;' placeholder="<?=$this->lang->line('price');?> " type="text" class="form-control" value="<? if(isset($price)){echo $price;} ?>" >
						</td>
						<td align='center'>
							<? if(isset($discount_notnum)){echo "<font color=red>".$discount_notnum."</font>";} ?>
							<? if(isset($discount_nav)){echo "<font color=red>".$discount_nav."</font>";} ?><br>
							<input name="discount" style='padding: 10px 8px;' placeholder="<?=$this->lang->line('discount');?> " type="text" class="form-control" value="<? if(isset($discount)){echo $discount;} ?>" >
						</td>
						<td align='center'>
							<? if(isset($percent_notnum)){echo "<font color=red>".$percent_notnum."</font>";} ?>
							<? if(isset($percent_nav)){echo "<font color=red>".$percent_nav."</font>";} ?><br>
							<input name="percent" style='padding: 10px 8px;' placeholder="<?=$this->lang->line('percent');?> " type="text" class="form-control" value="<? if(isset($percent)){echo $percent;} ?>" >
						</td>
				  </tr> 
				</tbody>
			</table>
		</div>
		<br style='clear:both;'/>
	
		
		<div class="col-xs-12">
			<table class="table table-bordered table-hover ">
			<thead>
			  <tr>
				
				
				<th class='col-xs-3'><?=$this->lang->line('type');?></th>
			
				<th class='col-xs-3'><?=$this->lang->line('master');?></th>
				
			  </tr>
			</thead>
			<tbody>
				<tr>        
					<td  align='center'>
						<input type="text" name="catalog" value="<? if(isset($catalog_name)){echo $catalog_name;} ?>"  list="productName"/>
						<datalist id="productName" name="catalog" >
							<option value="Pen">Pen</option>
							<option value="Pencil">Pencil</option>
							<option value="Paper">Paper</option>
						</datalist>
					</td>
					<td align='center'>		
						<input type="text" name="master" value="<? if(isset($master_catalog)){echo $master_catalog;} ?>" list="productName"/>
						<datalist id="productName" name="master" >
							<option value="Pen">Pen</option>
							<option value="Pencil">Pencil</option>
							<option value="Paper">Paper</option>
						</datalist>
					</td>
				
					</tr>
				</tbody>
			</table>
		</div>
		<br style='clear:both;'/>	
  
		<div class="input-group image-preview">
            <input type="text" class="form-control image-preview-filename" > <!-- don't give a name === doesn't send on POST/GET -->
            <span class="input-group-btn">
				<button type="button" class="btn btn-default image-preview-clear" style="display:none;">
					<span class="glyphicon glyphicon-remove"></span> Clear
                </button>
                <!-- image-preview-input -->
				<div class="btn btn-default image-preview-input">
					<span class="glyphicon glyphicon-folder-open"></span>
					<span class="image-preview-input-title">Browse</span>
					<input id="myfile" name="myfile"  type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
				</div>	
            </span>
        </div>
		<br style='clear:both;'/>	

		<input type="hidden" name="status" id="actionupdate" value="add">
		<input type="hidden" name="olditemid" id="oldid" value="<? if(isset($itemid)){echo $itemid;}?>">
		<div align='right'>
			<button style='width:20%;' class="btn btn-lg btn-primary" type="submit"  OnClick="JavaScript:fncAlert();"><?=$this->lang->line('save');?></button>
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



/*---------------------------------------------   ----------------------------------------------------  */		
		var isDirty = false;
		
		if($('#itemid').val()!=""){
		$("input[type='text']").change(function(){
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
/* ----------------------------------------------------------------------------------------------------------------------------------------------- */

		$(document).on('click', '#close-preview', function(){ 
			$('.image-preview').popover('hide');
			// Hover befor close the preview
			$('.image-preview').hover(
				function () {
				   $('.image-preview').popover('show');
				}, 
				 function () {
				   $('.image-preview').popover('hide');
				}
			);    
		});

		$(function() {
			// Create the close button
			var closebtn = $('<button/>', {
				type:"button",
				text: 'x',
				id: 'close-preview',
				style: 'font-size: initial;',
			});
			closebtn.attr("class","close pull-right");
			// Set the popover default content
			$('.image-preview').popover({
				trigger:'manual',
				html:true,
				title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
				content: "There's no image",
				placement:'bottom'
			});
			// Clear event
			$('.image-preview-clear').click(function(){
				$('.image-preview').attr("data-content","").popover('hide');
				$('.image-preview-filename').val("");
				$('.image-preview-clear').hide();
				$('.image-preview-input input:file').val("");
				$(".image-preview-input-title").text("Browse"); 
			}); 
			// Create the preview image
			$(".image-preview-input input:file").change(function (){     
				var img = $('<img/>', {
					id: 'dynamic',
					width:250,
					height:200
				});      
				var file = this.files[0];
				var reader = new FileReader();
				// Set preview image into the popover data-content
				reader.onload = function (e) {
					$(".image-preview-input-title").text("Change");
					$(".image-preview-clear").show();
					$(".image-preview-filename").val(file.name);            
					img.attr('src', e.target.result);
					$(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
				}        
				reader.readAsDataURL(file);
			});  
		});

///////////////////////////////////////////////////////////////////////////////////
		function clickupload() {
			if($("#myfile").val()==""){
				$('#msg').html('Plase Wait.');					
				$('#upload_process').empty();	
				return false;		
			} else {	
				$('#msg').html('No file.');	
				return true ;				
			}
		}

		function stopUpload(success, error){
			var response='';
			if (success == 1){
				alert("Upload Success");
			} else {
				if (error == 1) {
					alert("Upload fail");
					$('#msg').empty();	
					
				}
			}

			$('#frmUpload')[0].reset();
			return true ;
				  
		}
/////////////////////////////////////////////////////////////////////////////////////////////////////////  เช็คค่า itemid ว่าซ้ำหรือไม่ 
			$(document).ready(function(){
				if($('#itemid').val()==""){
				$("#itemid").focusout(function(){
					$("#sitemid").empty();		
						$.ajax({ 
						url: "<?php echo base_url()."index.php/item/validateitemid";?>",
						type: "POST",
						data: 'sitemid=' +$("#itemid").val()
						})
						.success(function(result) { 
							var obj = jQuery.parseJSON(result);
							if(obj != ''){
								$.each(obj, function(key, inval) {
								if($("#itemid").val() == inval["itemid"]){
								   $("#sitemid").html(" <font color='red'>ItemID is already.</font>");
								}
								});					
							}
						});
				});
				}
			});

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