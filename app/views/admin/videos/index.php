<div id="container">
   <h1>CodeIgniter Video Gallery</h1>

   <div id="body">
      <?php if($videos->num_rows() > 0) : ?>
         
         <?php if($this->session->flashdata('message')) : ?>
            <div class="alert alert-success" role="alert" align="center">
               <?=$this->session->flashdata('message')?>
            </div>
         <?php endif; ?>
         <div align="center"><?=anchor('admin/videos/create','Create new video description, title, and thumbnail',['class'=>'btn btn-primary'])?></div>
         <hr />   
         <div class="row">
            <?php foreach($videos->result() as $video) : ?>
            <div class="col-md-3">
               <div class="thumbnail">
                    <img src="<?=site_url('img/video_thumbs/'.$video->thumbnail.'_thumb_sm'.$video->thumb_filetype)?>" />
                  <div class="title">
                     <h3><?=$video->title?></h3>
                     <p><?=substr($video->summary, 0,100)?>...</p>
                     <p>
                        <?=anchor('admin/videos/edit/'.$video->id,'Edit',['class'=>'btn btn-warning', 'role'=>'button'])?>
                        <?=anchor('admin/videos/delete/'.$video->id,'Delete',['class'=>'btn btn-danger', 'role'=>'button','onclick'=>'return confirm(\'Are you sure?\')'])?>
                     </p>
                  </div>
               </div>
            </div>
            <?php endforeach; ?>
         </div>
      <?php else : ?>
         <div align="center">We don't have any videos information yet, go ahead and <?=anchor('admin/videos/create','create some')?>.</div>
      <?php endif; ?>
   </div>

   <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>