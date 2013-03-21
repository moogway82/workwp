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
    <link rel="shortcut icon" href="http://www.foe.co.uk/img/favicon.ico"/>
    <link rel="SHORTCUT ICON" href="http://www.foe.co.uk/img/favicon.ico" />
        

<!-- jQuery Scripts -->
<!-- ================================================= -->
<!-- <script type="text/javascript" src="/js/jquery-1.3.2.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="http://www.foe.co.uk/js/jquery.min.js"><\/script>')</script>
<script type="text/javascript" src="http://www.foe.co.uk/js/jquery.cycle.min.js"></script>
<script type="text/javascript" src="http://www.foe.co.uk/js/jquery.tabs.min.js"></script>
<script type="text/javascript" src="http://www.foe.co.uk/js/swfobject.js"></script>
<script type="text/javascript" src="http://www.foe.co.uk/js/hero.min.js"></script>
<!--[if IE 6]>
<script type="text/javascript">
//<![CDATA[
/* JQuery pseudo hover fix for IE6 */
$(function() {
    $('#primarynav li').hover(function(){
       $(this).addClass('hoverover');
    }, function() {
       $(this).removeClass('hoverover');
    });
});
//]]>
</script>
<![endif]-->
<!--menujs1-->
<script type="text/javascript" src="http://www.foe.co.uk/js/menu.js"></script>
<!--menujs2-->
<!-- /js/addLinkerEvents-ga.js -->


<!-- Responsive test to link to responsive or regular CSS and conditional IE-specific CSS -->
<!-- ==================================================== -->
<!--  Language variant: ENG -->

<!-- English Language Variant - use new responsive CSS -->
<!-- 1. Javascript not loaded, just use m.css -->
<noscript>
    <!-- <link href="/css/m.css" rel="stylesheet" type="text/css" media="all" class="res" /> -->
    <!-- <link href="/css/m-equiv.css" rel="stylesheet" type="text/css" media="all" class="res" /> -->

    <link href="http://www.foe.co.uk/css/fms-res.css" rel="stylesheet" type="text/css" media="all" class="res" />
    <link href="http://www.foe.co.uk/css/f-res.css" rel="stylesheet" type="text/css" media="all" class="res" />
    
</noscript>
<!-- 2. Using IE <= 8, just use m.css -->
<!--[if lte IE 8]>
    <link href="http://www.foe.co.uk/css/fms-res.css" rel="stylesheet" type="text/css" media="all" class="res" />
    <link href="http://www.foe.co.uk/css/f-res.css" rel="stylesheet" type="text/css" media="all" class="res" />
    
    <style>
        div#footer a#resToggle {
            display: none;
        }
    </style>
<![endif]-->
<!-- 3. Cookie set use m.css else not set and use responsive css files -->
<script type="text/javascript">
/* Test to remove responsive styling */
/* This should come directly after the stylesheet links */
if(readCookie('resoff') != null) {
    document.write('<meta name="viewport" content="initial-scale=1.0, width=device-width" />');
    /* document.write('<link href="http://www.foe.co.uk/css/m.css" rel="stylesheet" type="text/css" media="all" class="res" />'); */
    /* document.write('<link href="http://www.foe.co.uk/css/m-equiv.css" rel="stylesheet" type="text/css" media="all" class="res" />'); */

    document.write('<link href="http://www.foe.co.uk/css/fms-res.css" rel="stylesheet" type="text/css" media="all" class="res" />');
    document.write('<link href="http://www.foe.co.uk/css/f-res.css" rel="stylesheet" type="text/css" media="all" class="res" />');
    
} else {
    document.write('<meta name="viewport" content="initial-scale=1.0, width=device-width" />');
    /* All: Full, Medium and Small */
    document.write('<link href="http://www.foe.co.uk/css/fms-res.css" rel="stylesheet" type="text/css" media="screen and (min-width: 0px)" class="res" />');
    /* Only Full */
    document.write('<link href="http://www.foe.co.uk/css/f-res.css" rel="stylesheet" type="text/css" media="screen and (min-width: 980px)" class="res" />');
    
    /* Only Medium and Small */
    document.write('<link href="http://www.foe.co.uk/css/ms-res.css" rel="stylesheet" type="text/css" media="screen and (max-width: 979px) " class="res" />');
    /* Only Medium */
    document.write('<link href="http://www.foe.co.uk/css/m-res.css" rel="stylesheet" type="text/css" media="screen and (min-width: 640px) and (max-width: 979px)" class="res" />');
    /* Only Small */
    document.write('<link href="http://www.foe.co.uk/css/s-res.css" rel="stylesheet" type="text/css" media="screen and (max-width: 639px)" class="res" />');
}
</script>



<!--[if IE 8]>
<link href="http://www.foe.co.uk/css/ie8.css" rel="stylesheet" type="text/css" media="screen"/>
<![endif]-->
<!--[if IE 7]>
<link href="http://www.foe.co.uk/css/ie7.css" rel="stylesheet" type="text/css" media="screen"/>
<![endif]-->
<!--[if lt IE 7]>
<link href="http://www.foe.co.uk/css/ie6.css" rel="stylesheet" type="text/css" media="screen"/>
<![endif]-->
<link href="http://www.foe.co.uk/css/print.css" rel="stylesheet" type="text/css" media="print"/>


    


<script type="text/javascript">
//<![CDATA[
var parentPageID = '26301';
baseTxmlReqs = new Array(3);
/* have moved declaration of baseTxmlReqs and function to menu.js */ 
//]]>
</script>

<script src="https://www.foe.co.uk/js/jquery.validate.js" type="text/javascript"></script>
<script src="/js/form_validation.js" type="text/javascript"></script>


<!-- Nav:
27 
<a href="/green_blog/mappiness_why_our_new_green_39498.html">Mappiness: why our new Green Britain map makes me happy</a>
-->

<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
  {lang: 'en-GB'}
</script>



     
        
	<?php wp_head(); ?>
    </head>
    <body id="newsevents" <?php body_class(); ?> onload=" " onunload=""  >
    
    <div id="header">
    <div id="headercollapse">
        <div id="contacttab"><a href="/feedback.html" title="Contact Us">Contact Us</a></div>

<ul class="shareutils">
  <li>
    <!-- AddThis Button BEGIN -->
    <a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=250&amp;username=wwwfoecouk"><img src="http://www.foe.co.uk/imgs/common/sm-share-en.gif" width="83" height="16" alt="Bookmark and Share" style="border:0"/></a>
    <script type="text/javascript" src="https://s7.addthis.com/js/250/addthis_widget.js#username=wwwfoecouk"></script>
    <!-- AddThis Button END -->
  </li>
  <li><a href="/news_events/rss.html" title="RSS Feed"><img src="http://www.foe.co.uk/imgs/common/icon_rss.jpg" alt="RSS" /></a></li>
    <li><a href="http://www.facebook.com/wwwfoecouk" title="Facebook Page" target="_blank"><img src="http://www.foe.co.uk/imgs/common/facebook19.gif" alt="Facebook" /></a></li>
  <li><a href="https://twitter.com/wwwfoecouk" title="Twitter" target="_blank"><img src="http://www.foe.co.uk/imgs/common/icon_twitter.jpg" alt="Twitter" /></a></li>
  <li style="margin-right: 0;"><a href="/news_events/enews_index.html" title="Newsletter"><img src="http://www.foe.co.uk/imgs/common/icon_newsletter.gif" alt="Newsletter" /></a></li>
  
  </ul>

        <ul id="regionnav">
            
            <li><a href="/england_index.html">England</a>&nbsp;|</li>
            <li><a href="/cymru.html">Cymru/Wales</a>&nbsp;|</li>


            <li><a href="/northern_ireland/northern_ireland_index.html">Northern Ireland</a></li>
            <!--<li><a href="http://www.foe-scotland.org.uk/">Scotland</a>&nbsp;|</li>
            <li><a href="http://www.foei.org/" title="International">International</a></li>-->
        </ul>
        <ul id="utilitynav">
            <li><a href="/index.html" title="Home">Home</a></li>
            <li>&nbsp;|&nbsp;<a href="/press_and_media_index.html">Press &amp; Media</a></li><li>&nbsp;|&nbsp;<a href="http://www.foe.co.uk/shop/">Shop</a></li><li>&nbsp;|&nbsp;<a href="/privacy_policy.html">Cookies</a></li>
        </ul>
        <div id="logo">
            <h1 title="Link to home page">
            <a href="/index.html"><img src="http://www.foe.co.uk/imgs/common/new_friendsoftheearth_logo.png" alt="Friends of the Earth logo" border="0" /></a>
            </h1> 
        </div>
        <!--<div id="tagline">Making life better for people by inspiring solutions to environmental problems</div>-->
        <div id="shareandsearch">
<!-- Google CSE Search Box Begins  -->
<form action="/search_results.html" id="searchutil">
<input type="hidden" name="cx" value="001127977917864091225:nimbyc0rsoe" />
<input type="hidden" name="cof" value="FORID:11" />
<input type="text" name="q" id="searchbox" />
<input id="searchbutton" name="searchbutton" type="submit" value="Search" alt="Search submit button" title="Search submit button" />
</form>
<!-- Google CSE Search Box Ends -->
        </div>
    </div>
</div>
<!--/imgs/common/new_donate_arrow.png-->
<div id="primarynavwrapper">
<div id="primarynav-container">
    <ul id="primarynav">
     
                            <li id="nav-whatwedo"><a href="/what_we_do_index.html" title="What We Do"><span>What We Do</span></a>
                                <div class="dropdowncontent">
                                    <div class="activeindicator"></div>
                                    
                    <div class="dropdowncolumn">
                        <h2><a href="/what_we_do/about_us_index.html" class="">About Us</a></h2>
                        <ul class="dropdownlist">
                            
            <li><h3><a href="/what_we_do/about_us/friends_earth_values_beliefs.html">What we stand for</a></h3></li>
        
            <li><h3><a href="/what_we_do/about_us/successes_23915.html">Our successes</a></h3></li>
        
            <li><h3><a href="/what_we_do/about_us/friends_earth_works.html">How we work</a></h3></li>
        
            <li><h3><a href="/what_we_do/about_us/friends_earth_funded.html">How we're funded</a></h3></li>
        
            <li><h3><a href="/what_we_do/about_us/friends_earth_trust_limited.html">Trust &amp; Limited</a></h3></li>
        
                        </ul>
                    </div>
                
                    <div class="dropdowncolumn">
                        <h2><a href="/what_we_do/current_campaigns_index.html" class="">Current Campaigns</a></h2>
                        <ul class="dropdownlist">
                            
            <li><h3><a href="/what_we_do/the_bee_cause_home_map_39371.html">The Bee Cause</a></h3></li>
        
            <li><h3><a href="/what_we_do/clean_british_energy_clean_power_action_39060.html">Clean British Energy</a></h3></li>
        
            <li><h3><a href="/what_we_do/make_it_better_action_37571.html">Make It Better</a></h3></li>
        
            <li><h3><a href="/what_we_do/demand_climate_change_23337.html">International climate</a></h3></li>
        
                        </ul>
                    </div>
                
                    <div class="dropdowncolumn">
                        <h2><a href="/what_we_do/campaigns_index.html" class="">Our Work</a></h2>
                        <ul class="dropdownlist">
                            
            <li><h3><a href="/campaigns/climate_change.html">Climate Change</a></h3></li>
        
            <li><h3><a href="/campaigns/environmental_justice.html">Environmental Justice</a></h3></li>
        
            <li><h3><a href="/campaigns/green_economy.html">Green Economy</a></h3></li>
        
            <li><h3><a href="/campaigns/natural_resources.html">Natural Resources</a></h3></li>
        
                        </ul>
                    </div>
                
                    <div class="dropdowncolumn">
                        <h2><a href="/what_we_do/who_we_work_with_index.html" class="">Who We Work With</a></h2>
                        <ul class="dropdownlist">
                            
            <li><h3><a href="/what_we_do/charities_23172.html">Charities &amp; campaigners</a></h3></li>
        
            <li><h3><a href="/what_we_do/international_organisations_22992.html">International</a></h3></li>
        
            <li><h3><a href="/what_we_do/government_parliament_22991.html">Politicians</a></h3></li>
        
            <li><h3><a href="/what_we_do/local_authorities_22990.html">Local authorities</a></h3></li>
        
            <li><h3><a href="/what_we_do/business_22989.html">Business</a></h3></li>
        
                        </ul>
                    </div>
                
                                 </div>
                            </li>
                        
<li id="nav-getinvolved"><a href="/get_involved_index.html" title="Get Involved">
<span>Get Involved</span></a>
                                <div class="dropdowncontent">
                                    <div class="activeindicator"></div>
                                    
                    <div class="dropdowncolumn">
                        <h2><a href="/get_involved/act_online_index.html" class="">Act Online</a></h2>
                        <ul class="dropdownlist">
                            
            <li><h3><a href="/get_involved/33063.htm">Get a Bee Saver Kit</a></h3></li>
        
            <li><h3><a href="/get_involved/39496.htm">Email Samsung and Apple</a></h3></li>
        
            <li><h3><a href="/get_involved/39495.htm">Email your MP for clean energy</a></h3></li>
        
            <li><h3><a href="/get_involved/31088.htm">Shop, save and recycle</a></h3></li>
        
            <li><h3><a href="/get_involved/23638.htm">Facebook</a></h3></li>
        
            <li><h3><a href="/get_involved/39493.htm">Twitter</a></h3></li>
        
            <li><h3><a href="/get_involved/39494.htm">Email Updates</a></h3></li>
        
                        </ul>
                    </div>
                
                    <div class="dropdowncolumn">
                        <h2><a href="/get_involved/act_local_index.html" class="">Act local</a></h2>
                        <ul class="dropdownlist">
                            
            <li><h3><a href="/get_involved/community.html">Community</a></h3></li>
        
            <li><h3><a href="/get_involved/start_group.html">Start a local group</a></h3></li>
        
            <li><h3><a href="/get_involved/33087.html">Campaign Hubs</a></h3></li>
        
            <li><h3><a href="/get_involved/find_group.html">Find a local group</a></h3></li>
        
                        </ul>
                    </div>
                
                    <div class="dropdowncolumn">
                        <h2><a href="/get_involved/campaign_actions_index.html" class="">Campaign Actions</a></h2>
                        <ul class="dropdownlist">
                            
            <li><h3><a href="/get_involved/climate_change.html">Climate Change</a></h3></li>
        
            <li><h3><a href="/get_involved/green_economy.html">Green Economy</a></h3></li>
        
            <li><h3><a href="/get_involved/natural_resources.html">Natural Resources</a></h3></li>
        
            <li><h3><a href="/get_involved/environmental_justice.html">Environmental Justice</a></h3></li>
        
                        </ul>
                    </div>
                
                    <div class="dropdowncolumn">
                        <h2><a href="/get_involved/jobs_index.html" class="">Jobs</a></h2>
                        <ul class="dropdownlist">
                            
            <li><h3><a href="/press_for_change/jobs/templates/fundraising.html">Fundraise with us</a></h3></li>
        
                        </ul>
                    </div>
                
                    <div class="dropdowncolumn">
                        <h2><a href="/get_involved/living_index.html" class="">Lifestyle</a></h2>
                        <ul class="dropdownlist">
                            
            <li><h3><a href="/living/index_home_front.html">Home, Garden & Food</a></h3></li>
        
            <li><h3><a href="/living/index_reviews.html">Books</a></h3></li>
        
            <li><h3><a href="/living/index_interviews.html">People</a></h3></li>
        
            <li><h3><a href="/living/index_cradle_to_grave.html">Family</a></h3></li>
        
            <li><h3><a href="/living/cards.html">Send Ecards</a></h3></li>
        
            <li><h3><a href="/living/tips.html">Tip of the Day</a></h3></li>
        
                        </ul>
                    </div>
                
                    <div class="dropdowncolumn">
                        <h2><a href="/get_involved/learning_index.html" class="">Learning</a></h2>
                        <ul class="dropdownlist">
                            
            <li><h3><a href="/learning/youth_index.html">Youth</a></h3></li>
        
            <li><h3><a href="/learning/educators_index.html">Educators</a></h3></li>
        
                        </ul>
                    </div>
                
                    <div class="dropdowncolumn">
                        <h2><a href="/get_involved/volunteer_index.html" class="">Volunteer</a></h2>
                        <ul class="dropdownlist">
                            
            <li><h3><a href="/press_for_change/volunteer/why_volunteer.html">Why volunteer?</a></h3></li>
        
            <li><h3><a href="/press_for_change/volunteer/apply.html">Apply now</a></h3></li>
        
                        </ul>
                    </div>
                
                                 </div>
</li>

                            <li id="nav-newsevents"><a href="/news_and_events_index.html" title="News &amp;  Events"><span>News &amp;  Events</span></a>
                                <div class="dropdowncontent">
                                    <div class="activeindicator"></div>
                                    
                    <div class="dropdowncolumn">
                        <h2><a href="/news_events/news_index.html" class="">News</a></h2>
                        <ul class="dropdownlist">
                            
            <li><h3><a href="/news/safe_climate_index.html">Climate Change</a></h3></li>
        
            <li><h3><a href="/news/env_justice_index.html">Environmental Justice</a></h3></li>
        
            <li><h3><a href="/news/economy_index.html">Green Economy</a></h3></li>
        
            <li><h3><a href="/news/natural_resources_index.html">Natural Resources</a></h3></li>
        
            <li><h3><a href="/news/community_news_index.html">Local action</a></h3></li>
        
                        </ul>
                    </div>
                
                    <div class="dropdowncolumn">
                        <h2><a href="/news_events/events_index.html" class="">Events</a></h2>
                        <ul class="dropdownlist">
                            
            <li><h3><a href="/events/add_event.html">Add an event</a></h3></li>
        
            <li><h3><a href="/events/fundraising_events_36535.html">Fundraising Events</a></h3></li>
        
            <li><h3><a href="/events/training_events_34522.html">Learning and training</a></h3></li>
        
                        </ul>
                    </div>
                
                    <div class="dropdowncolumn">
                        <h2><a href="/news_events/keep_updated_23632.html" class="">Keep updated</a></h2>
                        <ul class="dropdownlist">
                            
            <li><h3><a href="/news_events/email_updates_index.html">Email Updates</a></h3></li>
        
            <li><h3><a href="/news_events/campaign_champions_index.html">Campaign champions</a></h3></li>
        
            <li><h3><a href="/news_events/rss.html">RSS</a></h3></li>
        
                        </ul>
                    </div>
                
                    <div class="dropdowncolumn">
                        <h2><a href="/news_events/blogs_36563.html" class="">Blogs</a></h2>
                        <ul class="dropdownlist">
                            
            <li><h3><a href="/news_events/green_blog_26301.html">Green Blog</a></h3></li>
        
            <li><h3><a href="/news_events/policy_blog.html">Policy &amp; Politics Blog</a></h3></li>
        
                        </ul>
                    </div>
                
                                 </div>
                            </li>
                        
                            <li id="nav-infodownloads"><a href="/info_and_downloads_index.html" title="Info &amp;  Downloads"><span>Info &amp;  Downloads</span></a>
                                <div class="dropdowncontent">
                                    <div class="activeindicator"></div>
                                    
                    <div class="dropdowncolumn">
                        <h2><a href="/resource/39439.html" class="">Downloads & Print</a></h2>
                        <ul class="dropdownlist">
                            
            <li><h3><a href="/resource/free_information_37938.html">Free booklets</a></h3></li>
        
            <li><h3><a href="/resource/38881.html">Earthmatters</a></h3></li>
        
            <li><h3><a href="/resource/39491.htm">Books</a></h3></li>
        
                        </ul>
                    </div>
                
                    <div class="dropdowncolumn">
                        <h2><a href="/resource/multimedia_22942.html" class="">Multimedia</a></h2>
                        <ul class="dropdownlist">
                            
            <li><h3><a href="/resource/links_17719.html">Links</a></h3></li>
        
            <li><h3><a href="/resource/video_playlists_37573.html">Videos</a></h3></li>
        
            <li><h3><a href="/resource/free_online_games_38556.html">Games</a></h3></li>
        
                        </ul>
                    </div>
                
                    <div class="dropdowncolumn">
                        <h2><a href="/resource/index.shtml" class="">Documents</a></h2>
                        <ul class="dropdownlist">
                            
            <li><h3><a href="/resource/23655.html">Briefings</a></h3></li>
        
            <li><h3><a href="/resource/23687.html">Latest</a></h3></li>
        
            <li><h3><a href="/resource/23691.html">Popular</a></h3></li>
        
            <li><h3><a href="/resource/23654.html">Reports</a></h3></li>
        
                        </ul>
                    </div>
                
                    <div class="dropdowncolumn">
                        <h2><a href="/resource/faqs.html" class="">FAQs</a></h2>
                        <ul class="dropdownlist">
                            
            <li><h3><a href="/resource/faqs/campaigns.html">Campaigns</a></h3></li>
        
            <li><h3><a href="/resource/faqs/events.html">Events</a></h3></li>
        
            <li><h3><a href="/resource/faqs/getinvolved.html">Get involved</a></h3></li>
        
            <li><h3><a href="/resource/faqs/learning.html">Learning</a></h3></li>
        
            <li><h3><a href="/resource/faqs/living.html">Lifestyle</a></h3></li>
        
                        </ul>
                    </div>
                
                                 </div>
                            </li>
                        
                            <li id="nav-donatenow" class="donate"><a href="/donate_now.html" title="Donate Now"><span>Donate Now</span></a></li>
                            
    </ul>
</div>
</div>
<div id="content">   
    <div id="contentwrapper">
        <div class="fixedwidth">
            <div id="breadcrumbs">
                <ul>
                
                    <li><a href="/index.html">Home</a> &gt;</li>
                    
                    <li><a href="/news_and_events_index.html">News &amp;  Events</a> &gt;</li>
                    
                    <li><a href="/news_events/blogs_36563.html">Blogs</a> &gt;</li>
                    
                    <li>Green Blog</li>
                
                
                
                
                </ul>
            </div> 
            <div id="subnav">  

                    
                    
                    
                        <ul class="parentsection">
                            <li class="headerlink">
                                <a href="/news_events/blogs_36563.html">Blogs</a>
                            </li>
                            <!--/news_events/green_blog_archive.html--><!--/news_events/policy_blog_archive.html-->
                                    <li class="active">
                                        <a href="/news_events/green_blog_26301.html">
                                            Green Blog
                                        </a>
                                    </li>
                                
                                    <li>
                                        <a href="/news_events/policy_blog.html">
                                            Policy &amp; Politics Blog
                                        </a>
                                    </li>
                                
                        </ul>
                    
                    
                    
                    

                
                
                
            
            
            
<!-- CONTAINER: 0 --> 

</div>