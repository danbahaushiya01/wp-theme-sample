 <!-- recent blogs -->
    <div class="row mt-5">
        <div class="col-md-12">
            <h1 class="text-center">OUR BLOG</h1>
        </div>

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
              <div class="card">
                <div class="card-header">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('thumbnail'); ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="card-body">
                    <h3><?php the_title(); ?></h2>
                    <?php the_excerpt();?>
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