<html lang="en">
<head>
    <meta charset="TIS-620">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Project</title>

    <!-- Bootstrap core CSS -->
    
     <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
   		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/slidePushMenus/default.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/slidePushMenus/component.css" />
		<script src="<?php echo base_url(); ?>js/slidePushMenus/modernizr.custom.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/nav.css" />	
		
	
    <!-- Custom styles for this template -->
   

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script type='text/javascript'>
	var now_line =0; // ไว้ check ว่า ตอนนี้ lineไหน ใน group เปิดไว้อยู่
	var now_group_id =0; // ไว้ check ว่า ตอนนี้ lineไหน ใน group เปิดไว้อยู่
		function customer_dettail(){
		
		 $('#customer_detail').slideToggle('slow', function() {
				if ($(this).is(':visible')) {
						  $('#dettail_button').html("&nbsp;Hide&nbsp;");
				} else {
					$('#dettail_button').html("Detail");
				}        
			});       
		}
		function product_search(){
		
		 $('#product_search').slideToggle('slow');       
		}
		function show_list(line,group_id){
			//alert(now_line+','+line);
			if(now_line !=line){ 	//หากกดแล้วเป็น ไม่ใช่line เดิม ให้ปิด แล้วเปิดใหม่
				$('.list-group').slideUp('fast');
				now_line =line;	
			}
			
			//alert(now_group_id+','+group_id);	
						
			if(now_group_id==group_id){	//เปิดได้ตัวมันเอง ให้ปิด			
			$('#line'+line).slideToggle('fast');			
			}else{
			
			$('#line'+line).slideDown('fast');
			}
			now_group_id=group_id; 	
		}
	function select_product(){
	$('.list-group').slideUp('fast');
	}
	</script>
  </head>
<style>
.glyphicon-trash{
margin-left:-3px;
margin-right:-3px;
}
.navbar-brand
{
    position: absolute;
    width: 100%;
    left: 0;
    text-align: center;
    margin: auto;
}
#product_search {  
    height: 300px;
    overflow: scroll;
}
.sub_menu{
	width:100%;
}
.span_menu{
padding:4px;
}
</style>

  <body class="cbp-spmenu-push">  
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
			<h4 class='menu-left'><img style='width:45px; height:45px;' src="<?php echo base_url(); ?>image/user.jpg"  class="img-rounded"> Username</h4>
				<a href="<? echo site_url("item"); ?>">Item</a>
			<a href="<? echo site_url("customer"); ?>">Customer</a>
			<a href="<? echo site_url("supplier"); ?>">Supplier</a>
			<a href="<? echo site_url("user"); ?>">User</a>
			
			<a href="<? echo site_url("");?>">Receipt</a>
			<a onclick='$("#l_sub").slideToggle("fast");' href="#">sub menu1 <span class='glyphicon glyphicon-chevron-down'></span></a>			
			<ul id='l_sub' style='display:none;'>
				<li><a href="#">sub menu1</a></li>								
				<li><a href="#">sub menu1</a></li>								
				<li><a href="#">sub menu1</a></li>								
								
			 </ul>
			<a href="#">menu1</a> 
		</nav>
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
			<h4>Setting</h4>
			<a href="<? echo site_url("welcome/logout"); ?>">log out</a>
			<a href="#">menu1</a>
			<a href="#">menu1</a>
			<a onclick='$("#r_sub").slideToggle("fast");' href="#">sub menu1 <span class='glyphicon glyphicon-chevron-down'></span></a>			
			<ul id='r_sub' style='display:none;'>
				<li><a href="#">sub menu1</a></li>								
				<li><a href="#">sub menu1</a></li>								
				<li><a href="#">sub menu1</a></li>								
								
			 </ul>
			<a href="#">menu1</a> 
		</nav>
		
	<div class="navbar navbar-inverse navbar-static-top" role="navigation">
  
		  <div class="container">
				
				
				 <a class="navbar-brand" href="#">ใบเสร็จ</a>
				 <button id="showLeftPush"  type="button" style=''  class="navbar-toggle pull-left" > 
					<span class="sr-only">Toggle navigation</span>
						<img style="width:20px; height:14px;" src="<?php echo base_url(); ?>image/icon-bar.png" />
				</button>
			<button id='showRightPush' type="button" style=' display: block; margin-right:0px;padding: 6px 13px;' class="navbar-toggle pull-right" > 
				<span class="sr-only">Toggle navigation</span>
					<img style="width:20px; height:20px;" src="<?php echo base_url(); ?>image/glyphicon-cog.png" />
			</button>
			
		  </div>
	</div>
	<div class='row'>
	<div class='hidden-xs col-sm-3 col-md-3 col-lg-2' style='float:left;height:100%;'>	
		<nav class="cbp-spmenu cbp-vertical">
			<h4 class='menu-left'><img style='width:45px; height:45px;' src="<?php echo base_url(); ?>image/user.jpg"  class="img-rounded"> Username</h4>
			<a href="<? echo site_url("item"); ?>">Item</a>
			<a href="<? echo site_url("customer"); ?>">Customer</a>
			<a href="<? echo site_url("supplier"); ?>">Supplier</a>
			<a href="<? echo site_url("user"); ?>">User</a>
			
			<a href="<? echo site_url("");?>">Receipt</a>
			<a onclick='$("#fix_sub").slideToggle("fast");' href="#">sub menu1 <span class='glyphicon glyphicon-chevron-down'></span></a>			
			<ul id='fix_sub' style='display:none;'>
				<li><a href="#">sub menu1</a></li>								
				<li><a href="#">sub menu1</a></li>								
				<li><a href="#">sub menu1</a></li>								
								
			 </ul>
		</nav>
	</div>
	<div class="main col-sm-9 col-md-9 col-lg-10">	
		<div class='set_center'>
	<div class="control-group">