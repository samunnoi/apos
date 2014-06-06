<?php

ob_start();
$check="";
?>
<style type="text/css">

</style>
<page backtop="20mm" backbottom="14mm" backleft="10mm" backright="10mm" >
       <page_header>
       	<table cellspacing="0" style="width: 100%;">
        <tr>
            <td style="width: 10%;">
                
            </td>
            <td style="width: 80%; text-align: center; text-decoration: underline; font-weight: bold; font-size: 20pt;">
                <span style="font-size: 10pt"><br></span>
                Customer DATA
            </td>
            <td style="width: 10%;">
            </td>
        </tr>
    </table>
   
    </page_header>

	
		<?php 
		
		for( $count=0; $count<$rowtable; $count++ ){ 
				if(strcmp($customer['cutid'][$count],$check)!=0){
		?><br>Type Of Customer : <?php echo  $customer['cutid'][$count]; ?>
		 <table cellspacing="0" style="width: 100%; border: solid 2px #000000;">
		<tr>
		
			<th style="width: 20%; border: solid 1px #000000; text-align: center;">Custmoer ID</th>
			<th style="width: 20%; border: solid 1px #000000; text-align: center;">Name</th>
			<th style="width: 20%; border: solid 1px #000000; text-align: center;">Surname</th>
			<th style="width: 20%; border: solid 1px #000000; text-align: center;">Telephone</th>
			<th style="width: 20%; border: solid 1px #000000; text-align: center;">E-mail</th>
		
		</tr>
		
	</table>
		<? 		$check=$customer['cutid'][$count];
		?>
	<table cellspacing="0" style="width: 100%; border: solid 1px #000000;">
		<tr>
		
			<th style="width: 20%; border: solid 1px #000000; text-align: center;"><?php echo  $customer['cusid'][$count]; ?></th>
			<th style="width: 20%; border: solid 1px #000000; text-align: center;"><?php echo  $customer['name'][$count]; ?></th>
			<th style="width: 20%; border: solid 1px #000000; text-align: center;"><?php echo  $customer['suname'][$count]; ?></th>
			<th style="width: 20%; border: solid 1px #000000; text-align: center;"><?php echo  $customer['tel1'][$count]; ?></th>
			<th style="width: 20%; border: solid 1px #000000; text-align: center;"><?php echo  $customer['email'][$count]; ?></th>
			
		</tr>
		
		<tr>	
			<th style="text-align: center;">Address : </th>
			<th style="border: solid 0px #000000; text-align: center; colspan:5;"><?php echo  $customer['address1'][$count]; ?></th>
		</tr>
	</table>
	<? 	
		}else{
	?>	
	<table cellspacing="0" style="width: 100%; border: solid 1px #000000;">
		<tr>
		
			<th style="width: 20%; border: solid 1px #000000; text-align: center;"><?php echo  $customer['cusid'][$count]; ?></th>
			<th style="width: 20%; border: solid 1px #000000; text-align: center;"><?php echo  $customer['name'][$count]; ?></th>
			<th style="width: 20%; border: solid 1px #000000; text-align: center;"><?php echo  $customer['suname'][$count]; ?></th>
			<th style="width: 20%; border: solid 1px #000000; text-align: center;"><?php echo  $customer['tel1'][$count]; ?></th>
			<th style="width: 20%; border: solid 1px #000000; text-align: center;"><?php echo  $customer['email'][$count]; ?></th>
		</tr>
		
		<tr>	
			<th style="text-align: center;">Address : </th>
			<th style="border: solid 0px #000000; text-align: center; colspan:5;"><?php echo  $customer['address1'][$count]; ?></th>
		</tr>
	</table>
		
	<?
		}
		} 
	?>	
	
    
</page>
<?php
    $content = ob_get_clean();

    
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr', true, 'UTF-8', 0);
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('customer.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

