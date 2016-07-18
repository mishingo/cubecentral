<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Oscar Batlle
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="vAfjVwT9i38hKkLjZ7QyyXu2ffmPve6Uei8tHd1fDt0" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="https://app.onlineresumebuilders.com/styles/app-6a4503a73b.css">

<style>
  .breadcrumbs li{
    list-style-type: none;
  }
  ul.breadcrumbs{
    margin-left:0;
  }
  ul{
    margin-left: 35px;
  }
  ul li{
    list-style-type: disc;
  }
  ul li a{
    color: #006df0;
  }
  p img{
    display: block;
    margin-left: auto;
    margin-right: auto;
  }
  .nav-list{
    float:right;
  }
  .nav-list li{
    margin-left: 0px;
    list-style-type: none;
    float: left;
    padding:7px 16px;
  }
  .nav-list li .btn-start{
    color:#000;
  }

</style>

<!-- <link rel="stylesheet" href="http://localhost:3000/app/index.css"> -->
<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54006220-12', 'auto');
  ga('send', 'pageview');
</script>
<script>
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-54006220-12']);
	_gaq.push(['_setDomainName', 'onlineresumebuilders.com']);
	_gaq.push(['_trackPageview']);
</script>
</head>
<body class="wordpress">
	<div id="content" class="site-content">
