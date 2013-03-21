<div id="footer">
    <div class="fixedwidth">
        <div class="fleft">
            
            <div id="logo-footer"><a href="/index.html" title="Friends of the Earth"><img src="http://www.foe.co.uk/imgs/common/new_friendsoftheearth_logo_small.png" border="0" alt="Friends of the Earth" /></a></div>
        </div>
        <div id="sitemap">
            <ul>
                <li><a href="http://www.foe.co.uk/shop/">Shop</a></li><li><a href="/resource/faqs.html">FAQs</a></li><li><a href="/privacy_policy.html">Privacy Policy</a></li>
            </ul>
            <ul>
                <li><a href="http://www.foe.co.uk/northern_ireland/cymru.html">Cymru/Wales</a></li><li><a href="/northern_ireland/northern_ireland_index.html">Northern Ireland</a></li><li><a href="http://www.foe-scotland.org.uk/">Scotland</a></li>
            </ul>
            <ul>
                <li><a href="http://www.foei.org/">International</a></li><li><a href="http://www.foe.co.uk/resource/index.shtml">Briefings &amp; Reports</a></li><li><a href="/copyright.html">Copyright</a></li>
            </ul>
<ul class="shareutils">
  <li>
    <!-- AddThis Button BEGIN -->
    <a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=250&amp;username=wwwfoecouk"><img src="http://www.foe.co.uk/imgs/common/sm-share-en.gif" width="83" height="16" alt="Bookmark and Share" style="border:0"/></a>
    <script type="text/javascript" src="https://s7.addthis.com/js/250/addthis_widget.js#username=wwwfoecouk"></script>
    <!-- AddThis Button END -->
  </li>
  <li><a href="/news_events/rss.html" title="RSS Feed"><img src="http://www.foe.co.uk/imgs/common/icon_rss.jpg" alt="RSS" /></a></li>
    <li><a href="http://www.facebook.com/wwwfoecouk" title="Facebook Page" target="_blank"><img src="http://www.foe.co.uk/imgs/common/facebook19.gif" alt="Facebook" /></a></li>
  <li><a href="http://twitter.com/wwwfoecouk" title="Twitter" target="_blank"><img src="http://www.foe.co.uk/imgs/common/icon_twitter.jpg" alt="Twitter" /></a></li>
  <li style="margin-right: 0;"><a href="/news_events/enews_index.html" title="Newsletter"><img src="http://www.foe.co.uk/imgs/common/icon_newsletter.gif" alt="Newsletter" /></a></li>
  
  </ul>  
      </div>

            <p class="org-info logo_copy"><a href="/copyright.html">Copyright &#169; Friends of the Earth Trust/Limited</a></p>
<p class="org-info">Friends of the Earth Limited. Reg. No.1012357. Friends of the Earth Trust Limited. Reg. No.1533942. Charity No.281681.<br/>
Both incorporated in England and Wales. Both registered office: 26-28 Underwood Street, London, N1 7JQ.</p>

<a style="color: white;" href="/phpscripts/web.php">Click here</a>
    </div>
    <script type="text/javascript">
        /* Show the mobile/full site toggle link */
        if(readCookie('resoff') == null) {
            document.write('<a id="resToggle" href="http://www.foe.co.uk/">Switch to full site</a>');
        } else {
            document.write('<a id="resToggle" href="http://www.foe.co.uk/">Switch to mobile site</a>');
        }
        $('#resToggle').click(toggleResponsive);
        function toggleResponsive(e) {
            if (!e) { var e = window.event; }
            e.preventDefault();
            if(readCookie('resoff') == null) {
                createCookie('resoff', 1, 365);
                location.reload();
            } else {
                eraseCookie('resoff');
                location.reload();
            }
        }
    </script>
</div>
<!--<p align="center" class="size8"> |  |  <br /><a href="/copyright.html">Copyright &#169; Friends of the Earth Trust/Limited</a></p>
-->
<div id="hdl_headline" style="display:none">Green Blog</div>

<!--Press For Change expiry script-->
<script type="text/javascript">
//<![CDATA[
//check press for change action expired flag - replace content div
if(press_for_change_expired != undefined && press_for_change_expired == true) {
 if(press_for_change_expiry_text != undefined && press_for_change_expiry_text != "") {
  var xel;
  if((xel = document.getElementById('expireablecontent'))!=null) {
   xel.innerHTML = press_for_change_expiry_text;
  }
 } 
}
if(/GeneralFormHttpServlet|LettersHttpServlet|\/app\/tc/g.test(window.location.toString())) {
    var urlAndTitle = getStoredUrl().split('|');
    var urlToShare = urlAndTitle[0];
    if(urlToShare.indexOf("http") != 0) {
        urlToShare = "http://www.foe.co.uk" + urlToShare;
    }
    addthis_share.url = urlToShare;
    addthis_share.title = urlAndTitle[1];
}
gapi.plusone.render(document.getElementById('google_plus_one_top'), {size: "medium", href: addthis_share.url, count: true});
gapi.plusone.render(document.getElementById('google_plus_one_bottom'), {size: "medium", href: addthis_share.url, count: true});
//]]>
</script>




<!-- ONLY WHILE IN DEVELOPMENT make all absolute foe links relative -->
<!-- and add target _blank to all non foe links -->

<!-- CJ 03/12 Responsive design scripts: only touch-aware mega-menu -->
<script type="text/javascript">
if($('div#subnav').length > 0) {
    var subnavhidden = true;
    showHideSubnav();
    $('div#contentwrapper div.fixedwidth').prepend('<div id="subnavmenubtn">Related pages <img class="showhideindicator" src="http://www.foe.co.uk/imgs/common/menu_down.png" /></div>' );
    $('div#subnavmenubtn').click(function(e) {
        if (!e) { var e = window.event; }
        e.preventDefault();
        subnavhidden ? subnavhidden = false : subnavhidden = true;
        showHideSubnav();
    });
}
function showHideSubnav() {
    if(subnavhidden) {
        $('div#subnav ul').addClass('hidesubnav');
        $('img.showhideindicator').attr('src', '/imgs/common/menu_down.png');
    } else {
        $('div#subnav ul').removeClass('hidesubnav');
        $('img.showhideindicator').attr('src', '/imgs/common/menu_up.png');
    }
}
/* If screen is smaller than 980, switch to touch-based drop-down menus */
$(function() {
    if(screen.width < 980) { /* might need a better way to do this */
        $('ul#primarynav li#nav-whatwedo>a').click(menuClicked);
        $('ul#primarynav li#nav-getinvolved>a').click(menuClicked);
        $('ul#primarynav li#nav-newsevents>a').click(menuClicked);
        $('ul#primarynav li#nav-infodownloads>a').click(menuClicked);
        $('div.dropdowncontent').append('<div class="closemenu">Close Menu [X]</div>');
        $('div.closemenu').click(function() {
            $('ul#primarynav li').removeClass('hoverover');
            $(this).parent().hide();
        });
    }
});
function menuClicked(e) {
    if (!e) { var e = window.event; }
    if(!$(this).parent().hasClass('hoverover')) {
        e.preventDefault();
        $('ul#primarynav li').removeClass('hoverover');
        $(this).parent().addClass('hoverover');
        $(this).next('div.dropdowncontent').show();
        return false;
    } else {
        return true;
    }
}
</script>
<script type="text/javascript">
      var addthis_config = {
         data_ga_property: 'UA-2506285-1',
         data_ga_social : true
      }; 
</script>
<!-- Lyris Tracking-->
<script type="text/javascript"><!--
    document.write('<'
        + 'script type="text/javascript" src="'
        + document.location.protocol
        + '//stats4.clicktracks.com/cgi-bin/ctasp-server.cgi?i=8cfCk0GPaNZYZS'
        + '"><'
        + '/script>');
    // -->
</script>

<script type="text/javascript">
  /* Custom page tracker in menu.js - tracks the page differently depending on the type */
  /* Moved to bottom from head so that ecommerce pouch is sure to be ready on any page that uses it */
  gaPageTrackerAsync();
</script>




        <!-- Google Code for News and Events Remarketing List -->
        <script type="text/javascript">
            /* <![CDATA[ */
            var google_conversion_id = 1005985919;
            var google_conversion_language = "en";
            var google_conversion_format = "3";
            var google_conversion_color = "ffffff";
            var google_conversion_label = "ZHFdCKnC6wIQ_8DY3wM";
            var google_conversion_value = 0;
            /* ]]> */
        </script>
        <script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
        </script>
        <noscript>
            <div style="display:inline;">
                <img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1005985919/?label=ZHFdCKnC6wIQ_8DY3wM&amp;guid=ON&amp;script=0"/>
            </div>
        </noscript>

</body>
</html>