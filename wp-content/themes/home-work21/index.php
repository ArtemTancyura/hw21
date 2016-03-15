<?php   get_header();?>
<div class="container">

    <div class="site-content clearfix">

        <div class="main-part">

        <div class="slider"><?php wd_slider(2); ?></div>

        <h3 class="latest-blog-post"><?php echo __('LATEST BLOG POST'); ?></h3>

            <?php if (have_posts()):
                while (have_posts()): the_post(); ?>

                    <?php get_template_part( 'content' ); ?>

                <?php endwhile;
            else:
                echo '<p>No content found</p>';
            endif;?>
        </div><!-- main-part -->

        <div class="sidebar">
            <?php get_sidebar(); ?>
        </div>
    </div>

    <div class="pagin">
        <?php wp_beginner_numeric_posts_nav(); ?>
    </div>

<?php get_footer(); ?>