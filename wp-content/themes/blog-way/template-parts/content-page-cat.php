<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Blog_Way
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="detail-wrap">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
            $category = get_term_by( 'slug', 'dich-thuat', 'category' );
            $categories = get_categories(array(
                'parent' => $category->term_id,
                'orderby' => 'name',
                'order' => 'ASC'
            ));
            foreach ($categories as $category)
            {
                $category_link = get_category_link($category->cat_ID);
                ?>
                <article id="post-<?php $category->term_id ?>" class="post-<?php $category->term_id ?>> post type-post status-publish format-standard has-post-thumbnail hentry category-site-thu-1">
                    <div class="entry-img">
                        <a href="<?php echo esc_url($category_link); ?>"><img width="345" height="225" src="<?php echo z_taxonomy_image_url($category->term_id); ?>" class="attachment-blog-way-common size-blog-way-common wp-post-image" alt="<?php echo esc_attr($category->name); ?>" loading="lazy"></a>
                    </div>
                    <div class="detail-wrap">
                        <header class="entry-header">
                            <h2 class="entry-title"><a style="color:#ea9920" href="<?php echo esc_url($category_link); ?>" rel="bookmark"><?php echo esc_attr($category->name); ?></a></h2>

                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <p><?php echo $category->description ?></p>
                        </div><!-- .entry-content -->
                    </div>

                </article>
                <?php
            }

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blog-way' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	</div>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'blog-way' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
