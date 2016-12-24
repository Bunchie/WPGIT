
<?php get_header(); ?>

<div class="container">

    <div class="row">

        <hr>

        <div class="col-md-10 panel-content"> <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="panel panel-default">

                    <div class="panel-heading">

                        <span class="title-content">

                            <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>

                        </span>

                    </div>

                    <div class="panel-body body-content">

                        <?php wp_login_form(); ?>
                        <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>" title="Забыли пароль?">Забыли пароль?</a>

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

        <div class="col-md-2"> <?php get_sidebar(); ?> </div>

    </div>

</div>

<?php get_footer(); ?>




