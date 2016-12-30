<?php
function sv_auth_complate()
{
    global $reg_errors, $username, $password, $email, $website, $first_name, $last_name, $nickname, $bio;

    if (count($reg_errors->get_error_messages()) < 1) {
        $userdata = array(
            'user_login' => $username,
            'user_email' => $email,
            'user_pass' => $password,
            'user_url' => $website,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'nickname' => $nickname,
            'description' => $bio,
            'show_admin_bar_front' => 'true',
            'role' => 'author',
        );
        $user = wp_insert_user($userdata);

        echo 'Registration complete. Goto <a href="' . get_site_url() . '/log-in">login page</a>.';
    }
}

?>