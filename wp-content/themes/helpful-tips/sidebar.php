<div class="container-fluid">

    <div class="row">

        <div class="panel panel-default sidebar">

            <div class="panel-body">

                <?php if(!dynamic_sidebar('sidebar')): ?>

                <?php wp_list_categories(array('title_li' => '', 'style' => 'list')); ?>

                <?php endif; ?>

            </div>

        </div>

    </div>
    
</div>