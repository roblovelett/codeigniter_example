<div id="container">
   <h1>Update Photo</h1>

   <div id="body">
      <?php if(validation_errors() || isset($error)) : ?>
         <div class="alert alert-danger" role="alert" align="center">
            <?=validation_errors()?>
            <?=(isset($error)?$error:'')?>
         </div>
      <?php endif; ?>
      <?=form_open_multipart('admin/photos/edit/'.$photo->id)?>

        <div class="form-group">
          <label for="userfile">Photo</label>
          <div class="row" style="margin-bottom:5px"><div class="col-xs-12 col-sm-6 col-md-3"><?=img(['src'=>$photo->filename,'width'=>'100%'])?></div></div>
          <input type="file" class="form-control" name="userfile">
        </div>

        <!-- series -->

        <div class="form-group">
          <label for="caption">Caption</label>
          <input type="text" class="form-control" name="caption" value="<?=$caption?>">
        </div>

        <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" name="description"><?=$description?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <?=anchor('admin/photos','Cancel',['class'=>'btn btn-warning'])?>

      </form>
   </div>

   <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>