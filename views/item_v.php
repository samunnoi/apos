
  		
			<br/>
			<form  method="post" action="<? echo site_url("item/searchitem"); ?>"> 
			<? if(isset($itemerror)){echo "<font color=red>".$itemerror."</font>";} ?><br>
				<div class="control-group">
				<!--<label class="control-label" for="input01">Barcode</label>-->
					<div class="input-group input-group-lg" style=''>
						<input name="name" style='padding: 10px 8px;' placeholder="Search Item" type="text" class="form-control">
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
						
						<th class='col-xs-3'>Item ID</th>
						<th class='col-xs-9'>�Թ���</th>
						
					  </tr>
					</thead>
					<tbody>
					<?php for( $count=0; $count<$rowtable; $count++ ){ ?>
					  <tr>        
						<td align='center'>
						<span><a href="<? echo site_url("item/searchitem/".$searchtable['itemid'][$count]); ?>"><?php echo $searchtable['itemid'][$count]; ?></span>
						
						</td>
						 <td  align='center'>
						 <span><?php echo $searchtable['name'][$count]; ?></span>
						 </td>
						
					  </tr>
					  <? } ?>
					</tbody>
				  </table>
					<br style='clear:both;'/>

			<? } ?>
		 
	
		  
		 <form  method="post" action="<? echo site_url("item/additem"); ?>"> 
	<div class="control-group">
	
				<button id="btn1" style='padding: 10px 10px;' type="reset" class="btn btn-default"><span style='padding-top: 1px;padding-bottom: 1px;' class="glyphicon glyphicon-plus"> ADD</span></button>
				<button id="btn2" style='padding: 10px 10px;' type="button" class="btn btn-default"><span style='padding-top: 1px;padding-bottom: 1px;' class="glyphicon glyphicon-trash"><a href="<?if(isset($itemid)){ base_url();?>delitem/<?echo $itemid; }?>"> DELETE</a></span></button>
				<button id="btn3" style='padding: 10px 10px;' type="button" class="btn btn-default"><span style='padding-top: 1px;padding-bottom: 1px;' class="glyphicon glyphicon-list-alt"> REPORT</span></button>				
			
		</div>  
		  
		<br style='clear:both;'/>
		
		<?
		
					
						
		?>
		<? if(isset($itemid_notnull)){echo "<font color=red>".$itemid_notnull."</font>";} ?>
		<? if(isset($itemid_aready)){echo "<font color=red>".$itemid_aready."</font>";} ?><br>
		<div class="input-group input-group-lg" style=''>
	<div class="input-group-btn">
			<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-pencil"></span></button>
	</div>
	<input name="itemid" style='padding: 10px 8px;'id="itemid" placeholder="Item ID" type="text" class="form-control" value="<? if(isset($itemid)){echo $itemid;}?>" maxlength="15" required>
	</div> <br style='clear:both;'/>	
		<? if(isset($barcode_notnull)){echo "<font color=red>".$barcode_notnull."</font>";} ?>
		<? if(isset($barcode_error)){echo "<font color=red>".$barcode_error."</font>";} ?><br>
	<div class="input-group input-group-lg" style=''>
	<div class="input-group-btn">
			<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-barcode"></span></button>
	</div>
	<input name="barcode" style='padding: 10px 8px;'id="barcode" placeholder="Barcode" type="text" class="form-control" value="<? if(isset($barcode)){echo $barcode;}?>" maxlength="20" required>
	</div> <br style='clear:both;'/>
	
	<? if(isset($name_notnull)){echo "<font color=red>".$name_notnull."</font>";} ?>
		<? if(isset($name_error)){echo "<font color=red>".$name_error."</font>";} ?><br>
	<div class="input-group input-group-lg" style=''>
	<div class="input-group-btn">
			<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-pencil"></span></button>
	</div>
	<input name="name" style='padding: 10px 8px;' placeholder="Name" type="text" class="form-control" value="<? if(isset($name)){echo $name;} ?>" maxlength="50" required>
	</div> <br style='clear:both;'/>
	
	
	<? if(isset($detail_notnull)){echo "<font color=red>".$detail_notnull."</font>";} ?>
		<? if(isset($datail_error)){echo "<font color=red>".$datail_error."</font>";} ?><br>
		<div class="input-group input-group-lg" style=''>
				<div class="input-group-btn">
					<button  style='padding: 10px 14px;' type="button" class="btn btn-default"><span style='padding-top: 3px;padding-bottom: 3px;' class="glyphicon glyphicon-list-alt"></span></button>
				</div>
				<input name="detail" style='padding: 10px 8px;' placeholder="Detail" type="text" class="form-control" value="<? if(isset($detail)){echo $detail;} ?>"  maxlength="255" required>
				</div><br style='clear:both;'/>	
				
				
	<div class="col-xs-6">
	<table class="table table-bordered table-hover ">
    <thead>
      <tr>
        
        <th class='col-xs-3'>������</th>
        <th class='col-xs-3'>�Ҥ�</th>
        <th class='col-xs-3'>Discount</th>
		<th class='col-xs-3'>Percent</th>
      </tr>
    </thead>
    <tbody>
      <tr>        
        <td align='center'>
		<span>�Թʴ</span>
		<span style='float:right'>
			
		</span>
		</td>
         <td  align='center'>
		 <? if(isset($price_notnull)){echo "<font color=red>".$price_notnull."</font>";} ?>
		<? if(isset($price_nav)){echo "<font color=red>".$price_nav."</font>";} ?>
		<? if(isset($price_notnum)){echo "<font color=red>".$price_notnum."</font>";} ?><br>
		<input name="price" style='padding: 10px 8px;' placeholder="Price " type="text" class="form-control" value="<? if(isset($price)){echo $price;} ?>" >
		 </td>
        <td align='center'>
		<? if(isset($discount_notnum)){echo "<font color=red>".$discount_notnum."</font>";} ?>
		<? if(isset($discount_nav)){echo "<font color=red>".$discount_nav."</font>";} ?><br>
		<input name="discount" style='padding: 10px 8px;' placeholder="Discount " type="text" class="form-control" value="<? if(isset($discount)){echo $discount;} ?>" >
		</td>
		<td align='center'>
		<? if(isset($percent_notnum)){echo "<font color=red>".$percent_notnum."</font>";} ?>
		<? if(isset($percent_nav)){echo "<font color=red>".$percent_nav."</font>";} ?><br>
		<input name="percent" style='padding: 10px 8px;' placeholder="Percent " type="text" class="form-control" value="<? if(isset($percent)){echo $percent;} ?>" >
		</td>
      </tr>
	 
      
	  
    </tbody>
  </table></div><br style='clear:both;'/>
	
		
	
            <!--<label class="control-label" for="input01">Barcode</label>-->
				
		
				<div class="col-xs-6">
	<table class="table table-bordered table-hover ">
    <thead>
      <tr>
        
        
        <th class='col-xs-3'>�������Թ���</th>
	
		<th class='col-xs-3'>��������ѡ</th>
		
      </tr>
    </thead>
    <tbody>
      <tr>        
       
         <td  align='center'>
	<input type="text" name="catalog" list="productName"/>
<datalist id="productName" name="catalog" >
    <option value="Pen">Pen</option>
    <option value="Pencil">Pencil</option>
    <option value="Paper">Paper</option>
</datalist>
		 </td>
        <!--<td align='center'>
	
		<button type="button" class="btn btn-default btn-sm">
				<span class="glyphicon glyphicon-list-alt"></span> 
			</button>
		</td> -->
		<td align='center'>
		
		
		<input type="text" name="master" list="productName"/>
<datalist id="productName" name="master" >
    <option value="Pen">Pen</option>
    <option value="Pencil">Pencil</option>
    <option value="Paper">Paper</option>
</datalist>

		</td>
		
      </tr>

      
	  
    </tbody>
  </table></div><br style='clear:both;'/>	


		
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