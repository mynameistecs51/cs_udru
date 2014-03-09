<?php $this->load->view("head");?>
<div class="row">
    <div class="col-md-3 col-md-offset-3">
        <div class="panel panel-primary" align="center">
            <?php 
            // foreach ($teacher as $row) {
            //     echo anchor('www.google.com','<div class="panel-body" >
            //         <img src=" '.base_url().'image/pict_teacher/'.$row->teacher_name.'.jpg"  style="width:200px; hight:150px; padding:3px;">    
            //     </div>
            //     <div class="panel-footer" align="center">'.$row->teacher_name.'</div>  ');
            // }?>    
            <a href="www.google.com">  <img src="<?php echo base_url().'image/pict_teacher/ab.jpg' ?>">  </a>  
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
    <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
</div>
<?php $this->load->view("footer");?>