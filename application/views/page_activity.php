<?php $this->load->view("head");?>
<!-- load script -->
<link rel="stylesheet" href="<?php echo base_url().'css/style.css';?>" type="text/css" media="screen" />
<script type="text/javascript">var _siteRoot='index.html',_root='index.html';</script>
<script type="text/javascript" src="<?php echo base_url().'js/jquery.js';?>"></script>
<script type="text/javascript" src="<?php echo base_url().'js/scripts.js';?>"></script>
<!-- end load script -->


<!--/top-->
<div id="header" >
  <div class="wrap" >
   <div id="slide-holder" >
    <div id="slide-runner" style="width:940px; position:absolute;display : inline;overflow:hidden;">
      <a href=""><img id="slide-img-1" src="<?php echo base_url().'image/pict_gallery/nature-photo.png';?>" class="slide" alt="" /></a>
      <a href=""><img id="slide-img-2" src="<?php echo base_url().'image/pict_gallery/nature-photo1.png';?>" class="slide" alt="" /></a>
      <a href=""><img id="slide-img-3" src="<?php echo base_url().'image/pict_gallery/nature-photo2.png';?>" class="slide" alt="" /></a>
      <a href=""><img id="slide-img-4" src="<?php echo base_url().'image/pict_gallery/nature-photo3.png';?>" class="slide" alt="" /></a>
      <a href=""><img id="slide-img-5" src="<?php echo base_url().'image/pict_gallery/nature-photo4.png';?>" class="slide" alt="" /></a>
      <a href=""><img id="slide-img-6" src="<?php echo base_url().'image/pict_gallery/nature-photo4.png';?>" class="slide" alt="" /></a>
      <a href=""><img id="slide-img-7" src="<?php echo base_url().'image/pict_gallery/nature-photo6.png';?>" class="slide" alt="" /></a> 
      <div id="slide-controls">
       <p id="slide-client" class="text"><strong>post: </strong><span></span></p>
       <p id="slide-desc" class="text"></p>
       <p id="slide-nav"></p>
     </div>
   </div>
 <!--content featured gallery here -->
</div>
<script type="text/javascript">

  if(!window.slider) var slider={};slider.data=[{"id":"slide-img-1","client":"nature beauty","desc":"nature beauty photography"},{"id":"slide-img-2","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-3","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-4","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-5","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-6","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-7","client":"nature beauty","desc":"add your description here"}];
</script>
</div>
</div><!--/header-->
<?php $this->load->view("footer");?>