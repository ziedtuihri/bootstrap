<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
<div class="sidebar-module sidebar-module-inset">
<h4>About</h4>5
<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis
consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed
consectetur.</p>
</div>
<div class="sidebar-module">
<h4>Archives</h4>
<ol class="list-unstyled">
<li><a href="#">March 2014</a></li> <!-- More archive examples
--> </ol>
</div>
<div class="sidebar-module">
<h4>Elsewhere</h4>
<ol class="list-unstyled">
<li><a href="#">GitHub</a></li>
<li><a href="#">Twitter</a></li>
<li><a href="#">Facebook</a></li>
</ol>
<h4>Archives</h4> <ol class="list-unstyled"> <?php
wp_get_archives( 'type=monthly' ); ?> </ol>
<h4>About</h4> <p><?php the_author_meta( 'description' ); ?>
</p>
</div>
</div><!-- /.blog-sidebar -->