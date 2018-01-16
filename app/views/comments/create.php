		<?php echo validation_errors(); ?>
        <div class="container">
			<h2>Get In Touch</h2>
			<p>Have ya heard anything you'd like to hear about on Over the Lege?</p>
            <?php echo form_open('comments/create'); ?>
				<div class="field">
					<textarea id="comment-text" name="input-comment-text"></textarea>
				</div>
				<div class="field">
					<label><input type="checkbox" id="comment-anon-checkbox">Anonymous?</label>
				</div>
				<div class="field" id="field-comment-name">
					<label for="">Name</label>
					<input type="text" id="comment-name" name="input-comment-name" />
				</div>
				<div class="field" id="field-comment-email">
					<label for="">Email</label>
					<input type="text" id="comment-email" name="input-comment-email" />
				</div>
				<button id="comment-submit" name="button-comment-submit" class="btn btn-primary">Submit</button>
			</form>
		</div>