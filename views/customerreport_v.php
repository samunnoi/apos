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
	?>
    <?php 
		for( $count=0; $count<$rowtable; $count++ ){ 
			if(strcmp($customer['cutid'][$count],$check)!=0){
	?>
				<table class="table table-bordered table-hover ">
					<thead>
					<tr>
						<th class=''colspan="3"><?php echo  $customer['cutid'][$count]; ?></th>
					</tr>
					<tr>
						<th class=''>รหัสลูกค้า</th>
						<th class=''>ชื่อ</th>
						<th class=''>นามสกุล</th>
						<th class=''>เบอร์โทร</th>
						<th class=''>E-mail</th>
					</tr>
					</thead>
		<? 		
			$check=$customer['cutid'][$count];
		?>
					<tr>
						<td align='center' rowspan="2">
							<span><?php echo  $customer['cusid'][$count]; ?></span>
						</td>
						<td align='center'>
							<span><?php echo  $customer['name'][$count]; ?></span>
						</td>
						<td align='center'>
							<span><?php echo  $customer['suname'][$count]; ?></span>
						</td>
						<td align='center'>
							<span><?php echo  $customer['tel1'][$count]; ?></span>
						</td>
						<td align='center'>
							<span><?php echo  $customer['email'][$count]; ?></span>
						</td>
					</tr>
					<tr>
						<td align='' colspan="5">
						<span>ที่อยู่ : </span><span><?php echo  $customer['address1'][$count]; ?> <?php echo  $customer['province'][$count]; ?> <?php echo  $customer['post1'][$count]; ?></span>
						</td>
					</tr>
		<?	
			}else{ 
		?>
					<tr>
						<td align='center' rowspan="2">
							<span><?php echo  $customer['cusid'][$count]; ?></span>
						</td>
						<td align='center'>
							<span><?php echo  $customer['name'][$count]; ?></span>
						</td>
						<td align='center'>
							<span><?php echo  $customer['suname'][$count]; ?></span>
						</td>
						<td align='center'>
							<span><?php echo  $customer['tel1'][$count]; ?></span>
						</td>
						<td align='center'>
							<span><?php echo  $customer['email'][$count]; ?></span>
						</td>
			
					</tr>
					<tr>
					<td align='' colspan="5">
						<span>ที่อยู่ : </span><span><?php echo  $customer['address1'][$count]; ?> <?php echo  $customer['province'][$count]; ?> <?php echo  $customer['post1'][$count]; ?></span>
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