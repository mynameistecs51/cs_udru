<?php $this->load->view("head");?>
<div class="row  col-md-4" style="margin-right:40px;">
	<div class="panel panel-primary " >
		<div class="panel-heading"><b class="glyphicon glyphicon-user"></b>  ประธานสาขาวิชา</div>
		<div class="panel-body alert-info" style="padding:10px;" align="center">
			<div class="panel panel-primary " align="center">
				<?php 
				var_dump($this->session->userdata);
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
</div>

<!-- //////////////  post news ///////////// -->
<div class="row col-md-8" style="padding-left:3px;">		
	<?php 
	foreach ($teacher_news as $key_news => $value_news) {
		echo "<div class='panel panel-primary ' >";		
			echo  '<div class="panel-heading"><b class="glyphicon glyphicon-info-sign"></b>  '.$value_news ->news_head.' '.$value_news->news_id.'</div>'; ///////// ห้วข้อข่าว ///////////
			echo '<div class="panel-body alert-info" style="padding:10px; word-wrap:break-word;" >';		
			echo substr($value_news ->news_container,0,20)."...<span class='label label-info'>".anchor('ctl_main/page_news/'.$value_news->news_id,'อ่านต่อ')."</span>";  ///// เนื้อหาข่าว  ///////////
			echo '<br/><span class="label label-warning" style="float:right;">'.$value_news->news_peoplePost.'</span> ';  //////คนโพสข่าว ////////// 
			echo '<br/><span class="label label-warning" style="float:right;">โพสเมื่อ '.$value_news->news_datePost.'</span> '; ////////  วัน เวลา ที่ โพส /////////
			echo "</div>";	echo "</div>";	
		}
		?>
	</div>

	<!-- pop up login -->
	
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
					<?php echo form_open('verifylogin/index',' class="form-horizontal" role="form" ');?>
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
<?php $this->load->view("footer");?>