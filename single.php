<?php get_header(); ?>    

    <main class="mycontainer">
        <div class="wrap">
            <h3 class="single">Single</h3>
        <div class="category"><?php the_category(); ?></div>
        <div class="time">
            <div class="time">
            <time datetime="<?php echo esc_attr(get_the_date( DATE_W3C)); ?>">
            <?php echo esc_html( get_the_date('Y-m-d') ); ?>
            </time>
            </div>
            <div class="card">
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                    <h3 class="single__ttl"><?php the_title(); ?></h3>
                    <p class="single__sent"><?php the_content(); ?></p>
                <?php endwhile; endif; ?>
                
            </div>
        </div>
        </div>
    </main>


    

<?php get_footer(); ?>