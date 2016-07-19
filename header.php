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
  #home-menu li{
    list-style-type: none;
  }
  ul#home-menu{
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
  a{
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
  .card-head{
    height:65px;
  }

  .card-title{
    width: calc(100% - 55px);
    height:39px;
    float:left;
    overflow: hidden;
    text-overflow: ellipsis;
  }

  .card-body{
    height:123px;
  }
  .card-body p{
    height: 63px;
    overflow: hidden;
    text-overflow: ellipsis;
  }
  .card-circle{
    width: 55px;
    float:right
  }
  .card-circle-container{
    height: 55px;
    width: 55px;
    border-radius: 2em;
    float: right;
    margin-top: 11px;
  }
  .circle-in-card{
      text-align: center;
      line-height: 55px;
      width: 55px;
      height: 55px;
      font-size: 15px;
  }
  .i-eye{
  background: url("data:image/svg+xml;utf8,<svg width='30px' height='20px' viewBox='41 16 23 15' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'> <desc>Created with Sketch.</desc> <defs></defs> <path d='M52.5,16.3125 C47.7083333,16.3125 43.61625,19.2929167 41.9583333,23.5 C43.61625,27.7070833 47.7083333,30.6875 52.5,30.6875 C57.2964583,30.6875 61.38375,27.7070833 63.0416667,23.5 C61.38375,19.2929167 57.2964583,16.3125 52.5,16.3125 L52.5,16.3125 Z M52.5,28.2916667 C49.855,28.2916667 47.7083333,26.145 47.7083333,23.5 C47.7083333,20.855 49.855,18.7083333 52.5,18.7083333 C55.145,18.7083333 57.2916667,20.855 57.2916667,23.5 C57.2916667,26.145 55.145,28.2916667 52.5,28.2916667 L52.5,28.2916667 Z M52.5,20.625 C50.9139583,20.625 49.625,21.9139583 49.625,23.5 C49.625,25.0860417 50.9139583,26.375 52.5,26.375 C54.0860417,26.375 55.375,25.0860417 55.375,23.5 C55.375,21.9139583 54.0860417,20.625 52.5,20.625 L52.5,20.625 Z' id='Shape' stroke='none' fill='#FFFFFF' fill-rule='evenodd'></path></svg>")  no-repeat;
  height: 20px;
  width: 30px;
  display:inline-block;
  vertical-align: middle;
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
