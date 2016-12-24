<?php

/**
 * @param $username
 * @param $password
 * @param $email
 * @param $website
 * @param $first_name
 * @param $last_name
 * @param $nickname
 * @param $bio
 */

function sv_auth_validation($username, $password, $email, $website, $first_name, $last_name, $nickname, $bio)
{
    global $reg_errors;

    $reg_errors = new WP_Error;

    if (empty($username) || empty($password) || empty($email)) {
        $reg_errors->add('field', 'Required form field is missing');
    }

    if (strlen($username) < 4) {
        $reg_errors->add('username_length', 'Username too short. At least 4 characters is required');
    }

    if (username_exists($username))
        $reg_errors->add('user_name', 'Sorry, that username already exists!');

    if (!validate_username($username)) {
        $reg_errors->add('username_invalid', 'Sorry, the username you entered is not valid');
    }

    if (strlen($password) < 5) {
        $reg_errors->add('password', 'Password length must be greater than 5');
    }

    if (!is_email($email)) {
        $reg_errors->add('email_invalid', 'Email is not valid');
    }

    if (email_exists($email)) {
        $reg_errors->add('email', 'Email Already in use');
    }

    if (!empty($website)) {
        if (!filter_var($website, FILTER_VALIDATE_URL)) {
            $reg_errors->add('website', 'Website is not a valid URL');
        }
    }

    if (is_wp_error($reg_errors)) {

        foreach ($reg_errors->get_error_messages() as $error) {
            echo '<div>';
            echo '<strong>ERROR </strong>:';
            echo $error . '<br/>';

            echo '</div>';
        }
    }
}

?>