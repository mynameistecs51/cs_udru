<?php $this->load->view("head");?>
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
</div>
<div class="row col-md-8" style="padding-left:3px;">
	<div class="panel panel-primary " >

		<?php 
		foreach ($teacher_news as $key_news => $value_news) {
			echo  '<div class="panel-heading"><b class="glyphicon glyphicon-info-sign"></b>  '.$value_news ->news_head.'</div>';
			echo '<div class="panel-body alert-info" style="padding:10px; word-wrap:break-word;" >';
			echo $value_news ->news_container;
			echo '<br/><span class="label label-warning" style="float:right;">'.$value_news->news_peoplePost.'</span> ';
			//echo "<br/>";
			echo '<br/><span class="label label-warning" style="float:right;">โพสเมื่อ '.$value_news->news_datePost.'</span> ';
			echo "</div>";
		}
		?>		
	</div>
	<!-- //////// infomation /// -->
	<!-- <div class="panel panel-primary" style="paddint-top:10px;" >
		<div class="panel-heading"><b class="glyphicon glyphicon-info-sign"></b> 
			ข่าวสาร
		</div>
		<div class="panel-body alert-info" style="padding:10px; word-wrap:break-word;" >
			11111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111
			<br/><span class="label label-warning" style="float:right;">ผู้โพส</span> 
		</div>				
	</div>

	<div class="panel panel-primary" style="paddint-top:10px;" >
		<div class="panel-heading"><b class="glyphicon glyphicon-info-sign"></b> 
			ข่าวสาร
		</div>
		<div class="panel-body alert-info" style="padding:10px; word-wrap:break-word;" >
			222
			<br/><span class="label label-warning" style="float:right;">ผู้โพส</span> 
		</div>				
	</div>
-->
<!-- /// end infomation /// -->
</div>
<?php $this->load->view("footer");?>