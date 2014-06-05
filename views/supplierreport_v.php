
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
		

		<a href="<? echo site_url("supplierreport/repsup"); ?>"> <button id="btn3" style='padding: 10px 10px;' type="button" class="btn btn-default"><span style='padding-top: 1px;padding-bottom: 1px;' class="glyphicon glyphicon-list-alt"> Excel </span></button></a>
		<br style='clear:both;'/>
		<br style='clear:both;'/>
		<table class="table table-bordered table-hover ">
				<thead>
				<tr>
				<th class=''>รหัสผู้ส่งสินค้า</th>
				<th class=''>ชื่อผู้ส่งสินค้า</th>
				<th class=''>เบอร์โทร</th>
				<th class=''>พนักงานขาย</th>
				<th class=''>Bank Account</th>
		
				</tr>
				</thead>
    
        <?php for( $count=0; $count<$rowtable; $count++ ){ ?>
		
		
				<tr>
				<td align='center' rowspan="2">
				<span><?php echo  $supplier['supid'][$count]; ?></span>
				</td>
				<td align='center'>
				<span><?php echo  $supplier['sup_name'][$count]; ?></span>
				</td>
				<td align='center'>
				<span><?php echo  $supplier['tell'][$count]; ?></span>
				</td>
				<td align='center'>
				<span><?php echo  $supplier['sellman'][$count]; ?></span>
				</td>
				<td align='center'>
				<span><?php echo  $supplier['account_bank'][$count]; ?></span>
				</td>
		
				</tr>
				<tr>
				
				<td align='' colspan="5">
				<span>ที่อยู่ : </span><span><?php echo  $supplier['address1'][$count]; ?> </span>
				</td>
				</tr>
		<?	
		}
		?>
		</table>

	
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