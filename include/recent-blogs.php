 <!-- recent blogs -->
    <div class="row mt-5">

        <?php
// Custom query to retrieve the last three posts
$recent_posts = new WP_Query(array(
    'posts_per_page' => 3,
    'post_status' => 'publish',
));

// Check if there are posts
if ($recent_posts->have_posts()) :
    while ($recent_posts->have_posts()) : $recent_posts->the_post();
        ?>
        
        <div class="col-md-4">
            <a class="text-decoration-none" href="<?php the_permalink(); ?>">
              <div class="card mt-3">
                <div class="card-header">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('thumbnail'); ?>
                    </div>
                    <?php else: ?>
                    <img width="150" height="150" src="https://imgs.search.brave.com/7f5efaspK_UDdC5L_KOdpIATbIpoiwAW8-Q147WtgNI/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9jZG4t/MC5lbW9qaXMud2lr/aS9lbW9qaS1waWNz/L29wZW5tb2ppL25l/d3NwYXBlci1vcGVu/bW9qaS5wbmc" class="attachment-thumbnail size-thumbnail wp-post-image"  alt="">
                    <?php endif; ?>
                </div>
                <div class="card-body">
                    <h3><?php the_title(); ?></h2>
                    <?php echo amazing_custom_excerpt(get_the_content());?>
                    
                </div>
              </div>
            </a>
        </div>
        <?php 
        endwhile; wp_reset_postdata();
else :
    echo '<p>No recent posts found.</p>';
endif;
?>

        <div class="col-md-12 text-center">
            <a href="#" class="btn btn-primary btn-block btn-bg h3">READ MORE</a>
        </div>
    </div>