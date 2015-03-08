<?php get_header(); ?>

<div class = "container">
    <div class = "row"> <!-- necesssary to create row as separate div as opposed to with container for proper alignment; neccessary to have this to remove edge padding/margins-->
        <div class = "col-md-9">
            <?php 
            if (have_posts()):
            while (have_posts()) : the_post(); ?>

        <h2>
            <a href="<?php the_permalink();?>">
                     <?php the_title(); ?>
            </a>
        </h2>

        <?php the_content(); ?>

        <?php 
            endwhile;
            else:
                echo '<p>No content found</p>';
            endif; ?>
        </div>
        <div class = "col-md-3">
            <?php get_sidebar();?>  
        </div>    
    </div>
</div>



<?php get_footer(); ?>
