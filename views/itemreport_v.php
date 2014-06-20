
<style>
.btn-input {
   display: block;
}
 
.btn-input .btn.form-control {
    text-align: left;
}
  
.btn-input .btn.form-control .caret {
   margin-top: -1px;
   position: absolute;
   right: 10px;
   top: 50%;
}
</style>
  		
	<br/>
	<?
		$i=0;
		$check="";  
		for( $count=0; $count<$rowtable; $count++ ){ 
			if(strcmp($catalog_name['catalog_name'][$count],$check)!=0){
	?>
				<table class="table table-bordered table-hover ">
					<thead>
						<tr>
							<th class=''colspan="3"><?php echo  $catalog_name['catalog_name'][$count]; ?></th>
							<th class='' colspan="3"><?=$this->lang->line('price');?></th>
						</tr>	
						<tr>
							<th class=''><?=$this->lang->line('itemid');?></th>
							<th class=''><?=$this->lang->line('item');?></th>
							<th class=''><?=$this->lang->line('barcode');?></th>
							<th class=''><?=$this->lang->line('cash');?></th>
							<th class=''><?=$this->lang->line('member');?></th>
							<th class=''><?=$this->lang->line('vip1');?></th>
						</tr>
					</thead>
			<? 		
				$check=$catalog_name['catalog_name'][$count];
			?>
						<tr>
							<td align='center'>
								<span><?php echo  $catalog_name['itemid'][$count]; ?></span>
							</td>
							<td align='center'>
								<span><?php echo  $catalog_name['name'][$count]; ?></span>
							</td>
							<td align='center'>
								<span><?php echo  $catalog_name['barcode'][$count]; ?></span>
							</td>
							<td align='center'rowspan="2">
								<span><?php echo  $catalog_name['price'][$count]; ?></span>
							</td>
							<td align='center'rowspan="2">
								<span><?php echo  $catalog_name['price'][$count]; ?></span>
							</td>
							<td align='center'rowspan="2">
								<span><?php echo  $catalog_name['price'][$count]; ?></span>
							</td>
						</tr>
						<tr>
							<td align='' colspan="3">
								<span><?=$this->lang->line('detail');?> : </span><span><?php echo  $catalog_name['detail'][$count]; ?></span>
							</td>
						</tr>
		<?	
			}else{ 
		?>
						<tr>
							<td align='center'>
								<span><?php echo  $catalog_name['itemid'][$count]; ?></span>
							</td>
							<td align='center'>
								<span><?php echo  $catalog_name['name'][$count]; ?></span>
							</td>
							<td align='center'>
								<span><?php echo  $catalog_name['barcode'][$count]; ?></span>
							</td>
							<td align='center' rowspan="2">
								<span><?php echo  $catalog_name['price'][$count]; ?></span>
							</td>
							<td align='center'rowspan="2">
								<span><?php echo  $catalog_name['price'][$count]; ?></span>
							</td>
							<td align='center'rowspan="2">
								<span><?php echo  $catalog_name['price'][$count]; ?></span>
							</td>
						</tr>
						<tr>
							<td align='' colspan="3">
								<span><?=$this->lang->line('detail');?> : </span><span><?php echo  $catalog_name['detail'][$count]; ?></span>
							</td>
						</tr>
				
			
	<?
			}	
		} 
	?>
				</table>	
		
		
	
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
		$( document.body ).on( 'click', '.dropdown-menu li', function( event ) { 
			var $target = $( event.currentTarget );
			$target.closest( '.btn-group' )
			.find( '[data-bind="label"]' ).text( $target.text() )
			.end()
			.children( '.dropdown-toggle' ).dropdown( 'toggle' );
			return false;
		});




	</script>