<?php $this->load->view("head");?>
<div class="row  col-md-4" style="margin-right:40px;">
	<div class="panel panel-primary " >
		<div class="panel-heading"><b class="glyphicon glyphicon-user"></b>  ผู้โพส</div>
		<div class="panel-body alert-info" style="padding:10px;" align="center">
			<div class="panel panel-primary " align="center">
				<?php 
				foreach ($teacher as $key => $value) {
					if($value->teacher_number == '1'){
						echo anchor($value->teacher_link,'<div class="panel-body" >
							<img src=" '.base_url().'image/pict_teacher/'.$value->teacher_pict.'.jpg"  class="img-rounded" style="width:180px; hight:140px;">     
						</div>
						<div class="panel-footer" align="center">'.$value->teacher_preName.' '.$value->teacher_name.'<br/>ผู้โพส'.'</div>');
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
			echo  '<div class="panel-heading"><b class="glyphicon glyphicon-info-sign"></b>  '.$value_news ->news_head.'</div>'; ///////// ห้วข้อข่าว ///////////
			echo '<div class="panel-body alert-info" style="padding:10px; word-wrap:break-word;" >';		
			echo substr($value_news ->news_container,0,20)."...<span class='label label-warning'>อ่านต่อ</span>";  ///// เนื้อหาข่าว  ///////////
			echo '<br/><span class="label label-warning" style="float:right;">'.$value_news->news_peoplePost.'</span> ';  //////คนโพสข่าว ////////// 
			echo '<br/><span class="label label-warning" style="float:right;">โพสเมื่อ '.$value_news->news_datePost.'</span> '; ////////  วัน เวลา ที่ โพส /////////
			echo "</div>";	echo "</div>";	
		}
	?>
</div>

<?php $this->load->view("footer");?>