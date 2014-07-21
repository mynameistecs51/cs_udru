<?php $this->load->view("head");?>
<!-- load script -->
<link rel="stylesheet" href="<?php echo base_url().'css/style.css';?>" type="text/css" media="screen" />
<script type="text/javascript">var _siteRoot='index.html',_root='index.html';</script>
<script type="text/javascript" src="<?php echo base_url().'js/jquery.js';?>"></script>
<script type="text/javascript" src="<?php echo base_url().'js/scripts.js';?>"></script>
<!-- end load script -->

<div class="row  col-md-4" style="margin-right:40px;">
	<div class="panel panel-primary " >
		<div class="panel-heading"><b class="glyphicon glyphicon-user"></b>  ประธานสาขาวิชา</div>
		<div class="panel-body alert-info" style="padding:10px;" align="center">
			<div class="panel panel-primary " align="center">
				<?php 		
				foreach ($teacher as $key => $value) {
					if($value->teacher_number == '1'){
						echo anchor($value->teacher_link,'<div class="panel-body" >
							<img src=" '.base_url().'image/pict_teacher/'.$value->teacher_pict.'.jpg"  class="img-rounded" style="width:180px; hight:140px;">     
						</div>
						<div class="panel-footer" align="center">'.$value->teacher_preName.' '.$value->teacher_name.'<br/>ประธานสาขาวิชา'.'</div>');
					}
				}
				?>  
			</div>
		</div>
	</div>
	<!-- link ที่เกี่ยวข้อง -->
	<div class="panel panel-primary " >
		<div class="panel-heading"><b class="glyphicon glyphicon-tasks"></b>  ลิงค์ที่เกี่ยวข้อง</div>
		<div class="panel-body alert-info" style="padding:10px;" align="left">
			<?php echo anchor("xx","xxxxxxxxxxxxxx");?> <br/>
			<?php echo anchor("xx","yyyyyyyyyyyyyy");?> 
		</div>
	</div>
	<!-- end link info -->
</div>

<!-- //////////////  post news ///////////// -->
<div class="row col-md-8" >	
	<!-- picture activity -->
	<div class="panel panel-primary">

		<div id="header">
			<div class="wrap " >
				<div id="slide-holder" >
					<div id="slide-runner" >
						<a href=""><img id="slide-img-1" src="<?php echo base_url().'image/pict_gallery/nature-photo.png';?>" class="slide" alt="" /></a>
						<a href=""><img id="slide-img-2" src="<?php echo base_url().'image/pict_gallery/nature-photo1.png';?>" class="slide" alt="" /></a>
						<a href=""><img id="slide-img-3" src="<?php echo base_url().'image/pict_gallery/nature-photo2.png';?>" class="slide" alt="" /></a>
						<a href=""><img id="slide-img-4" src="<?php echo base_url().'image/pict_gallery/nature-photo3.png';?>" class="slide" alt="" /></a>
						<a href=""><img id="slide-img-5" src="<?php echo base_url().'image/pict_gallery/nature-photo4.png';?>" class="slide" alt="" /></a>
						<a href=""><img id="slide-img-6" src="<?php echo base_url().'image/pict_gallery/nature-photo4.png';?>" class="slide" alt="" /></a>
						<a href=""><img id="slide-img-7" src="<?php echo base_url().'image/pict_gallery/nature-photo6.png';?>" class="slide" alt="" /></a> 
						<div id="slide-controls">
							<p id="slide-client" class="text"><strong>post: </strong><span></span></p>
							<p id="slide-desc" class="text"></p>
							<p id="slide-nav"></p>
						</div>
					</div>
					<!--content featured gallery here -->
				</div>
				<script type="text/javascript">

					if(!window.slider) var slider={};slider.data=[{"id":"slide-img-1","client":"nature beauty","desc":"nature beauty photography"},{"id":"slide-img-2","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-3","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-4","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-5","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-6","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-7","client":"nature beauty","desc":"add your description here"}];
				</script>
			</div>
		</div>
	</div><!-- //header -->
	<!-- end picture activity -->

	<?php 
	foreach ($teacher_news as $key_news => $value_news) {
		echo "<div class='panel panel-primary ' >";		
			echo  '<div class="panel-heading"><b class="glyphicon glyphicon-info-sign"></b>  '.$value_news ->news_head.' '.$value_news->news_id.'</div>'; ///////// ห้วข้อข่าว ///////////
			echo '<div class="panel-body alert-info" style="padding:10px; word-wrap:break-word;" >';		
			echo substr($value_news ->news_container,0,20)."...<span class='label label-info'>".anchor('ctl_main/page_news/'.$value_news->news_id,'อ่านต่อ')."</span>";  ///// เนื้อหาข่าว  ///////////
			echo '<br/><span class="label label-warning" style="float:right;">'.$value_news->news_peoplePost.'</span> ';  //////คนโพสข่าว ////////// 
			echo '<br/><span class="label label-warning" style="float:right;">โพสเมื่อ '.$value_news->news_datePost.'</span> '; ////////  วัน เวลา ที่ โพส /////////
			echo "</div>";	
			echo "</div>";	
		}
		?>
	</div>

	<!-- pop up login -->
	<!-- 
	<div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title"><span class="glyphicon glyphicon-log-in">  กรุณาลงชื่อเข้าใข้ระบบ</span></h4>
				</div>
				<div class="modal-body">
					<?php //echo validateion_error();?>
					<!-- login form -->
					<?php  /*echo form_open('c_verifylogin',' class="form-horizontal" role="form" ');?>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="username" name="username" placeholder="Email" autofocus>
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="password" name="password" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<div class="checkbox">
								<label>
									<input type="checkbox"> Remember me
								</label>
							</div>
						</div>
					</div>
				</div> <!-- /. modal-body -->
				<div class="modal-footer">
					<button type="reset" class="btn btn-default" data-dismiss="modal" value="reset">Close</button>
					<button type="submit" class="btn btn-primary" value="submit">submit</button>
				</div> <!-- /. modal-footer -->
			</form>
			<!-- end form login -->			

		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
-->*/
//<?php
$this->load->view("footer");?>