<em> You can use this as a start point for managing and deploying a <strong> WordPress </strong> install with <strong> GIT </strong>. </em>

<hr>

<h1> <b> Prologue </b> </h1>

WordPress default contains three directories: wp-admin, wp –content and wp-includes. The kernel files include all files in the directory wp-admin and wp-includes, as well as most of the files from the WordPress root directory. Wp-content directory contains your arbitrary files, including themes, plugins and media. It is the code that controls content management and representation of WordPress.

<strong> <em> Change any of the WordPress core files can lead to instability site ! </em> </strong>

<hr>
<h1> <b> URL Wordpress </b> </h1>

To specify the address and WordPress blog, use one of the two options:

<code> define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress'); </code>

<code> define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME']); </code>

<em> These parameters were added to the file wp-config.php </em>

WP_SITEURL option allows you to temporarily change the URL of the site to WordPress. Is he does not change the value of a database parameter for site url, but instead is temporarily It changes the value. In the absence of this parameter is returned to the use WordPress of tuning site url database. The parameter works exactly the WP_HOME the same way, allowing you to temporarily change the value of the home for WordPress. Both option requires typing the full URL, including the http://.

<hr>
 
<h1> <b> Location of the directory </b> </h1>

Option, which allows you to change the location of the directory of the wp-content. Required for this option:

<code> define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content'); </code>

<code> define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content'); </code>

WP_CONTENT_DIR Value parameter is a full local path to wp-content directory. WP_CONTENT_URL - this is the full URI of this directory.

<hr>


<h1> <b> SSL </b> </h1>
To activate SSL authentication, add F0RCE_SSL_L0GIN parameter as follows:

<code> define ( 'FORCE_SSL_LOGIN', true); </code>

You can also make all the administrator of the page to use SSL.

This capability is activated by setting F0RCE_SSL_ADMIN:

<code> define ( 'FORCE_SSL_ADMIN1, true); </code>

All console administrator page (/ wp-admin) will now be encrypted SSL. Do not forget that the activation of this setting slows down the loading of admin page, but all of the data passing through the WordPress, will be encrypted using SSL. Also remember that your site should be configurated for use with SSL.

<em> Forced SSL administrator for WordPress - a big advantage in safety. All data passing through WordPress, will be encrypted, that insures against potential theft WordPress authorization information. </em>

<hr>

<h1> <b> Setup </b> </h1>

If we now go to the submodules directory and see that they are empty. In order to restore the integrity of the project need to clone the desired version of the submodules. We go to the folder wordprees and run the command:

<code> git submodule update --init </code>

<hr>

<h1> <b> Updating WordPress </b> </h1>

For update the version of WordPress you need go to the folder wordpress and run the command:

<code> git fetch --tags </code>

For search version we can run the command:

<code> git tag </code>

For change version WordPress we can run the command:

<code> git checkout name_version </code>

<hr>

<h1> <b> Transfer Wordpress </b> </h1>

WordPress uses the full references in all content. Therefore, each link (HREF attribute of the link) and menu items contain a fully qualified domain name. Similarly, from the fully qualified domain name, where you installed WordPress, and all depend on the settings of the site. 

<strong> <em> You can not just dump the database and move it ! </em> </strong> 

However, there is an intermediate step, which is to change the domain name in the exported database before it is imported on a work site. Be careful not to overwrite the fresh content on your site with content designed version. How exactly you do this depends on your specific needs, but in general, this process is similar to the site by moving from one domain to another. The procedure exhaustively documented on various websites in WordPress <a href="http://codex.wordpress.org/Moving_WordPress"> <b> Code </b> </a> and in many manuals. This is only one method.

Here is a brief description of how the process works, provided that you want to move all the content from the database to develop on the working site. The goal is to remove all full of links to a site in the development of content. Once moved content from the version of the development, all the following content that is added to the working site will be supplied with full links, but this method is to make all of this URL relative, after which they will work on the site in the development of, and work site. To do this, use the <a href="https://wordpress.org/plugins/wp-dbmanager/"> WP-DBManager </a> plugin written by Lester Chan or plugin <a href="https://wordpress.org/plugins/wp-migrate-db/"> WP Migrate DB </a> written by Brad Tuesnard.

This plugins allows you to make backup copies of the database, as well as perform SQL-queries. You can also use the built-in Export database WordPress and phpMyAdmin.

