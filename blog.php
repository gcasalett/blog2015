<?php
/*
Template Name: Blog Home
*/
?>
<?php get_header('blog'); ?>

<!-- Side bar ************************************ -->
  <div class="sidebar">
    <img class="main-logo" src="http://nc-democracy.org/dev/wp-content/themes/DemNCv1/assets/img/logo.png" />

    <nav>
      <ul>
        <li><a href="#">Blog Home</a></li>
        <li><a href="#">Democracy NC Home</a></li>
        <li><em>Categories</em>
          <ul>
            <li><a href="#">Link of the Day</a></li>
            <li><a href="#">Data Highlight</a></li>
            <li><a href="#">Media/Press</a></li>
          </ul>
        </li>
      </ul>
    </nav>

  </div>

<!-- Main content area ************************************ -->
  <div class="content-wrapper">

<!-- Header ************************************ -->
  <header>
    <img src="http://nc-democracy.org/dev/wp-content/themes/DemNCv1/assets/img/blog-main-img.png">

    <form class="head-search-form" action="">
      <input type="text" value="search">
      <button type="submit">Go!</button>
    </form>
  </header>

<!-- Content ************************************ -->

<div class="content">
  <?php
  $temp = $wp_query;
  $wp_query= null;
  $wp_query = new WP_Query();
  $wp_query->query('showposts=7'.'&paged='.$paged);
  ?>
  <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a class="post-link" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
      <h2><?php the_title(); ?></h2>
    	<p class="post-date">Posted on <?php the_time('F jS, Y'); ?></p>
      <?php the_excerpt(); ?>
    </a>
  </article>

  <?php endwhile; ?>




<!-- <div class="archive-item-info">
	<p><?php the_tags('Tags: ', ', ', '<br>'); ?> <strong>Filed under</strong> <?php the_category(', '); ?> &#124; <?php edit_post_link('Edit', ''); ?></p>
</div> -->




<div class="blog-archive-nav">

<ul class="pager">
  <li>
    <?php previous_posts_link('&laquo; Previous') ?>
  </li>
  <li>
    <?php next_posts_link('Next &raquo;') ?>
  </li>
</ul>

</div>
<?php $wp_query = null; $wp_query = $temp;?>


  </div> <!-- end. content -->



</div> <!-- end .content-wrapper -->

<!-- JS BS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<!-- GA Tracking -->

<!-- Typekit -->
<script src="//use.typekit.net/lwz3qno.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

</body>
</html>
