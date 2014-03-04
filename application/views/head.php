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

</head>

<body>

	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<?php echo anchor('ctl_main/index','<h3><p class="label label-default">CS&IT UDRU</p></h3>','class="navbar-brand logo-nav"');?>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li ><?php echo anchor('ctl_main/index','หน้าหลัก');?></li>
					<li><?php echo anchor('#',"ภาพกิจกรรม");?></li>
					<li><?php echo anchor('#','ข่าวสาร');?></li>
					<li><?php echo anchor('ctl_main/page_teacher','บุคลากร/อาจารย์');?></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container -->
	</nav>
	<!-- ////////conntainer////////////// -->
	<div class="container">