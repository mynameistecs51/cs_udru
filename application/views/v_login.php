<?php $this->load->view("head");?>
<div class="row">
   <?php echo '<div class=".$class.>';?>
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               <h4 class="modal-title"><span class="glyphicon glyphicon-log-in">  กรุณาลงชื่อเข้าใข้ระบบ</span></h4>
            </div>
            <div class="modal-body">
               <?php echo validation_errors();?>
               <!-- login form -->
               <?php echo form_open('c_verifylogin',' class="form-horizontal" role="form" ');?>
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
</div>
<?php $this->load->view("footer");?>