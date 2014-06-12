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
	<form  method="post" action="<? echo site_url("customerreport/table"); ?>"> 					
		<select name="select" id="select" class="btn btn-default dropdown-toggle form-control">
			<option value="1">All</option>
			<?php for( $count=0; $count<$rowtable; $count++ ){ ?>
			<option <? if(isset($cutid_select)){ if($cutid_select==$cut_id1['cut_id1'][$count]){ ?>selected="selected"<? } } ?> value="<?php echo $cut_id1['cut_id1'][$count]; ?>"><?php echo $cut_id1['cut_id1'][$count]; ?></option> 
			<? } ?>
		</select> 	
		<br style='clear:both;'/>
		<br style='clear:both;'/>
		
		<button style='padding: 10px 10px;' type="submit" class="btn btn-default"><span style='padding-top: 1px;padding-bottom: 1px;' class="glyphicon glyphicon-list-alt"> VIEW </span></button>
		<a href="<? if(isset($cutid_select)){echo site_url("customerreport/repcus/".$cutid_select); }?>"> <button id="btn3" style='padding: 10px 10px;' type="button" class="btn btn-default"><span style='padding-top: 1px;padding-bottom: 1px;' class="glyphicon glyphicon-list-alt"> Excel </span></button></a>
		<a href="<? echo site_url("customerreport/repcuspdf"); ?>"> <button id="btn4" style='padding: 10px 10px;' type="button" class="btn btn-default"><span style='padding-top: 1px;padding-bottom: 1px;' class="glyphicon glyphicon-list-alt"> PDF </span></button></a>
	</form>	 
		
 