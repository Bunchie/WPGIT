<?php get_header(); ?>

<div class="container">

    <div class="row">

        <hr>

        <div class="col-md-10 panel-content"> <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="panel panel-default">

                    <div class="panel-heading">

                        <span class="time-published"> <?php the_time('j.m.Y'); ?> </span>

                        <span class="title-content">

                            <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>

                        </span>

                    </div>

                    <div class="panel-body body-content">

                        <?php the_post_thumbnail('full', 'class=img-style'); ?>

                        <?php the_excerpt(); ?>

                        <p> <?php the_tags('<span class="tags">', ' ', '</span>'); ?> </p>

                    </div>

                </div>

            <?php endwhile; ?>

                <div>

                    <?php

                    $big = 999999999; // need an unlikely integer

                    echo paginate_links(array(

                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),

                        'format' => '?paged=%#%',

                        'current' => max(1, get_query_var('paged')),

                        'total' => $wp_query->max_num_pages

                    ));

                    ?>

                </div>

            <?php else: ?>
                
                <div class="not-found">

                    <h1> Posts not found </h1>
                    
                </div>
                
            <?php endif; ?>

        </div>

        <div class="col-md-2 panel-sidebar"> <?php get_sidebar(); ?> </div>

    </div>

</div>

<?php get_footer(); ?>
