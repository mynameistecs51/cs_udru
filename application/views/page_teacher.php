<?php $this->load->view("head");?>
<div class="row">
  <div class="col-md-4">
      <img src="<?php echo base_url().'image/pict_teacher/a.jpg';?>"  width="140px" height="200px"/>
  </div>
  <div class="col-md-4 col-md-offset-4">
      <?php 
      foreach ($teacher as $row)  {
        echo $row->teacher_name;
    }
    ?>
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