<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="no-js ie lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie lt-ie9 gt-ie7" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie lt-ie10 gt-ie7 gt-ie8 ie-9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js no-ie" lang="en">
<!--<![endif]-->

<head>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-6502389852580791",
        enable_page_level_ads: true
    });
    </script>

<?php $siteID = get_current_blog_id();
    if ( $siteID == '1' ) { ?>  
    
    <?php } elseif ( $siteID == '2' ) { ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WPRQ386');</script>
    <!-- End Google Tag Manager -->
<?php } ?>
<meta charset="<?php bloginfo('charset'); ?>">
<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>

<?php 

load_segment( 'header', 'href-lang-tags' );
load_segment( 'header', 'custom-styles' );

$post_id = get_the_ID();
$permalink = get_permalink(); 
$siteID = get_current_blog_id();

    if ( $siteID == '1' ) { } elseif ( $siteID == '2' ) { ?>
        <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window,document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '121214815232917'); 
            fbq('track', 'PageView');
        </script>
        <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=121214815232917&ev=PageView &noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->
        
    <?php } ?>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title(''); ?></title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/min/fa-solid.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/min/fontawesome.min.css">
    <!-- <link rel="stylesheet" href="<?php //echo get_template_directory_uri(); ?>/assets/css/min/styles-min.css?v=7"> -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/min/style.css?v=20" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">
    <meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/assets/images/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <script>(function(h){h.className = h.className.replace('no-js', 'js')})(document.documentElement)</script>

    <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/html5shiv.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/respond2.min.js"></script>
    <![endif]-->

    <!-- Google Tag Manager -->
    <!-- End Google Tag Manager -->

    <script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script> 
    <script>  
        var googletag = googletag || {};  googletag.cmd = googletag.cmd || []; 
    </script> 
    <?php 
    wp_head();

    global $hero_image;
    $hero_image = false;

    global $true_leaderboard_ad_count;
    $true_leaderboard_ad_count = 1;

    global $true_mobile_leaderboard_ad_count;
    $true_mobile_leaderboard_ad_count = 1;

    global $true_mobile_square_ad_count;
    $true_mobile_square_ad_count = 1;

    global $ad_id;
    if(is_front_page()) {
        $ad_id = 'homepage';
    }
    else if(is_single() && !is_page()) {
        $page_slug = trim(str_replace(home_url(),'',get_permalink()),"/");
        $page_slug_arr = explode('/', $page_slug);

        if(get_category_by_slug($page_slug_arr[1])) {
            $cut_off = 2;
        } else {
            $cut_off = 1;
        }

        array_splice($page_slug_arr, $cut_off);
        $ad_id = implode('_', $page_slug_arr);
    }
    else {
        $page_slug = trim(str_replace(home_url(),'',get_permalink()),"/");
        $page_slug_arr = explode('/', $page_slug);
        array_splice($page_slug_arr, 2);
        $ad_id = implode('_', $page_slug_arr);
    }

    ?>

    <?php 
    $post_type = get_post_type(); 
    $taxonomy = 'holiday-types';
    //$term = get_term( $term_id, $taxonomy );

    $post_id = get_the_ID();

    global $post;
    $post_slug=$post->post_name;
    $curr_cat = get_category_by_slug($post_slug);

    if(is_single()) {
        $cat_structure = find_post_cat_structure();   
    } elseif(is_category()) {
        $cat_structure = find_category_cat_structure($wp_query->get_queried_object_id());   
    } elseif($curr_cat) {
        $cat_structure = find_category_cat_structure($curr_cat->term_id);   
        $post_type = 'category';
    }

    ?>

<?php $is_gap = get_field('gap_article');
if ( $is_gap == 'yes' ) { ?>

	<?php if ( $siteID == '1' ) { ?>

    <!-- OBM Script -->
    <script type="text/javascript">
        (function () {
            window.$cs = window.$cs || { cmd: [] };
            $cs.placements = {
                'fmt_970x250_1': { sizes: [[970, 250], [728, 90], [970, 90]] },
                'fmt_728x90_1': { sizes: [[970, 250], [728, 90], [970, 90]] },
                'fmt_728x90_2': { sizes: [[728, 90]] },
                'fmt_300x250_1': { sizes: [[300, 250]] },
                'fmt_300x250_2': { sizes: [[300, 250]] },
                'fmt_300x250_3': { sizes: [[300, 250]] },
                'fmt_sponsored_1': { sizes: [[730, 730]] },
            };
            $cs.publisherId = "69415350505453556146555F3344";
            var csTag = document.createElement('script');
            csTag.async = true;
            csTag.type = 'text/javascript';
            var useSSL = 'https:' == document.location.protocol;
            var domain = "www.formulatracks.com";
            csTag.src = (useSSL ? 'https:' : 'http:') + '//' + domain + '/scripts/placements/www-formulatracks-com/tcb.min.js?pid=' + $cs.publisherId + '&pl=' + encodeURIComponent(JSON.stringify($cs.placements || {}));
            var node = document.getElementsByTagName('script')[0];
            node.parentNode.insertBefore(csTag, node);
        })();
    </script>
    <!-- End Of OBM Script -->	
	<?php // if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { /* gtm4wp_the_gtm_tag(); */ } 
	
	} else { } 
		
	} else { 
	
    if ( $siteID == '1' ) { ?>
        <script>
            <?php 
                echo '// ad id: '.$ad_id;
                echo '// eg: FT_'.$ad_id.'_leaderboard';
                echo '// eg: FT_'.$ad_id.'_square';

                $terms = wp_get_post_terms(get_the_ID(), 'holiday-types'); 
                if($terms) {
                    $term_list = $terms[0]->slug;
                } else {
                    $term_list = '';
                }
            ?>
            //Asc Fix1
        </script> 

        <script>
            googletag.cmd.push(function() {
                googletag.pubads().setTargeting("child-category", "<?php echo $cat_structure['cat_slug']; ?>");
                googletag.pubads().setTargeting("child-category-id", "<?php echo $cat_structure['cat_id']; ?>");
                googletag.pubads().setTargeting("parent-category", "<?php echo $cat_structure['parent_cat_slug']; ?>");  
                googletag.pubads().setTargeting("parent-category-id", "<?php echo $cat_structure['parent_cat_id']; ?>");
                googletag.pubads().setTargeting("grandparent-category", "<?php echo $cat_structure['grandparent_cat_slug']; ?>");
                googletag.pubads().setTargeting("grandparent-cat-id", "<?php echo $cat_structure['grandparent_cat_id']; ?>");
                
                googletag.pubads().setTargeting("holiday-type", "<?php echo $term_list; ?>");
                googletag.pubads().setTargeting("post-id", "<?php echo $post_id; ?>");
                googletag.pubads().setTargeting("post-type", "<?php echo $post_type; ?>");
                googletag.pubads().setTargeting("family-type", "");                
                googletag.pubads().setTargeting("month", ""); 
                googletag.pubads().setTargeting("site",".com");            
                googletag.pubads().enableSingleRequest();
                googletag.pubads().collapseEmptyDivs();
                googletag.enableServices();
            });
        </script>

    <?php } elseif ( $siteID == '2' ) { ?>
    
    <script>
        <?php echo '// ad id: '.$ad_id; ?>

        <?php echo '// eg: FT_'.$ad_id.'_leaderboard'; ?>

        <?php echo '// eg: FT_'.$ad_id.'_background'; ?>

        <?php
        $terms = wp_get_post_terms(get_the_ID(), 'holiday-types'); 

        if($terms) {
            $term_list = $terms[0]->slug;
        } else {
            $term_list = '';
        }
        ?>

        googletag.cmd.push(function() {
            googletag.pubads().setTargeting("child-category", "<?php echo $cat_structure['cat_slug']; ?>");
            googletag.pubads().setTargeting("child-category-id", "<?php echo $cat_structure['cat_id']; ?>");
            googletag.pubads().setTargeting("parent-category", "<?php echo $cat_structure['parent_cat_slug']; ?>");  
            googletag.pubads().setTargeting("parent-category-id", "<?php echo $cat_structure['parent_cat_id']; ?>");
            googletag.pubads().setTargeting("grandparent-category", "<?php echo $cat_structure['grandparent_cat_slug']; ?>");
            googletag.pubads().setTargeting("grandparent-cat-id", "<?php echo $cat_structure['grandparent_cat_id']; ?>");
            googletag.pubads().setTargeting("holiday-type","<?php echo $term_list; ?>");
            googletag.pubads().setTargeting("post-id","<?php echo $post_id; ?>");
            googletag.pubads().setTargeting("post-type", "<?php echo $post_type; ?>");
            googletag.pubads().setTargeting("family-type", "");                
            googletag.pubads().setTargeting("month", ""); 
            googletag.pubads().setTargeting("site","US");            
            googletag.pubads().enableSingleRequest();
            googletag.pubads().collapseEmptyDivs();
            googletag.enableServices();
        });
    </script>
        
	<?php } ?>
    
    <?php 
    
    if( current_user_can('editor') || current_user_can('administrator') ) { } else {
    
    if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } 
    
    }
    
    } ?>	
	
	<?php include( 'marketplace-api-feeds.php' ); ?>

<?php if ( wp_is_mobile() ) { ?>
<!-- <script type="text/javascript">
document.getElementsByClassName('search-link');
var form = document.createElement('form');
form.innerHTML = '<form method="get" action="https://famtravsticky1.staging.wpengine.com/"><input type="text" name="s" value="" class="destination-search--input" id="search-input" placeholder="Search"><input type="submit" value="submit" class="destination-search--submit"></form>';
document.getElementsByClassName('search-link').appendChild(form);
</script>
-->

<script>
jQuery(document).ready(function(){ 	 
	jQuery('.owl-stage-outer').css('height', '320px;'); 
});
</script>
<style>
.loop-pagination { display: none; }
li.main-nav-dropdown--menu:nth-of-type(1) { display: none; }
</style>
<?php } else { } ?>

<!--<script>
jQuery(document).ready(function(){ 	 
	var sliderHeight = jQuery('.owl-stage').height();
	jQuery('.owl-stage-outer').css('height', sliderHeight); 
});
</script>
-->

<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
<script>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
</script>

<?php if ( $siteID == '1' ) { ?>
<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/54911287/FT_inread_1x1', [1, 1], 'div-gpt-ad-1507903364549-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
<!--<script type="text/javascript" class="teads" async="true" src="http://a.teads.tv/page/73239/tag"></script>-->
<?php } else { } ?>
<!-- Quantcast Choice. Consent Manager Tag -->
<script type="text/javascript" async=true>
    var elem = document.createElement('script');
    elem.src = 'https://quantcast.mgr.consensu.org/cmp.js';
    elem.async = true;
    elem.type = "text/javascript";
    var scpt = document.getElementsByTagName('script')[0];
    scpt.parentNode.insertBefore(elem, scpt);
    (function() {
    var gdprAppliesGlobally = true;
    function addFrame() {
        if (!window.frames['__cmpLocator']) {
        if (document.body) {
            var body = document.body,
                iframe = document.createElement('iframe');
            iframe.style = 'display:none';
            iframe.name = '__cmpLocator';
            body.appendChild(iframe);
        } else {
            // In the case where this stub is located in the head,
            // this allows us to inject the iframe more quickly than
            // relying on DOMContentLoaded or other events.
            setTimeout(addFrame, 5);
        }
        }
    }
    addFrame();
    function cmpMsgHandler(event) {
        var msgIsString = typeof event.data === "string";
        var json;
        if(msgIsString) {
        json = event.data.indexOf("__cmpCall") != -1 ? JSON.parse(event.data) : {};
        } else {
        json = event.data;
        }
        if (json.__cmpCall) {
        var i = json.__cmpCall;
        window.__cmp(i.command, i.parameter, function(retValue, success) {
            var returnMsg = {"__cmpReturn": {
            "returnValue": retValue,
            "success": success,
            "callId": i.callId
            }};
            event.source.postMessage(msgIsString ?
            JSON.stringify(returnMsg) : returnMsg, '*');
        });
        }
    }
    window.__cmp = function (c) {
        var b = arguments;
        if (!b.length) {
        return __cmp.a;
        }
        else if (b[0] === 'ping') {
        b[2]({"gdprAppliesGlobally": gdprAppliesGlobally,
            "cmpLoaded": false}, true);
        } else if (c == '__cmp')
        return false;
        else {
        if (typeof __cmp.a === 'undefined') {
            __cmp.a = [];
        }
        __cmp.a.push([].slice.apply(b));
        }
    }
    window.__cmp.gdprAppliesGlobally = gdprAppliesGlobally;
    window.__cmp.msgHandler = cmpMsgHandler;
    if (window.addEventListener) {
        window.addEventListener('message', cmpMsgHandler, false);
    }
    else {
        window.attachEvent('onmessage', cmpMsgHandler);
    }
    })();
    window.__cmp('init', {
    		'Language': 'en',
		'Initial Screen Reject Button Text': 'I DO NOT ACCEPT',
		'Initial Screen Accept Button Text': 'I ACCEPT',
		'Purpose Screen Body Text': 'You can set your consent preferences and determine how you want your data to be used based on the purposes below. You may set your preferences for us independently from those of third-party partners. Each purpose has a description so that you know how we and partners use your data.',
		'Purpose Screen Vendor Link Text': 'See Vendors',
		'Purpose Screen Save and Exit Button Text': 'SAVE &amp; EXIT',
		'Vendor Screen Body Text': 'You can set consent preferences for individual third-party partners we work with below. Expand each company list item to see what purposes they use data for to help make your choices. In some cases, companies may use your data without asking for your consent, based on their legitimate interests. You can click on their privacy policy links for more information and to object to such processing. ',
		'Vendor Screen Accept All Button Text': 'ACCEPT ALL',
		'Vendor Screen Reject All Button Text': 'REJECT ALL',
		'Vendor Screen Purposes Link Text': 'Back to Purposes',
		'Vendor Screen Save and Exit Button Text': 'SAVE &amp; EXIT',
		'Initial Screen Body Text': 'We and our partners use technologies, such as cookies, and process personal data, such as IP addresses and cookie identifiers, to personalise ads and content based on your interests, measure the performance of ads and content, and derive insights about the audiences who saw ads and content. Click below to consent to the use of this technology and the processing of your personal data for these purposes. You can change your mind and change your consent choices at any time by returning to this site. ',
		'Initial Screen Body Text Option': 1,
		'Publisher Name': 'Family Traveller',
		'Publisher Logo': 'https://familytraveller.com/wp-content/themes/FamilyTraveller2018/assets/images/ft-logo-black.png',
		'Display UI': 'always',
		'Publisher Purpose IDs': [1,2,3,4,5],
		'Post Consent Page': 'https://familytraveller.com/',
		'Consent Scope': 'service',
    });
</script>
<!-- End Quantcast Choice. Consent Manager Tag -->
    <style>
        .qc-cmp-button {
          background-color: #07A1E2 !important;
          border-color: #07A1E2 !important;
        }
        .qc-cmp-button:hover {
          background-color: transparent !important;
          border-color: #07A1E2 !important;
        }
        .qc-cmp-alt-action,
        .qc-cmp-link {
          color: #07A1E2 !important;
        }
        .qc-cmp-button.qc-cmp-secondary-button:hover
         {
          border-color: transparent !important;
          background-color: #07A1E2 !important;
        }
        .qc-cmp-button {
          color: #ffffff !important;
        }
        .qc-cmp-button.qc-cmp-secondary-button {
          color: #ffffff !important;
        }
        .qc-cmp-button.qc-cmp-button.qc-cmp-secondary-button:hover {
          color:#ffffff !important;
        }
        .qc-cmp-button.qc-cmp-secondary-button {
          border-color: #1582BF !important;
          background-color: #1582BF !important;
        }
        .qc-cmp-ui,
        .qc-cmp-ui .qc-cmp-main-messaging,
        .qc-cmp-ui .qc-cmp-messaging,
        .qc-cmp-ui .qc-cmp-beta-messaging,
        .qc-cmp-ui .qc-cmp-title,
        .qc-cmp-ui .qc-cmp-sub-title,
        .qc-cmp-ui .qc-cmp-purpose-info,
        .qc-cmp-ui .qc-cmp-table,
        .qc-cmp-ui .qc-cmp-table-header,
        .qc-cmp-ui .qc-cmp-vendor-list,
        .qc-cmp-ui .qc-cmp-vendor-list-title {
            color: #262626 !important;
        }
        .qc-cmp-ui a,
        .qc-cmp-ui .qc-cmp-alt-action,
        .qc-cmp-toggle-status  {
          color: #07A1E2 !important;
        }
                .qc-cmp-ui {
                    background-color: #ffffff !important;
                }
                .qc-cmp-publisher-purposes-table .qc-cmp-table-header {
                  background-color: #ffffff !important;
                }
                .qc-cmp-publisher-purposes-table .qc-cmp-table-row {
                  background-color: #ffffff !important;
                }
                .qc-cmp-vendor-list .qc-cmp-vendor-row {
                  background-color: #ffffff !important;
                }
                .qc-cmp-vendor-list .qc-cmp-vendor-row-header {
                    background-color: #ffffff !important;
                  }
                .qc-cmp-table {
                    border: 1px solid #000000 !important;
                }
                .qc-cmp-table-row {
                    border-top: 1px solid #000000 !important;
                }
                .qc-cmp-vendor-list {
                    border: 1px solid #000000 !important;
                }
                .qc-cmp-vendor-row {
                    border-top: 1px solid #000000 !important;
                }
                .qc-cmp-arrow-down {
                    background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='none' stroke='#000000' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E %3Cpolyline points='2 5 8 11 14 5'/%3E %3C/svg%3E") center no-repeat;
                }
                .qc-cmp-toggle-status {
                    color: #000000 !important;
                }
                .qc-cmp-table-header {
                    color: #000000;
                }
        .qc-cmp-small-toggle.qc-cmp-toggle-on,
        .qc-cmp-toggle.qc-cmp-toggle-on {
            background-color: #07A1E2 !important;
            border-color: #07A1E2 !important;
        }
    </style>

<?php $sponsored_content = get_field('sponsored_content');
if(strtolower($sponsored_content) == 'yes' && is_single() && ( $siteID == '1' )) { } else { ?>
<script type="text/javascript" src="//s.ntv.io/serve/load.js" async></script>
<script type="text/javascript">    
    window._seedtagq = window._seedtagq || [];    
    window._seedtagq.push(['_setId', '3552-1496-01']);    
    (function () 
        {      
            var st = document.createElement('script');      
            st.type = 'text/javascript';      
            st.async = true;      
            st.src = ('https:' == document.location.protocol        ? 'https'        : 'http') + '://config.seedtag.com/loader.js?v=' + Math.random();      
            var s = document.getElementsByTagName('script')[0];      
            s.parentNode.insertBefore(st, s);    
        })();    
    </script>
<?php } ?>

<?php $sponsored_content = get_field('sponsored_content');
if(strtolower($sponsored_content) == 'yes' && is_single() && ( $siteID == '2' )) { } else { ?> 
    <script type="text/javascript">    
    window._seedtagq = window._seedtagq || [];    
    window._seedtagq.push(['_setId', '3552-1496-01']);    
    (function () 
        {      
            var st = document.createElement('script');      
            st.type = 'text/javascript';      
            st.async = true;      
            st.src = ('https:' == document.location.protocol        ? 'https'        : 'http') + '://config.seedtag.com/loader.js?v=' + Math.random();      
            var s = document.getElementsByTagName('script')[0];      
            s.parentNode.insertBefore(st, s);    
        })();    
    </script>
    <style>
        .header{ left: 0; }

        @media screen and (min-width: 1250px) {
            .page-template-page-template-flexible-php .card-grid, 
            .page-template-page-template-flexible-php .card-grid--slider {
                width: 100% !important;
                max-width: 990px !important;
            }

            .page-template-page-template-flexible-php .card-grid .card, 
            .page-template-page-template-flexible-php .card-grid .card-fake, 
            .page-template-page-template-flexible-php .card-grid--slider .card, 
            .page-template-page-template-flexible-php .card-grid--slider .card-fake {
                width: 100% !important;
                max-width: 300px !important;
            }
        }
    </style>

    <script>
        googletag.cmd.push(function() {
            googletag.defineSlot('/54911287/FT_inread_1x1', [1, 1], 'div-gpt-ad-1507903364549-0').addService(googletag.pubads());
            googletag.pubads().enableSingleRequest();
            googletag.enableServices();
        });
    </script>
<?php } ?>

<?php $sponsored_content = get_field('sponsored_content');
if(strtolower($sponsored_content) == 'yes' && is_single() ) { } else { ?>
<?php } ?>

<!-- 
<script>
     jQuery(document).ready(function(){ 
    	jQuery('a#usa_flag').click(function() { jQuery("a#ukflag").toggleClass('hidden-flag'); });
    }); 
</script>
<script>
     jQuery(document).ready(function(){ 
    	jQuery('a#uk_flag').click(function() { jQuery("a#usaflag").toggleClass('hidden-flag'); }); 
    }); 

</script>
-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
<?php if ( is_page( array( 35695 ) ) ) { 
?>

<?php } 
else {
echo  '';
}
?>

<link rel="manifest" href="/manifest.json" />
<?php $siteID = get_current_blog_id();
    if ( $siteID == '1' ) { ?>  
    <?php } elseif ( $siteID == '2' ) { ?>
<!--/* Distil Networks Bot Discovery script tag */-->
<script type="text/javascript" src="https://cdn.distiltag.com/api/v1/script/a3c2693aa8a5bb495f9782afbc476134243f2ab2?AYAH_F2=https%3A%2F%2Ffamilytraveller.com%2Fusa%2F"></script>
<noscript><img src="https://cdn.distiltag.com/api/v1/noscript/a3c2693aa8a5bb495f9782afbc476134243f2ab2?AYAH_F2=https%3A%2F%2Ffamilytraveller.com%2Fusa%2F"></noscript>
<!--/* End Bot Discovery script tag */-->
<?php } ?>
<!-- Entheto --><script>(function (i, s, o, g, r, tid, div, cd, chn, a, m) { i['DSContentObject'] = r; i[r] = i[r] || function () { (i[r].q = i[r].q || []).push(arguments) }, i[r].l = 1 * new Date(); i[r].q = i[r].q || []; i[r]('render', tid, div, cd, chn); a = s.createElement(o), m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g + '?dc_ord=' + Math.round(1E9 * Math.random()); m.parentNode.insertBefore(a, m) })(window, document, 'script', '//render.entheto.traveldesk.io/js/serve.js', 'dsContent', '39', 'div-ds-content-39', '21');</script>
</head>

<body id="top" <?php body_class(); ?>>
<?php $siteID = get_current_blog_id();
    if ( $siteID == '1' ) { ?>  
        
    <?php } elseif ( $siteID == '2' ) { ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WPRQ386"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
<?php } ?>

<div class="doc-wrapper">    
    <div class="doc-wrapper-inner">        

    <div id="main-header" class="hero-container">
        <header class="header">   

            <div class="container header-container">
                <?php 
                    if(isset($_GET['from_us_holding'])) {
                        $hopped = $_GET['from_us_holding']; 
                        if ( $hopped == 'yes' ) {
                            echo '<a href="'.home_url().'?from_us_holding=yes" class="logo-container">';
                        } else {
                            echo '<a href="'.home_url().'" class="logo-container">';
                        } 
                    } else { 
                        echo '<a href="'.home_url().'">';
                    } 
                        echo '<img src="'.THEME_PATH.'/assets/images/ft-logo-black.png" class="logo" alt="Family Traveller">';
                    echo '</a>';
                ?>
                
                <button class="hamburger">
                    <span class="hamburger-bar"></span>
                </button>

                <?php
                    //Global Site Search
                    echo "<a class='header-search' href='javascript:void(0);'>"; 
                        echo "<img src='".THEME_PATH."/assets/images/search.png' alt='Search' />";
                    echo "</a>";

                    echo '<div id="global-search-wrapper">';
                        echo '<div class="global-search">';
                            echo '<form role="search" method="get" id="searchform" class="searchform" action="'.home_url().'" autocomplete="off">';
                                echo '<input placeholder="Start exploring..." type="search" value="" name="s" id="s" />';
                                echo '<button type="submit" class="search-btn">Search</button>';
                                echo '<a href="javascript:void(0);" class="search-close"></a>';
                            echo '</form>';
                        echo '</div>';
                    echo '</div>';
                ?>
                
                <div>
                    <nav class="nav">
                        <?php 
                            $approved_pages = array(45263,45259,45230,45237,45233,45232,45228,45229,45329,45327,45328,45325,45326,45506,45505,45504,45502,45503,45501,45231,14976);
                            if($siteID == '1' AND ( is_page($approved_pages) OR is_singular('gd_place') OR is_page_template('page-template-approved-default.php') ) ){ //if uk site and geo directory pages
                                wp_nav_menu( array('menu'   => 'Approved Menu') );
                            } else {
                                wp_nav_menu( array( 'theme_location' => 'header-new' ) );
                            }
                        ?>
                    </nav>
                    
                    <div class="header-top">
                        <div class="container header-top-container">
                            <?php
                                //SITE ID
                                $siteID = get_current_blog_id(); 

                                //Social URLs
                                $social_urls = array(
                                    // 'youtube' => array(
                                    //     'url' => get_field('youtube_url', 'option'), 
                                    //     'icon' => 'fas fa-heart'
                                    // ), // LoveList //
                                    'facebook' => array(
                                        'url' => get_field('facebook_url', 'option'),
                                        'icon' => 'fab fa-facebook-square'
                                    ),
                                    'instagram' => array(
                                        'url' => get_field('instagram_url', 'option'),
                                        'icon' => 'fab fa-instagram'
                                    ),
                                    'twitter' => array(
                                        'url' => get_field('twitter_url', 'option'),
                                        'icon' => 'fab fa-twitter'
                                    ),
                                    'pinterest' => array(
                                        'url' => get_field('pinterest_url', 'option'),
                                        'icon' => 'fab fa-pinterest-p'
                                    )
                                );
                                
                                if($social_urls){
                                    foreach($social_urls as $socialItem){
                                        if($socialItem['url']<>'') {
                                           echo '<a class="header-social" style="opacity: .5;" href="'. $socialItem['url'] .'" target="_blank">'; 
                                           echo '<i class="'.$socialItem['icon'].'"></i>';
                                           echo '</a>';
                                        }
                                    }
                                }
                            ?>

                            <?php $country = getenv( 'HTTP_GEOIP_COUNTRY_CODE' ); 
                            if ( $siteID == '1' && $country == 'US' || $siteID == '1' && $country == 'CA' || $siteID == '1' && $country == 'MX' ) { ?>
                                <p><?php // echo $_COOKIE['famtrav_redirected']; 
                                // echo getenv( 'HTTP_GEOIP_COUNTRY_CODE' ); ?></p>

                                <!--<a id="uk_flag" class="header-social" style="opacity: 1;" href="https://familytraveller.com/">
                                    <img style="height: 20px; width: 35px;" src="<?php //echo get_template_directory_uri() . '/assets/flags/uk-flag.png'; ?>" alt="">
                                </a>
                                <a id="usaflag" class="header-social" href="https://familytraveller.com/usa/">
                                    <img style="height: 20px; width: 35px;" src="<?php //echo get_template_directory_uri() . '/assets/flags/usa-flag.png'; ?>" alt="">
                                </a>-->               		
                            <?php } elseif ( $siteID == '2' ) { ?>
                                <!--<a id="usa_flag" class="header-social" style="opacity: 1;" href="https://familytraveller.com/usa/">
                                    <img style="height: 20px; width: 35px;" src="<?php //echo get_template_directory_uri() . '/assets/flags/usa-flag.png'; ?>" alt="">
                                </a>
                                <a id="ukflag" class="header-social" href="https://familytraveller.com/?from_usa=true">
                                    <img style="height: 20px; width: 35px;" src="<?php //echo get_template_directory_uri() . '/assets/flags/uk-flag.png'; ?>" alt="">
                                </a>-->
                                <!--
                                <div class="header-social" style="opacity: 1;">
                                <form method="post" style="padding: 0 5px 0 0; display: inline-block;" action="https://familytraveller.com/usa/" class="inline">
                                <input type="hidden" name="usa_site" value="true">
                                <button type="submit" name="usa_site" value="true" class="link-button" style="cursor: pointer; opacity: 1; padding: 0; border: none; background: none;">
                                    <img style="height: 20px; width: 35px;" src="<?php //echo get_template_directory_uri() . '/assets/flags/usa-flag.png'; ?>" alt="">
                                </button>
                                </form>
                                <form method="post" style="padding: 0 5px 0 0; display: inline-block;" action="https://familytraveller.com/" class="inline">
                                <input type="hidden" name="from_usa" value="true">
                                <button type="submit" name="from_usa" value="true" class="link-button" style="cursor: pointer; opacity: 0.6; padding: 0; border: none; background: none;">
                                    <img style="height: 20px; width: 35px;" src="<?php //echo get_template_directory_uri() . '/assets/flags/uk-flag.png'; ?>" alt="">
                                </button>
                                </form>
                                </div>
                                -->
                            <?php } ?>
                        </div><!-- header-top-container -->

                     </div><!-- header-top -->
                </div>
            </div>
            
        </header>
    </div>