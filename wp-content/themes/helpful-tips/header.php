<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title> <?php bloginfo('name'); ?> </title>

    <?php wp_head(); ?>

</head>

<body>

<header class="header">

    <div class="container">

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

        </div>

    </div>

</header>

<div class="container-for-search">

    <form role="form" class="form-search">

        <div class="input-group input-group-lg">

            <input type="text" class="form-control" type="search" id="search-input" name="s"

                   placeholder="search for">

    <span class="input-group-btn">

        <button type="submit" class="btn btn-default"> Search</button>

      </span>

        </div>

    </form>
    
</div>




