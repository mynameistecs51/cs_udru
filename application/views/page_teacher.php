<?php $this->load->view("head");?>
<!-- ประธานสาขา -->
<div class="row">
 <div class="col-md-3 col-md-offset-4">
  <div class="panel panel-primary" align="center">
   <?php 
   foreach ($teacher as $key=> $value) { 
    if($value->teacher_number == '1'){
     echo anchor($value->teacher_link,'<div class="panel-body" >
      <img src=" '.base_url().'image/pict_teacher/'.$value->teacher_pict.'.jpg"  class="img-rounded" style="width:180px; hight:90px;">    
   </div>
   <div class="panel-footer" align="center">'.$value->teacher_preName.' '.$value->teacher_name.'<br/>ประธานสาขาวิชา'.'</div>');
  }
  ?>    

</div>
</div>
</div>
<!-- <div class="row"> -->
<!-- อาจารย์นสาขา -->
<?php 
if($value->teacher_number > '1'){   
   echo ' <div class="col-md-2 col-md-offset-0">';
   echo '<div class="panel panel-primary" align="center">';     
   echo anchor($value->teacher_link,'<div class="panel-body" >
     <img src=" '.base_url().'image/pict_teacher/'.$value->teacher_pict.'.jpg"  class="img-rounded" style="width:140px; hight:70px;">      
  </div>
  <div class="panel-footer" align="center">'.$value->teacher_preName.' '.$value->teacher_name.'</div> ');     
   echo '</div>'; 
   echo '</div>';
}
};?>   
<!--  ////---------------end foreacher--------------- //// -->

<!-- </div> -->

<?php $this->load->view("footer");?>