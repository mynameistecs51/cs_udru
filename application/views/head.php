<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo $title;?></title>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url().'css/bootstrap.css';?>" rel="stylesheet">

	<!-- Add custom CSS here -->
	<link href="<?php echo base_url().'css/small-business.css';?>" rel="stylesheet">

	<!-- JavaScript -->
	<script src="<?php echo base_url().'js/jquery-1.10.2.js';?>"></script>
	<script src="<?php echo base_url().'js/bootstrap.js';?>"></script>
	<script src="<?php echo base_url().'js/bootstrap.min.js';?>"></script>
	<!-- ---------- -->
	
</head>


<body>

	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<?php echo anchor('ctl_main/index','<h3><p class="label label-default">สำนักงานเจ้าคณะจังหวัดขอนแก่น</p></h3>','class="navbar-brand logo-nav"');?>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li ><?php echo anchor('ctl_main/index','หน้าหลัก');?></li>
					<li><?php echo anchor('ctl_main/page_activity',"ภาพกิจกรรม");?></li>
					<li><?php echo anchor('ctl_main/page_teacher','บุคลากร/อาจารย์');?></li>
					<li>
						<?php 
						if(empty($username)){
							//echo "<span class='btn btn-primary' data-toggle='modal' data-target='.bs-example-modal-sm'>เข้าสู่ระบบ</span>";
							echo anchor('c_login','เข้าสู่ระบบ');
						}else{
							echo  anchor('c_home/logout',$username.'logout'," class='label label-primary'");
						}
						?>		
					</li>			
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container -->
	</nav>
	<!-- ////////conntainer////////////// -->
	<div class="container">