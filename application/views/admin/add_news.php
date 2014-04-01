<?php $this->load->view('head');?>
<div class="row">
	<div class="panel panel-primary">
		<div class="panel-heading" ><p class="glyphicon glyphicon-user">  เพิ่มข่าว</p></div>
		<div class="panel-body">

			<?php echo form_open_multipart('ctl_main/add_news_db',' class="form-horizontal" role="form" ');?>
			<div class="form-group">									
				<div class="col-sm-10">
					<label for="input_head_news" class="col-sm-3 control-label">หัวข้อข่าว:</label>
					<input type="text" class="input-sm col-sm-5" id="input_headNews" name="input_headNews"  autofocus >
				</div>
				</div>
				<div class="form-group">
				<div class="col-sm-10">
					<label for="input_contain_news" class="col-sm-3 control-label">เนื้อหาข่าว:</label>
					<textarea class="input-sm col-sm-7 " rows="3" name="input_contain_news"  ></textarea>
				</div>
			</div>
			<div class="form-group"  style="float:right; padding-right:18px;">
				<input type="reset" class="btn btn-primary" value="ยกเลิก">
				<input type="submit" class="btn btn-primary" value="บันทึก">
			</div>
			<?php echo form_close();?>

		</div>
	</div>
</div>
<?php $this->load->view('footer');?>