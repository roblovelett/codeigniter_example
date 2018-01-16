<div id="container">
   <h1>Add New Image</h1>

   <div id="body">
      <?php if(validation_errors() || isset($error)) : ?>
         <div class="alert alert-danger" role="alert" align="center">
            <?=validation_errors()?>
            <?=(isset($error)?$error:'')?>
         </div>
      <?php endif; ?>
      <?=form_open_multipart('admin/photos/upload')?>

        <div class="form-group">
          <label for="userfile">Photo</label>
          <input type="file" class="form-control" name="userfile">
        </div>

        <div class="form-group">
          <label for="series">Series</label>
          <input type="text" class="form-control" name="series" value="" />
        </div>

        <div class="form-group">
          <label for="caption">Caption</label>
          <input type="text" class="form-control" name="caption" value="">
        </div>

        <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" name="description"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Upload</button>
        <?=anchor('admin/photos','Cancel',['class'=>'btn btn-warning'])?>

      </form>
   </div>

   <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>