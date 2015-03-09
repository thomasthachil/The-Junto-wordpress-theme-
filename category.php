<?php get_header(); ?>


<div class = "container">
    <div class = "row"> <!-- necesssary to create row as separate div as opposed to with container for proper alignment; neccessary to have this to remove edge padding/margins-->
        <div class = "col-md-9">
            <?php 
            if (have_posts()):
                while (have_posts()) : the_post(); 
            
                    if (has_post_thumbnail()):?>
                    
                        <div class = "row category-post">
                            <div class = "col-md-4">
                                <div class="category-thumbnail">
                                <?php the_post_thumbnail( 'large' ); ?>
                                </div>
                            </div>
                            <div class = "col-md-8">
                                <div class = "category-title">
                                    <a href="<?php the_permalink();?>">
                                        <?php the_title(); ?>
                                    </a>
                                </div>
                                <div class = "excerpt">
                                    <?php the_excerpt(); ?> 
                                </div>
                            </div>
                            
                        </div>
                    <div class="row line-separator"></div>
                    <?php 
                    else: ?>
                        <div class = "row category-post">
                            <div class = "category-title">
                                <a href="<?php the_permalink();?>">
                                    <?php the_title(); ?>
                                </a>
                            </div>
                            <div class="col-md-12 line-separator"></div>
                        </div>
                    <?php endif; ?>

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
