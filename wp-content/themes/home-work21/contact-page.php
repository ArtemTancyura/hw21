<?php
/*
Template Name: contact template
*/
?>
<?php get_header(); ?>

    <main class="main-contact">
        <div class="container">
            <div class="content clearfix">

                <?php
                while ( have_posts() ) : the_post();
                    the_post_thumbnail('full', array('class' => 'alignright')); ?>
                    <h2><?php echo the_title(); ?></h2>
                    <?php the_content();
                endwhile;
                ?>

            </div>
    </main>


<?php get_footer(); ?>