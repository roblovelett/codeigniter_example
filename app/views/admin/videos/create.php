<div id="container">
   <h1>Create New Video</h1>

   <div id="body">
      <?php if(validation_errors() || isset($error)) : ?>
         <div class="alert alert-danger" role="alert" align="center">
            <?=validation_errors()?>
            <?=(isset($error)?$error:'')?>
         </div>
      <?php endif; ?>
      <?=form_open_multipart('admin/videos/create')?>
        <div class="form-group">
          <label for="userfile">Thumbnail</label>
          <input type="file" class="form-control" name="userfile">
        </div>

        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title" value="" />
        </div>

        <div class="form-group">
          <label for="summary">Summary</label>
          <textarea class="form-control" name="summary"></textarea>
        </div>

        <div class="form-group">
          <label for="caption">URL</label>
          <input type="text" class="form-control" name="url" value="">
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
        <?=anchor('admin/videos','Cancel',['class'=>'btn btn-warning'])?>

      </form>
   </div>

   <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>