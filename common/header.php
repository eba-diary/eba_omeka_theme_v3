<!DOCTYPE html>
<html class="<?php echo get_theme_option('Style Sheet'); ?>" lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=yes" />
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <?php if ($description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>

    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <?php fire_plugin_hook('public_head',array('view'=>$this)); ?>
    <!-- Stylesheets -->
    <?php
    queue_css_file(array('iconfonts', 'style'));

    echo head_css();
    ?>
    <!-- JavaScripts -->
    <?php queue_js_file('vendor/modernizr'); ?>
    <?php queue_js_file('vendor/selectivizr', 'javascripts', array('conditional' => '(gte IE 6)&(lte IE 8)')); ?>
    <?php queue_js_file('vendor/respond'); ?>
    <?php queue_js_file('globals'); ?>
    <?php echo head_js(); ?>
</head>
 <?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
	
        <header>
            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>
            <div id="site-title">
				<?php echo link_to_home_page(theme_logo()); ?><br>
				<a href="https://www.facebook.com/EmmaBAndrewsDiary?fref=ts"><img title="Facebook" src="http://www.emmabandrews.org/project/files/original/edaf2b410484e18b34270503d86436e1.png" alt="Facebook" /></a>&nbsp;
				<a href="http://twitter.com/sarahketchley"><img title="Twitter" src="http://www.emmabandrews.org/project/files/original/993bea08bf0a00e3e7a8d1a9388d604b.png" alt="Twitter" /></a>&nbsp;
				<a href="http://emmabandrews.tumblr.com/"><img title="Tumblr" src="http://www.emmabandrews.org/project/files/original/2d90b63e7fef5301933efd398ec41279.png" alt="Tumblr" /></a>
			</div>
			<div id="primary-nav">
				<?php echo public_nav_main();?>
				<form class="form-inline" action="/project/search" method="get">
					<input type="text" class="form-control" name="query" id="query" value="" title="Search" placeholder="">
					<button class="btn btn-primary" name="submit_search" id="submit_search" type="submit" value="Search">Search</button>
				</form>
			</div>
        </header>         
  
         <div id="mobile-nav">
            <p><?php echo public_nav_main();?></p>
			<form class="form-inline" action="/project/search" method="get">
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><img src="http://www.emmabandrews.org/project/files/original/dc49ccca47590458afb61ac7db49868b.png" height="20" alt="search icon"/></span>
					<input type="text" class="form-control" name="query" id="query" value="" title="Search" placeholder="">
				</div>
			</form>
         </div>
        
		<?php if ((get_theme_option('Header Image') !== null)): ?>
		<div id="header-image-holder">
		<div class="held">
		<?php if ((get_theme_option('header_image_heading') !== '')): ?>
		<h2><?php echo get_theme_option('header_image_heading'); ?></h2>
		<?php endif; ?>
		<?php if ((get_theme_option('header_image_text') !== '')): ?>
		<p><?php echo get_theme_option('header_image_text'); ?></p>
		<?php endif; ?>
		</div>
        <?php echo theme_header_image(); ?>
		</div>
		<?php endif; ?>
		

	<div class="container">                     
    <div id="content">

<?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
