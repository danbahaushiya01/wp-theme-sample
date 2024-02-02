<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
            <div class="h3"><?php the_title(); ?></div>
                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" class="w-100" alt="">
                <?php else: ?>
                    <img src="https://imgs.search.brave.com/7f5efaspK_UDdC5L_KOdpIATbIpoiwAW8-Q147WtgNI/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9jZG4t/MC5lbW9qaXMud2lr/aS9lbW9qaS1waWNz/L29wZW5tb2ppL25l/d3NwYXBlci1vcGVu/bW9qaS5wbmc" class="w-100"  alt="">
                    <?php endif; ?>
            </div>
            <div class="col-md-12">
                <article>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, quis? Ab itaque esse possimus eligendi aliquam ducimus voluptate cupiditate quos natus optio maxime nostrum, nisi cumque inventore, cum eos sequi!
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus officia voluptate molestias amet officiis adipisci, magni eaque iusto eius cum quaerat incidunt assumenda delectus atque inventore architecto e
                </article>
            </div>
            <div class="col-md-12">
            <h1 class="text-center">RECENT ARTICLES</h1>
        </div>
            <?php get_template_part('include/recent-blogs'); ?>
        </div>
    </div>
<?php get_footer(); ?>