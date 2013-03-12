<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
    <!--Google Analytics scripts-->
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-2506285-1']); 
        /* Moved the page tracking to bottom of the page so that the ecommerce pouch is ready... */
        
        (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
        
    </script>
    
    
    <meta name="keywords" content="blog" />
    <meta name="DC.description" content="Likes, dislikes and tips from our staff, volunteers and friends." />
    <meta name="description" content="Likes, dislikes and tips from our staff, volunteers and friends." />
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="DC.identifier" scheme="DCTERMS.URI" content="<?php echo "http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI']; ?>"/>
    <meta name="DC.rights" content="Friends of the Earth" />
    <meta name="DC.publisher" content="Friends of the Earth" />
    <meta name="DC.creator" content="Friends of the Earth" />
    <meta name="DC.language" content="en-GB" />
    <meta name="DC.version" content="27" />
    <meta name="Project_guid" content="5A2D195E918D4E0BA021CC2C303FA6A8" />
    <meta name="DC.format" scheme="DCTERMS.IMT" content="text/html" />
    <meta name="DC.date.created" scheme="DCTERMS.W3CDTF" content="2010-11-30" />
    <meta name="DC.date.modified" scheme="DCTERMS.W3CDTF" content="2012-11-14" />
    <meta name="DC.subject.keyword" content="blog" />
    <meta name="Date.published" content="[PUBLISHED DATE]" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="alternate" type="application/rss+xml" title="RSS feed of Friends of the Earth news" href="/rss/news_stories.xml" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
    <!-- Open Graph Tags -->
    <meta property="og:title" content="<?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?>"/>
    <meta property="og:image" content="[IMAGE]"/>
    <meta property="og:description" content="[DESCRIPTION]"/>
    <!-- Open Graph Tags -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico"/>
    <link rel="SHORTCUT ICON" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" />
        
        
        
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
