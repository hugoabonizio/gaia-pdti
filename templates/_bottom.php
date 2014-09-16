
  </div><!-- row -->
	<div class="row">
		<div class="col-md-8"></div>
		<div class="col-md-4">
			<button type="button" class="btn btn-success btn-lg" id="save_content">
				<span class="glyphicon glyphicon-floppy-disk"></span> <span class="button_text">Salvar documento</span>
			</button>
		</div>
	</div>

</div><!-- container-fluid -->

    <script>
        var base_url = "<?= link_to(''); ?>";
    </script>

    <script src="<?= resource('public/js/jquery.min.js'); ?>"></script>
    <script src="<?= resource('public/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= resource('public/js/wysihtml5-0.3.0.js'); ?>"></script>
    <script src="http://jhollingworth.github.io/bootstrap-wysihtml5/lib/js/prettify.js"></script>
    <script src="<?= resource('public/js/bootstrap-wysihtml5.js'); ?>"></script>
    <script src="<?= resource('public/js/bootstrap3-wysihtml5.js'); ?>"></script>
    <script src="<?= resource('public/js/notify.min.js'); ?>"></script>
    <script src="<?= resource('public/js/jquery-file-upload/vendor/jquery.ui.widget.js'); ?>"></script>
    <script src="<?= resource('public/js/jquery-file-upload/jquery.iframe-transport.js'); ?>"></script>
    <script src="<?= resource('public/js/jquery-file-upload/jquery.fileupload.js'); ?>"></script>
    <script src="<?= resource('public/js/wysihtml5-image-upload.js'); ?>"></script>
    <script src="<?= resource('public/js/script.js'); ?>"></script>
  </body>
</html>