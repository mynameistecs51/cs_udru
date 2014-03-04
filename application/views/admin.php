<?php $this->load->view("head");?>
<div class="row show-grid">

	<div class="col-md-8 col-md-offset-2">

		<table width="80%" border ="black" align="center ">
			<tr>
				<th>
					<div class="panel panel-primary">
						<div class="panel-body" >
							<img src="<?php echo base_url().'image/add_people.png';?>"  style="width:200px; hight:150px; padding:10px;">
						</div>
						<div class="panel-footer" align="center">เพิ่มอาจารย์</div>
					</div>
				</th>
				<th>
					<div class="panel panel-primary">
						<div class="panel-body" >
							<img src="<?php echo base_url().'image/add_news.jpg';?>" style="width:200px; hight:150px; padding:10px;">
						</div>
						<div class="panel-footer" align="center">เพิ่มข่าว</div>
					</div>
				</th>
				<th>
					<div class="panel panel-primary">
						<div class="panel-body" >
							<img src="<?php echo base_url().'image/add_image.png';?>" style="width:200px; hight:150px; padding:10px;">
						</div>
						<div class="panel-footer" align="center">เพิ่มข่าว</div>
					</div>
				</th>
			</tr>
		</table>

	</div>

</div>

<?php $this->load->view("footer");?>