<div id="container">
   <h1>CodeIgniter Image Gallery</h1>

   <div id="body">
      <?php if($photos->num_rows() > 0) : ?>
         
         <?php if($this->session->flashdata('message')) : ?>
            <div class="alert alert-success" role="alert" align="center">
               <?=$this->session->flashdata('message')?>
            </div>
         <?php endif; ?>
         <div align="center"><?=anchor('admin/photos/upload','Upload a new image',['class'=>'btn btn-primary'])?></div>
         <hr />   
         <div class="row">
            <?php foreach($photos->result() as $photo) : ?>
            <div class="col-md-3">
               <div class="thumbnail">
                  <img src="<?=site_url('img/photos/'.$photo->series.'/'.$photo->name.'_thumb_sm'.$photo->filetype)?>" />
                  <div class="caption">
                     <h3><?=$photo->caption?></h3>
                     <p><?=substr($photo->description, 0,100)?>...</p>
                     <p>
                        <?=anchor('admin/photos/edit/'.$photo->id,'Edit',['class'=>'btn btn-warning', 'role'=>'button'])?>
                        <?=anchor('admin/photos/delete/'.$photo->id,'Delete',['class'=>'btn btn-danger', 'role'=>'button','onclick'=>'return confirm(\'Are you sure?\')'])?>
                     </p>
                  </div>
               </div>
            </div>
            <?php endforeach; ?>
         </div>
      <?php else : ?>
         <div align="center">We don't have any photos yet, go ahead and <?=anchor('admin/photos/upload','add one')?>.</div>
      <?php endif; ?>
   </div>

   <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>