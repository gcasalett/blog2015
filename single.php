<?php get_header('blog'); ?>

<!-- Content ************************************ -->

  <div class="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <h1><?php the_title(); ?></h1>

          <p class="post-date">Posted on <?php the_time('F jS, Y'); ?> at <?php the_time(); ?></p>
				<section class="post-content">
					<?php the_content('Read more on "'.the_title('', '', false).'" &raquo;'); ?>

				</section>

				<div class="archive-item-info">
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>

					<p class="post-cats">
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

	<?php endwhile; else: ?>

		<section>
			<article>
				<p>Sorry, no posts matched your criteria.</p>
			</article>
		</section>

	<?php endif; ?>

</div>

</div> <!-- end .content-wrapper -->

<!-- JS BS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<!-- GA Tracking -->

<!-- Typekit -->
<script src="//use.typekit.net/lwz3qno.js"></script>
<script>try{Typekit.load();}catch(e){}</script>


</body>
</html>
