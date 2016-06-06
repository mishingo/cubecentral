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

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">=
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--<link rel="stylesheet" href="https://onlineresumebuilders.com/styles/app-1f0e1b897f.css">-->

<link rel="stylesheet" href="https://app.onlineresumebuilders.com/styles/app-d4bc8c6a35.css">
<?php wp_head(); ?>
</head>
<style>
	.li1{
		margin-left: 38px;
	    list-style-type: disc;
	    margin-top: 7px;
	}
	.p1{
		margin: 10px 0px;
	}
	#l-sidebar-menu {
	  margin-left: 20px;
	}
	#l-sidebar-menu li {
	  border-bottom: 1px solid #cecece;
	  padding: 6px 10px;
	}
	#l-sidebar-menu li:hover {
	  background-color: #cecece;
	}
	#l-sidebar-menu li:last-child {
	  border-bottom: 0px solid;
	}
	#l-sidebar-menu li a {
	  font-weight: 400px;
	}

</style>

<body class="wordpress">
<div class="row">
	
	
	<div id="content" class="site-content">
