<?php get_header('blog'); ?>

      <div class="row-fluid">
        <div class="span12">
          <div class="content-inner">
          <div class="container-fluid">
                <div class="row-fluid">

                      <div class="span12 sub-nav">
                      &nbsp;
                      </div>
                </div>

                <div class="row-fluid"> 
                
                   <div class="span8">
			<div class="breadcrumbs">
			Back to <a href="http://www.democracy-nc.org/dev/blog/">Democracy NC Blog</a> 
			</div>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section class="blog-post">
			<article id="post-<?php the_ID(); ?>">
				<header>
					<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					<p class="post-date">Posted on <strong><?php the_time('F jS, Y'); ?></strong></p>
				</header>
				<section class="post-content">
					<?php the_content('Read more on "'.the_title('', '', false).'" &raquo;'); ?>

				</section>
				<div class="archive-item-info">
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>

					<p>
						This entry was posted on <strong><?php the_time('l, F jS, Y'); ?> at <?php the_time(); ?></strong><br />
						Filed under <?php the_category(', ') ?>. 
						<!--
						You can follow any responses to this entry through the <?php post_comments_feed_link('RSS 2.0'); ?> feed.

						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// both comments and pings open ?>
							You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.
						-->

						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// only pings are open ?>
							Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.

						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// comments are open, pings are not ?>
							You can skip to the end and leave a response. Pinging is currently not allowed.

						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// neither comments nor pings are open ?>
							Both comments and pings are currently closed.

						<?php } edit_post_link('Edit this entry','','.'); ?>

					</p>
				</div>
			</article>

			<?php comments_template(); ?>

<ul class="pager">
  <li>
    <?php previous_post_link('%link', '&larr; Previous post', TRUE) ?>
  </li>
  <li>
    <?php next_post_link('%link', 'Next post &rarr;', TRUE); ?>
  </li>
</ul>

			
		</section>

	<?php endwhile; else: ?>

		<section>
			<article>
				<p>Sorry, no posts matched your criteria.</p>
			</article>
		</section>

	<?php endif; ?>

</div>
 <!-- Sidebar starts here -----------------------------------------------------> 
		
  		   <!-- This section displays other links in the "About" section" -->	
	           <div class="span4">
                    	<div class="sidebar-content">
                            
			<div class="sidebar-item">
			<p>You are welcome to submit comments to this moderated blog. Please treat others with respect, avoid partisan rhetoric, and help us provide a fact-based discussion of issues related to North Carolina’s political landscape. Thank you!</p>
			</div>
                        	
                            <div class="sidebar-item this-section">
                                <h3>Categories</h3>
                                            
                                 <ul>
					<li><a href="http://www.democracy-nc.org/category/link-of-the-day/" title="Link-of-the-Day">Link-of-the-Day</a></li>
					<li><a href="http://www.democracy-nc.org/category/our-issues/" title="Our Issues">Our Issues</a></li>
					<li><a href="http://www.democracy-nc.org/category/staffblog/" title="Tales from the Frontline">Tales from the Frontline</a></li>
				</u>
                            
                            </div>
		   <!-- Rest of the sidebar items come next: -->

		   <?php include "sidebar.php"; ?>

                    <!-- Sidebar ends here -----------------------------------------------------> 
                    </div>

<?php get_footer(); ?>