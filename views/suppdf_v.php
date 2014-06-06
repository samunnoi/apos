<?php

ob_start();
?>
<style type="text/css">

</style>
<page backtop="20mm" backbottom="14mm" backleft="0mm" backright="0mm" >
       <page_header>
       	<table cellspacing="0" style="width: 100%;">
        <tr>
            <td style="width: 10%;">
                
            </td>
            <td style="width: 80%; text-align: center; text-decoration: underline; font-weight: bold; font-size: 20pt;">
                <span style="font-size: 10pt"><br></span>
                Supplier DATA
            </td>
            <td style="width: 10%;">
            </td>
        </tr>
    </table>
    <table cellspacing="0" style="width: 100%; border: solid 2px #000000;">
		<tr>
		
			<th style="width: 20%; border: solid 1px #000000; text-align: center;">SupplierID</th>
			<th style="width: 20%; border: solid 1px #000000; text-align: center;">Name</th>
			<th style="width: 20%; border: solid 1px #000000; text-align: center;">Telephone</th>
			<th style="width: 20%; border: solid 1px #000000; text-align: center;">Sellman</th>
			<th style="width: 20%; border: solid 1px #000000; text-align: center;">Account</th>
			
		</tr>
		
	</table>
    </page_header>

	<table cellspacing="0" style="width: 100%; border: solid 1px #000000;">
		<?php 
		
		for( $count=0; $count<$rowtable; $count++ ){ 
			
			
			?>
		<tr>
		
			<th style="width: 20%; border: solid 1px #000000; text-align: center;"><?php echo  $supplier['supid'][$count]; ?></th>
			<th style="width: 20%; border: solid 1px #000000; text-align: center;"><?php echo  $supplier['sup_name'][$count]; ?></th>
			<th style="width: 20%; border: solid 1px #000000; text-align: center;"><?php echo  $supplier['tell'][$count]; ?></th>
			<th style="width: 20%; border: solid 1px #000000; text-align: center;"><?php echo  $supplier['sellman'][$count]; ?></th>
			<th style="width: 20%; border: solid 1px #000000; text-align: center;"><?php echo  $supplier['account_bank'][$count]; ?></th>
		</tr>
		
		<tr>	
			<th></th>
			<th style="border: solid 0px #000000; text-align: center; colspan:5;"><?php echo  $supplier['address1'][$count]; ?></th>
		</tr>
	<? 	
		
		} 
	?>	
	</table>
    
</page>
<?php
    $content = ob_get_clean();

    
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr', true, 'UTF-8', 0);
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('Supplier.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

