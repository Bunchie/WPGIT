<?php get_header(); ?>

<div class="container">

    <div class="row">

        <hr>

        <div class="col-md-10 auth-body"> <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="panel panel-default auth-form">

                    <?php the_content(); ?>

                    <p> <?php the_tags('<span class="tags">', ' ', '</span>'); ?> </p>

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

        <div class="col-md-2"> <?php get_sidebar(); ?> </div>

    </div>

</div>

<?php get_footer(); ?>
