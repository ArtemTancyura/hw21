<article class="post">
       <div class="post-info">
            <span class="day"><?php the_time('d'); ?></span></br>
            <span class="month"><?php the_time('F'); ?></span>
       </div>
        <h2><?php the_title(); ?></h2>
       <ul class="under-title">
           <li class="stats"><a href="<?php echo get_comments_link(); ?>" class="fa fa-comment"><?php echo get_comments_number(); ?> comments</a></li>
           <li class="stats"><a href="#" > Category 3</a></li>
           </ul>

    <?php the_content('CONTINUE READING');

    comments_template()?>

</article>