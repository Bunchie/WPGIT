<?php
function sv_post_complate()
{
    global $post_title, $post_content;

    $post = array(
        'post_title' => $post_title,
        'post_content' => $post_content,
        'post_status' => 'publish',
    );

    wp_insert_post($post);

    echo 'Post was added. Goto <a href="' . home_url() . '">Home</a>.';

}

?>