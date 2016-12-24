<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title> <?php bloginfo('name'); ?> </title>

    <?php wp_head(); ?>

</head>

<body>

<header class="header">

    <div class="container-fluid">

        <div class="row">

            <div class="logo">

                <h1 class="url-home"><a href="<?php home_url(); ?> /"><?php bloginfo('name'); ?></a></h1>

                <marquee behavior="alternate" width="200"><?php bloginfo('description'); ?></marquee>

            </div>

            <div class="menu-header">

                <?php wp_nav_menu(array(

                    'theme_location' => 'menu',
                    'container' => false,
                    'menu_class' => 'header-li',
                    'before' => '')); ?>

            </div>

            <form class="form-inline" role="form">

                <div class="form-group search-input">

                    <input class="form-control " type="search" id="search-input" name="s"
                           placeholder="search for"/>

                    <button type="submit" class="btn btn-default search-button"> Search </button>

                </div>

            </form>

        </div>

    </div>

</header>


