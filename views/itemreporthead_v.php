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
	<form  method="post" action="<? echo site_url("itemreport/table"); ?>"> 					
		<select name="select" id="select" class="btn btn-default dropdown-toggle form-control">
			<option value="1"><?=$this->lang->line('all');?></option>
		<?php 
			for( $count=0; $count<$rowtable; $count++ ){ 
		?>
				<option <? if(isset($catalog_select)){if($catalog_select==$catalog_name1['catalog_name1'][$count]){ ?>selected="selected"<? } } ?> value="<?php echo $catalog_name1['catalog_name1'][$count]; ?>"><?php echo $catalog_name1['catalog_name1'][$count]; ?></option> 
		<? 
			} 
		?>
		</select> 	
		<br style='clear:both;'/>
		<br style='clear:both;'/>
		
		<button style='padding: 10px 10px;' type="submit" class="btn btn-default"><span style='padding-top: 1px;padding-bottom: 1px;' class="glyphicon glyphicon-list-alt"> <?=$this->lang->line('view');?> </span></button>
		<a href="<? if(isset($catalog_select)){echo site_url("itemreport/repitem/".$catalog_select); }?>"> <button id="btn3" style='padding: 10px 10px;' type="button" class="btn btn-default"><span style='padding-top: 1px;padding-bottom: 1px;' class="glyphicon glyphicon-list-alt"> Excel </span></button></a>
		<a href="<? echo site_url("itemreport/repitempdf"); ?>"> <button id="btn4" style='padding: 10px 10px;' type="button" class="btn btn-default"><span style='padding-top: 1px;padding-bottom: 1px;' class="glyphicon glyphicon-list-alt"> PDF </span></button></a>
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
		$( document.body ).on( 'click', '.dropdown-menu li', function( event ) { 
			var $target = $( event.currentTarget );
			$target.closest( '.btn-group' )
			.find( '[data-bind="label"]' ).text( $target.text() )
			.end()
			.children( '.dropdown-toggle' ).dropdown( 'toggle' );
			return false;
		});

	</script>