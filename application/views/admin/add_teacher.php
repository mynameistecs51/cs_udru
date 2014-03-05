<?php $this->load->view("head");?>
<div class="row col-md-9 col-md-offset-2" >
	<div class="panel panel-primary" >
		<div class="panel-heading"><b class="glyphicon glyphicon-user"></b> เพิ่มข้อมูลอาจารย์</div>
		<div class="panel-body alert-info" style="padding:10px;">			
				<?php echo form_open('ctl_main/add_teacher_db','class="form-horizontal" role="form" style="padding:10px;"');?>
				<div class="form-group">									
					<div class="col-sm-10">
						<label for="inputUser" class="col-sm-3 control-label">user:</label>
						<input type="text" class="input-sm col-sm-2" id="inputUser" placeholder="admin" autofocus >
						<label for="inputPassword" class="col-sm-3 control-label">password:</label>
						<input type="password" class="input-sm col-sm-3" id="inputPassword" placeholder="Password">
					</div>
				</div>
				<div class="form-group">									
					<div class="col-sm-10">
						<label for="inputPername" class="col-sm-3 control-label">คำนำหน้า:</label>
						<input type="text" class="input-sm col-sm-2"  id="inputPername" placeholder="ผศ.ดร.,ผศ.,ดร."  >
						<label for="inputName" class="col-sm-3  control-label">ชื่อ - สกุล:</label>
						<input type="text" class="input-sm col-sm-3"  id="inputName" placeholder="คอมิวเตอร์ โน๊ตบุ๊ค">
					</div>
				</div>
				<div class="form-group">									
					<div class="col-sm-10">
						<label for="inputNumber" class="col-sm-4 control-label">ลำดับความสำคัญ(ใส่หมายเลข):</label>
						<input type="text" class="input-sm col-sm-1" id="inputNumber" placeholder="0-9"  >
						<label for="inputURL" class="col-sm-3  control-label">ลิงค์ที่เกี่ยวข้อง:</label>
						<input type="text" class="input-sm col-sm-4" id="inputURL"  placeholder="กรอกเป็น URL">
					</div>
				</div>
				<div class="form-group">									
					<div class="col-sm-10">
						<label for="inputURL" class="col-sm-2  control-label" >รูปภาพ:</label>
						<input type="file" class="input-sm col-sm-4" id="inputFile">
					</div>
				</div>
				<div class="form-group"  style="float:right; padding-right:18px;">
					<button type="reset" class="btn btn-primary">ยกเลิก</button>
					<button type="submit" class="btn btn-primary">บันทึก</button>
				</div>
			</form>
		</div>
	</div>
</div>

<?php $this->load->view("footer");?>