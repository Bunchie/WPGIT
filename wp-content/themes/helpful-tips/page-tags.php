<?php get_header(); ?>

<div class="container">

    <div class="row">

        <hr>

        <div class="col-md-10 panel-content">

            <div class="tags">

                <?php wp_tag_cloud(['format' => 'flat']); ?>

            </div>

        </div>

        <div class="col-md-2 panel-sidebar"> <?php get_sidebar(); ?> </div>

    </div>

</div>

<?php get_footer(); ?>


