<?php
/* Template Name: galery template
 *
*/
?>
<?php   get_header();?>
    <div class="container">

    <div class="site-content clearfix">

        <h3 class="latest-blog-post"><?php echo __('CATEGORY 2 - GALLERY'); ?></h3>

        <?php if (have_posts()):
            while (have_posts()): the_post(); ?>

                <?php get_template_part( 'contact-content' ); ?>

            <?php endwhile;
        else:
            echo '<p>No content found</p>';
        endif;?>

    </div>


<?php get_footer(); ?>