<?php get_header(); ?>

<div id="expireablecontent" class="centrecolumnwrapperwide"> 
    <div id="abovecontentheader" >
        <div id="subsectioncontainer" >           
            <h2 class="subsection">Blogs</h2>     
        </div>
    
        <div id="likeandtweetcontainertop" class="addthis_toolbox addthis_default_style">       
            <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a><a class="addthis_button_tweet" tw:via="wwwfoecouk"></a><div id="google_plus_one_top"></div>
        </div>
    </div>

<?php /* wp_nav_menu(array('theme_location'  => 'primary')); */ ?>

<h1 class="contentheader" style="margin-bottom:5px; padding-bottom:0px">Blogs</h1>

<div class="intro">
<p><?php echo category_description(); ?></p>
</div>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <!-- <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> -->
        
<div class="policyblog" style="padding: 10px 0px 1px 10px">
    
    <div style="float:left; width:117px">
        <?php echo get_avatar( get_the_author_meta('ID'), 50 ); ?> <!-- <img src="<?php get_the_author_meta(); ?>" alt="wendy.yuen" border="0" style="margin:0 20px 0 0" width="50px" height="50px" />--><br />
        <p class="small" style="color:#000000; margin-top:2px; margin-bottom:15px"><?php echo get_the_author_meta('display_name'); ?></p>
        <p class="small" style="color:#000000; margin-top:0px; margin-bottom:15px"><?php echo the_date(); ?></p>
        <p class="small" style="color:#000000; margin-top:0px; margin-bottom:15px"></p>
    </div>
    <div style="float:left; width:345px">
        <h3 id="lh39498"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php the_excerpt(); ?>
        <span style="display: none" id="39498"><?php the_permalink(); ?></span>
    </div>
    <div style="float:right; width:176px;">
        <?php echo the_post_thumbnail(); ?><br />
        <div style="text-align:right"><p class="small" style="color:#000000; margin-top:0px; margin-bottom:7px; width:173px"></p><br />
            <a href="http://www.facebook.com/share.php?u=http://www.foe.co.uk/green_blog/mappiness_why_our_new_green_39498.html">
                <img src="/imgs/facebook_blog.gif" width="17" height="17" alt="Share on Facebook" style="border:0; margin-right:12px" />
            </a>
            <a href="http://twitter.com/share?url=http://www.foe.co.uk/green_blog/mappiness_why_our_new_green_39498.html">
                <img src="/imgs/twitter_blog.gif" width="17" height="17" alt="Share on Twitter" style="border:0; margin-right:12px" />
            </a>
    <!-- 2 AddThis Button BEGIN -->
        <a class="addthis_button" addthis:title="Mappiness: why our new Green Britain map makes me happy " addthis:url="http://www.foe.co.uk/green_blog/mappiness_why_our_new_green_39498.html" href=http://www.addthis.com/bookmark.php?v=250&amp;username=wwwfoecouk>
            <img src="http://www.foe.co.uk/imgs/common/sm-share-en.gif" width="83" height="16" alt="Bookmark and Share" style="border:0"/>
        </a>
        <script type="text/javascript" src="https://s7.addthis.com/js/250/addthis_widget.js#username=wwwfoecouk"></script>
    <!-- 2 AddThis Button END -->
        </div>
    </div>
</div>
<br clear="both" />
        
    <?php endwhile; ?>
<?php else: ?>

<?php endif; ?>

</div>

<?php get_footer(); ?>

