<?php get_header(); ?>

<div id="expireablecontent" class="centrecolumnwrapper"> 
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
<p>We see things differently. We see ideas, solutions, fresh perspectives, ways of living that will lead to a new, positive relationship between people and the environment.</p>
        <p>&nbsp;</p>
</div>

<?php $categories=get_categories(); foreach($categories as $category): ?>

<div class="block-subcontent">
    <a href="<?php echo get_category_link( $category->term_id ); ?>" class="fleft"><img src="http://www.foe.co.uk/imgs/_MG_2168_rdax_219x140.jpg" alt="" width="219" height="140"></a>
    <h3><a href="<?php echo get_category_link( $category->term_id ); ?>"><strong><?php echo $category->name ?></strong></a></h3>
    <p><?php echo $category->description ?></p>
    <a href="<?php echo get_category_link( $category->term_id ); ?>" class="morearrow">Read more <img alt="View more" src="http://www.foe.co.uk/imgs/common/viewmore_arrow.gif"></a>
</div>

<?php endforeach; ?>

<!-- 
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
    <?php endwhile; ?>
<?php else: ?>

<?php endif; ?>
-->
</div>

<div id="rightcolumnwrapper" class=" dynval">
    <div class="relatedpanel">
        <h4>Related links</h4>
        <ul>
            <li><a href="/what_we_do/current_campaigns_index.html">Current campaigns</a></li>
        </ul>
    </div>
</div>

<?php get_footer(); ?>

