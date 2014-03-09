<?php $this->load->view('head');?>
<div class="row">
	<div class="panel panel-primary">
		<div class="panel-heading" ><p class="glyphicon glyphicon-user">  เพิ่มอาจารย์</p></div>
		<div class="panel-body">

			<?php echo form_open_multipart('ctl_main/add_teacher_db',' class="form-horizontal" role="form" ');?>
			<div class="form-group">									
				<div class="col-sm-10">
					<label for="inputUser" class="col-sm-3 control-label">user:</label>
					<input type="text" class="input-sm col-sm-2" id="inputUser" name="inputUser" placeholder="admin" autofocus >
					<label for="inputPassword" class="col-sm-3 control-label">password:</label>
					<input type="password" class="input-sm col-sm-3" id="inputPassword"  name="inputPassword" placeholder="Password">
				</div>
			</div>
			<div class="form-group">									
				<div class="col-sm-10">
					<label for="inputPername" class="col-sm-3 control-label">คำนำหน้า:</label>
					<input type="text" class="input-sm col-sm-2"  id="inputPername" name="inputPername" placeholder="ผศ.ดร.,ผศ.,ดร."  >
					<label for="inputName" class="col-sm-3  control-label">ชื่อ - สกุล:</label>
					<input type="text" class="input-sm col-sm-3"  id="inputName"  name="inputName" placeholder="คอมิวเตอร์ โน๊ตบุ๊ค">
				</div>
			</div>
			<div class="form-group">									
				<div class="col-sm-10">
					<label for="inputNumber" class="col-sm-4 control-label">ลำดับความสำคัญ(ใส่หมายเลข):</label>
					<input type="text" class="input-sm col-sm-1" id="inputNumber" name="inputNumber" placeholder="0-9"  >
					<label for="inputURL" class="col-sm-3  control-label">ลิงค์ที่เกี่ยวข้อง:</label>
					<input type="text" class="input-sm col-sm-4" id="inputURL"  name="inputURL" placeholder="กรอกเป็น URL">
				</div>
			</div>
			<div class="form-group">									
				<div class="col-sm-10">
					<?php // $error; ?>
					<label for="userfile" class="col-sm-2  control-label" >รูปภาพ:</label>
					<input type="file" name="userfile"  id="userfile" class="input-sm col-sm-3" size="20" />
				</div>
			</div>
			<div class="form-group"  style="float:right; padding-right:18px;">
				<input type="reset" class="btn btn-primary" value="ยกเลิก">
				<input type="submit" class="btn btn-primary" value="บันทึก">
			</div>
			</form>
			<?php echo form_close();?>

		</div>
	</div>
</div>
<?php $this->load->view('footer');?>
