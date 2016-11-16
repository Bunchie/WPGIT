<em> You can use this as a start point for managing and deploying a <strong> WordPress </strong> install with <strong> GIT </strong>. </em>

<hr>

<h1> <b> Setup </b> </h1>

If we now go to the submodules directory and see that they are empty.

In order to restore the integrity of the project need to clone the desired version of the submodules.

We go to the folder wordprees and run the command:

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


