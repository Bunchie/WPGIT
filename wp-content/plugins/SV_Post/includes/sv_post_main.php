<?php

/**
 *$post_title, $post_content
 */

require_once $vs_post_path . '/template/sv_post_form.php';

function sv_post_main()
{

    if (isset($_POST['submit'])) {

        // sanitize user form input

        global $post_title, $post_content;

        $post_title = sanitize_text_field($_POST['post_title']);
        $post_content = esc_textarea($_POST['post_content']);

        sv_post_complate(
            $post_title, $post_content
        );
    }

    sv_post_form($post_title, $post_content);
}

?>