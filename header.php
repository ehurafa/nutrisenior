<?php
/**
* The template for displaying the header
*
* Displays all of the head element and everything up until the "site-content" div.
*
* @package WordPress
* @subpackage Nutrisenior
* @since Nutrisenior 1.0
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>  
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />     
      <meta name="description" content="" />
      <meta name="author" content="Vitaminaweb" />   
      <link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.png"  />
      <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500,300,100,900' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css' />  
      <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" rel="stylesheet" />
      <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" rel="stylesheet" /> 
      <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/responsive.css" rel="stylesheet" /> 
      <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/lightgallery.css" rel="stylesheet">
      <link rel="stylesheet" href="css/colorbox.css" />
      <link rel="apple-touch-icon" sizes="57x57" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/apple-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/apple-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/apple-icon-76x76.png">
      <link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/apple-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/apple-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/apple-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/apple-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/apple-icon-180x180.png">
      <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo esc_url( get_template_directory_uri() ); ?>/android-icon-192x192.png">
      <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="96x96" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon-96x96.png">
      <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon-16x16.png">
      <link rel="manifest" href="<?php echo esc_url( get_template_directory_uri() ); ?>/manifest.json">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ms-icon-144x144.png">
      <meta name="theme-color" content="#ffffff">          
      <script type='text/javascript' src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.1.11.1.min.js"></script>
      <script type='text/javascript' src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/modernizr.js"></script>   

      <title>Nutrisenior</title>   
	  
	  <?php wp_head(); ?>

    </head>


<body <?php body_class(); ?>>
	
	<div id="page" class="hfeed site">

	<!-- ========== topo ========== -->
      <header>
        <div class="container">
          <div class="row">
            <div class="logo col-lg-5 col-md-5 col-sm-5 col-xs-12">
              <span>
                <a href="#_home" class="ancor" title="">
                  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-nutrisenior.png" alt="" >
                </a>
              </span>            
            </div> 
            <div class="redes-sociais col-lg-7 col-md-7 col-sm-7 col-xs-12">
              <a href="#" title="" class="transition facebook"></a>        
              <a href="#" title="" class="transition instagram"></a>     
            </div> 

              
          </div>  
        </div>  
        <div class="menu col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="container">
            <nav>                                      
              <a href="#" title="A Empresa" class="transition">A Empresa</a>

              <a href="#" title="Marcas" class="transition">Marcas</a>

              <a href="#" title="Diferenciais" class="transition">Diferenciais</a>

              <a href="#" title="Notícias" class="transition">Notícias</a>

              <a href="#" title="Partner Solution" class="transition">Partner Solution</a>

              <a href="#" title="Localização" class="transition">Localização</a>

              <a href="#" title="Fale conosco" class="transition">Fale conosco</a>
            </nav>     

            <div class="telefone">
              (11) 4786-4381
            </div> 
          </div>                
        </div> 
                
      </header>
      <!-- /========== topo ========== -->

      <!-- ========== preloader ========== -->

      <div class="preloader">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pre-loader.png" alt="">
      </div>

      <!-- /========== preloader ========== -->

		<div id="main" class="site-main general">
