<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <!-- Required meta tags always come first -->
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description');?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        <?php bloginfo( 'name'); ?> |

    </title>
    <?php wp_head(); ?>
</head> 
<body >               
<header>
<!--Navbar
<nav class="navbar navbar-toggleable-md navbar-dark info-color-dark fixed-top scrolling-navbar">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="<?php bloginfo( 'template_directory' ); ?>/img/logo2.png" alt="logo établissement">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav1">
			<?php
			if ( has_nav_menu( 'navbar' ) ) {
			  wp_nav_menu( array(
			  'menu'              => 'navbar',
			  'theme_location'    => 'navbar',
			  'depth'             => 2,
			  'menu_class'        => 'navbar-nav mr-auto',
			  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			  'container'         => false,
			  'walker'            => new MDBBootstrapNavMenuWalker())
			  );
			} else
			echo "Please assign Navbar Menu in Wordpress Admin -> Appearance -> Menus -> Manage Locations";
			?>
            <form class="form-inline waves-effect waves-light">
                <input class="form-control" type="text" placeholder="Search">
            </form>
        </div>
    </div>
</nav>-->
<!--/.Navbar-->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-dark scrolling-navbar">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="<?php bloginfo( 'template_directory' ); ?>/img/logo2.png" alt="logo">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php bloginfo('wpurl');?>"><i class="fa fa-home"></i>Accueil </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php bloginfo('wpurl');?>/medecinessr">Médecine/SSR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php bloginfo('wpurl');?>/nos-consultations"> Nos Consultations</a>
                    </li>
                    <li class="nav-item btn-group">
                        <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nos EHPAD</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item" href="<?php bloginfo('wpurl');?>/paimboeuf">Paimboeuf</a>
                            <a class="dropdown-item" href="<?php bloginfo('wpurl');?>/montplaisir">MontPlaisir - Pornic</a>
                            <a class="dropdown-item" href="<?php bloginfo('wpurl');?>/les-hortensias">Les Hortansias - St Père en Retz</a>
                            <a class="dropdown-item" href="<?php bloginfo('wpurl');?>/nos-ehpad/villeneuve">La Baie - Villeneuve en Retz</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php bloginfo('wpurl');?>/nous-recrutons"> Nous Recrutons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php bloginfo('wpurl');?>/marches-publics"> Nos Marchés Publics</a>
                    </li>
                </ul>
             </div>
        </div>
    </nav>
</header>
<!-- Bouton qui permet de remonter en haut de page -->
<div class="fixed-action-btn smooth-scroll" style="bottom: 45px; right: 24px;">
    <a href="#top-section" class="btn-floating btn-large cyan darken-1 waves-effect waves-light" style="box-shadow : 1px 2px 2px 1px rgba(0,0,0,.4)">
        <i class="fa fa-arrow-up"></i>
    </a>
</div>
        
                                                                                                                                              
                            