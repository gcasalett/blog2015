<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>

		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
		<title> <?php wp_title('|',true,'right'); ?> <?php bloginfo('name'); ?> </title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<link rel="stylesheet" type="text/css" href="http://nc-democracy.org/dev/wp-content/themes/DemNCv1/css/blog-styles.css" />
		<link rel="icon" type="image/png" href="http://nc-democracy.org/dev/wp-content/themes/DemNCv1/images/favicon.ico">

		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<link rel="stylesheet" type="text/css" href="http://www.democracy-nc.org/dev/wp-content/themes/DemNCv1/ie8-and-down.css" />
		<![endif]-->

		<link rel="alternate" type="text/xml" title="<?php bloginfo('name'); ?> RSS 0.92 Feed" href="<?php bloginfo('rss_url'); ?>">
		<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0 Feed" href="<?php bloginfo('rss2_url'); ?>">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_enqueue_script('jquery'); ?>
		<?php wp_head(); ?>

		<script src="<?php bloginfo('template_directory'); ?>/javascript/h5.js"></script>

	</head>
	<body <?php body_class(); ?>>

	<!-- Side bar ************************************ -->
	  <div class="sidebar">
			<a href="<?php echo home_url(); ?>/blog" atl="Democracy NC Blog">
	    <img class="main-logo" src="http://nc-democracy.org/dev/wp-content/themes/DemNCv1/assets/img/blog-logo.png" />
			</a>

	    <nav>
	      <ul>
	        <li><a href="<?php echo home_url(); ?>/blog">Blog Home</a></li>
	        <li><a href="<?php echo home_url(); ?>">Democracy NC Home</a></li>
	        <li class="categories-heading"><em>Categories</em></li>
          <li><a href="<?php echo home_url(); ?>/category/link-of-the-day/">Link of the Day</a></li>
          <li><a href="<?php echo home_url(); ?>/category/data-highlight/">Data Highlight</a></li>
          <li><a href="<?php echo home_url(); ?>/category/mediafeed/">Media/Press</a></li>
	      </ul>
	    </nav>

			<form class="blog-search-form" method="get" action="<?php bloginfo('url'); ?>/">
						<input class="input-large search-form" type="text" id="s" name="s"  onfocus="if(this.value == 'Search the blog') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Search the blog'; }" type="text" value="Search the blog">
						<button type="submit" class="btn success">Go!</button>
			</form>

			<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us11.list-manage.com","uuid":"aa95f8aeb4d271aaf586cc1de","lid":"27764c6a48"}) })</script>

			<ul class="sidebar-socmed">
        <li><a class="blog-twitter" href="http://www.twitter.com/democracync" title="on Twitter: @democraycnc" target="_blank"></a></li>
        <li><a class="blog-facebook" href="http://www.facebook.com/democracynorthcarolina" title="Facebook" target="_blank"></a></li>
        <li><a class="blog-youtube" href="http://www.youtube.com/demncorg" title="Our YouTube Channel" target="_blank"></a></li>
				<li><a class="blog-flickr" href="http://flic.kr/ps/2tFRDd" title="Democracy NC on Flickr" target="_blank"></a></li>
				<li><a class="blog-instagram" href="http://instagram.com/democracy_nc" title="Democracy NC Instagram" target="_blank"></a></li>
	    </ul>


	  </div>

	<!-- Main content area ************************************ -->
	  <div class="content-wrapper">
