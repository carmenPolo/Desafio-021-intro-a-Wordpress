<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="profile" href="http://gmpg.org/xfn/11"> -->

	<?php get_template_part('_includes/iOS', 'icons') ?>

</head>
<body>

<header>
  <img class= "logo" src="<?php bloginfo('template_url')?>/assets/images/latam_logo.png" alt="logo DesafíoLatam">

	<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
		<?php wp_nav_menu( array(
			'theme_location' => 'header-menu',
			'container' => null,
			'menu' => 'bs-example-navbar-collapse-1'
		 ) ); ?>
	<?php } ?>

  <!-- navbar -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"> <span class="glyphicon glyphicon-camera" style= "color:black; font-size:150%" ></span> </a>
        </div>
    <!-- navbar-right -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <!-- <ul class="nav navbar-nav"> -->
            <!-- <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">contacto</a></li>
              <!-*- <li role="separator" class="divider"></li> -->
              </ul>
              </li>
            </ul><!-- /nav navbar-nav navbar-right --> -->
          <!-- </ul> -->
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <div class="container-header">
    <h1>Comienza una nueva vida y únete al mundo tecnológico</h1>
    <button type="button" class="btn btn-default navbar-btn">comienza acá</button>
    <button type="button" class="btn btn-default navbar-btn">más info</button>

  </div>

<!-- texto abajo header -->
<div class="container-header">
  <h6>Hay una escacez gigante de desarrolladores en el mundo y aún en Latinoamerica, se necesitan más desarrolladores y tú puedes ser uno!</h6>
</div>

<?php wp_head() ?>
</header>
