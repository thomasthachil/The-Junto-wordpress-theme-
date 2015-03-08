<?php get_header(); ?>

<div class = "container">
    <div class = "row"> <!-- necesssary to create row as separate div as opposed to with container for proper alignment; neccessary to have this to remove edge padding/margins-->
        <?php 
        if (have_posts()):
            while (have_posts()) : the_post(); ?>

        <div class = "title">
            <a href="<?php the_permalink();?>">
                <?php the_title(); ?>
            </a>
        </div>

        <div class = "content-wrapper">
            <?php the_content(); ?>
        </div>

        <?php 
            endwhile;
        else:
            echo '<p>No content found</p>';
        endif; ?>
    </div>
</div>

<?php get_footer(); ?>
