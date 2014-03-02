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
				<a class="navbar-brand logo-nav" href="index.php"><h3><p class="label label-default">CS&IT UDRU</p></h3></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li ><?php echo anchor('#','หน้าหลัก');?></li>
					<li><?php echo anchor('#',"ภาพกิจกรรม");?></li>
					<li><?php echo anchor('l#','ข่าวสาร');?></li>
					<li><?php echo anchor('#','อาจารย์');?></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container -->
	</nav>
	<!-- ////////conntainer////////////// -->
	<div class="container">
		<div class="row  col-md-4" style="margin-right:40px;">
			<div class="panel panel-primary " >
				<div class="panel-heading"><b class="glyphicon glyphicon-user"></b>  ประธานสาขาวิชา</div>
				<div class="panel-body alert-info" style="padding:10px;" align="center">
					xxxxxxxxxx
				</div>
			</div>
		</div>
		<div class="row col-md-8" style="padding-left:3px;">
			<div class="panel panel-primary " >
				<div class="panel-heading"><b class="glyphicon glyphicon-info-sign"></b> 
					สารสนเทศสาขาวิชา
				</div>
				<div class="panel-body alert-info" style="padding:10px; word-wrap:break-word;" >
					xxxxxxxxxx
				</div>				
			</div>
			<!-- //////// infomation /// -->
			<div class="panel panel-primary" style="paddint-top:10px;" >
				<div class="panel-heading"><b class="glyphicon glyphicon-info-sign"></b> 
					สารสนเทศสาขาวิชา
				</div>
				<div class="panel-body alert-info" style="padding:10px; word-wrap:break-word;" >
					11111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111
					<br/><span class="label label-warning" style="float:right;">ผู้โพส</span> 
				</div>				
			</div>

			<div class="panel panel-primary" style="paddint-top:10px;" >
				<div class="panel-heading"><b class="glyphicon glyphicon-info-sign"></b> 
					สารสนเทศสาขาวิชา
				</div>
				<div class="panel-body alert-info" style="padding:10px; word-wrap:break-word;" >
					222
					<br/><span class="label label-warning" style="float:right;">ผู้โพส</span> 
				</div>				
			</div>

			<!-- /// end infomation /// -->

		</div>
	</body>
	</html>