</div><!-- end content -->
<footer>
    <div id="footer-content" class="center-div">
        <?php if($footerText = get_theme_option('Footer Text')): ?>
        <div id="custom-footer-text">
            <p><?php echo get_theme_option('Footer Text'); ?></p>
        </div>
        <?php endif; ?>
        <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
        <p><?php echo $copyright; ?></p>
        <?php endif; ?>
    </div><!-- end footer-content -->
    <?php fire_plugin_hook('public_footer', array('view'=>$this)); ?>
	<div class="row">
		<div class="col-md-3">
			<a title="Simpson Center For The Humanities" href="http://simpsoncenter.org/"><img src="http://www.emmabandrews.org/project/files/original/821ce75a8a9c11a8048f898ab3d02d0f.png" alt="" /></a>
		</div>
		<div class="col-md-3">
			<a title="National Endowment For The Humanities" href="http://www.neh.gov/"><img src="http://www.emmabandrews.org/project/files/original/9de090726a76140d91b2166d3ca0c8b7.jpg" alt="" /></a>
		</div>
		<div class="col-md-3">
			<a title="Department of Near Eastern Languages and Civilization" href="http://depts.washington.edu/nelc/"><img src="http://www.emmabandrews.org/project/files/original/c880eb6db6b6ae32d9cf48e751e11f63.jpg" alt="" /></a>
		</div>
		<div class="col-md-3">
			<a title="Newbook Digital Texts" href="http://depts.washington.edu/ndth/"><img src="http://www.emmabandrews.org/project/files/original/35124865a943161413f0b5abe16ab7b1.png" alt="" /></a>
		</div>
	</div>
</footer>



<script type="text/javascript">
    jQuery(document).ready(function(){
        Omeka.showAdvancedForm();
               Omeka.dropDown();
    });
</script>

</div><!-- end container -->
</body>
</html>
