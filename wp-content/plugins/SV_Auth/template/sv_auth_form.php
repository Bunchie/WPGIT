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

function sv_auth_form($username, $password, $email, $website, $first_name, $last_name, $nickname, $bio)
{
    echo ' <form action = "' . $_SERVER['REQUEST_URI'] . '" method = "POST" >
         <div class="form-group">
            <label for = "username"> Username <strong>*</strong></label>
            <input class="form-control" type = "text" id = "username" name = "username" value = "' . (isset($_POST['username']) ? $username : null) . '">
         </div>
          <div class="form-group">
            <label for = "password"> Password <strong>*</strong></label>
            <input class="form-control" type = "password" id = "password" name = "password" value = "' . (isset($_POST['password']) ? $password : null) . '">
          </div>
          <div class="form-group">
            <label for = "email"> Email <strong>*</strong></label>
            <input class="form-control" type = "email" id = "email" name="email" value = "' . (isset($_POST['email']) ? $email : null) . '">
          </div>
          <div class="form-group">
            <label for = "website"> Website </label>
            <input class="form-control" type = "text" id = "website" name = "website" value = "' . (isset($_POST['website']) ? $website : null) . '">
          </div>
          <div class="form-group">
            <label for = "first_name"> First Name </label>
            <input class="form-control" type = "text" id = "first_name" name = "first_name" value = "'. (isset($_POST['first_name']) ? $first_name : null) .'">
          </div>
           <div class="form-group">
            <label for = "last_name"> Last Name </label>
            <input class="form-control" type = "text" id = "last_name" name = "last_name" value = "'. (isset($_POST['last_name']) ? $last_name : null) .'">
          </div>
          <div class="form-group">
            <label for = "nickname"> Nickname </label>
            <input class="form-control" type = "text" id = "nickname" name = "nickname" value = "'. (isset($_POST['nickname']) ? $nickname : null) .'">
          </div>
          <div class="form-group">
            <label for = "bio"> BIO </label>
            <textarea class="form-control" id = "bio" name = "bio">' . (isset($_POST['bio']) ? $bio : null) . '</textarea>
          </div>
          <input class = "btn btn-block" type ="submit" name="submit" value = "Register" />
          </form>
    ';
}

?>