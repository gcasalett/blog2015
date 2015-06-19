<?php
/*
Template Name: Blog Home
*/
?>
<?php get_header('blog'); ?>


<!-- Content ************************************ -->

<div class="content archive">

  <div class="hamburger-container">
    <p>Democracy NC Blog</p>
    <a id="hamburger-menu" class="open-menu"></a>
  </div>

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
<script charset="utf-8" type="text/javascript" src="<?php echo home_url(); ?>/wp-content/themes/DemNCv1/assets/js/scripts.js"></script>

<!-- GA Tracking -->

<!-- Typekit -->
<script src="//use.typekit.net/lwz3qno.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

</body>
</html>
