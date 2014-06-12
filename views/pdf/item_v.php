<?php

ob_start();
$check="";
?>
<style type="text/css">

</style>
	<page backtop="20mm" backbottom="14mm" backleft="10mm" backright="5mm" >
		<page_header>
			<table cellspacing="0" style="width: 100%;">
				<tr>
					<td style="width: 10%;">	
					</td>
					<td style="width: 80%; text-align: center; text-decoration: underline; font-weight: bold; font-size: 20pt;">
						<span style="font-size: 10pt"><br></span>
						Item DATA
					</td>
					<td style="width: 10%;">
					</td>
				</tr>
			</table>
		</page_header>
		<?php 
			for( $count=0; $count<$rowtable; $count++ ){ 
				if(strcmp($catalog_name['catalog_name'][$count],$check)!=0){
		?>
					<br>Type Of Item : <?php echo  $catalog_name['catalog_name'][$count]; ?>
					<table cellspacing="0" style="width: 100%; border: solid 2px #000000;">
						<tr>
							<th style="width: 16%; border: solid 1px #000000; text-align: center;">Item ID</th>
							<th style="width: 16%; border: solid 1px #000000; text-align: center;">Name</th>
							<th style="width: 16%; border: solid 1px #000000; text-align: center;">Barcode</th>
							<th style="width: 16%; border: solid 1px #000000; text-align: center;">Cash</th>
							<th style="width: 16%; border: solid 1px #000000; text-align: center;">Member</th>
							<th style="width: 16%; border: solid 1px #000000; text-align: center;">VIP</th>
						</tr>
			
					</table>
				<? 		
					$check=$catalog_name['catalog_name'][$count];
				?>
					<table cellspacing="0" style="width: 100%; border: solid 1px #000000;">
						<tr>
							<th style="width: 16%; border: solid 1px #000000; text-align: center;"><?php echo  $catalog_name['itemid'][$count]; ?></th>
							<th style="width: 16%; border: solid 1px #000000; text-align: center;"><?php echo  $catalog_name['name'][$count]; ?></th>
							<th style="width: 16%; border: solid 1px #000000; text-align: center;"><?php echo  $catalog_name['barcode'][$count]; ?></th>
							<th style="width: 16%; border: solid 1px #000000; text-align: center;"><?php echo  $catalog_name['price'][$count]; ?></th>
							<th style="width: 16%; border: solid 1px #000000; text-align: center;"><?php echo  $catalog_name['price'][$count]; ?></th>
							<th style="width: 16%; border: solid 1px #000000; text-align: center;"><?php echo  $catalog_name['price'][$count]; ?></th>
						</tr>
						<tr>	
							<th style="text-align: center;">Detail : </th>
							<th style="border: solid 0px #000000; text-align: center; colspan:5;"><?php echo  $catalog_name['detail'][$count]; ?></th>
						</tr>
					</table>
			<? 	
				}else{
			?>	
					<table cellspacing="0" style="width: 100%; border: solid 1px #000000;">
						<tr>
							<th style="width: 16%; border: solid 1px #000000; text-align: center;"><?php echo  $catalog_name['itemid'][$count]; ?></th>
							<th style="width: 16%; border: solid 1px #000000; text-align: center;"><?php echo  $catalog_name['name'][$count]; ?></th>
							<th style="width: 16%; border: solid 1px #000000; text-align: center;"><?php echo  $catalog_name['barcode'][$count]; ?></th>
							<th style="width: 16%; border: solid 1px #000000; text-align: center;"><?php echo  $catalog_name['price'][$count]; ?></th>
							<th style="width: 16%; border: solid 1px #000000; text-align: center;"><?php echo  $catalog_name['price'][$count]; ?></th>
							<th style="width: 16%; border: solid 1px #000000; text-align: center;"><?php echo  $catalog_name['price'][$count]; ?></th>
						</tr>
						<tr>	
							<th style="text-align: center;">Detail : </th>
							<th style="border: solid 0px #000000; text-align: center; colspan:5;"><?php echo  $catalog_name['detail'][$count]; ?></th>
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
        $html2pdf->Output('item.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

