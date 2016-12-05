<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script>
  $(document).ready(function() {
    // make slide 1 clickable on load
    $('.slide-1').css('z-index', 1);

    var counter = 2;

    var interval = setInterval(function(){

      // remove the slide-on from current visible slide
      $('.slide-on').removeClass('slide-on');

      // add slide-on class to next slide
      $('.slide-' + counter).addClass('slide-on');

      bringToFront();

      // reset counter to 1 if we are on the last slide
      if (counter === 6) {
        counter = 1;
      } else {
        counter++;
      }

    }, 5000);

    // brings current slide to front, after the transition
    function bringToFront() {
      // move `old` slide to back
      if (counter === 1) {
        $('.slide-6').css('z-index', 0);
      } else {
        $('.slide-' + (counter-1)).css('z-index', 0);
      }
      
      // bring `new` slide to front
      $('.slide-' + counter).css('z-index', 1);
    }
  });
</script>
<div id="page">
  <header id="masthead" class="site-header container" role="banner">
    <div class="row">
      <div id="logo" class="site-branding col-sm-6">
        <?php if ($logo): ?><div id="site-logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a></div><?php endif; ?>
      </div>
      <div class="col-sm-6 mainmenu">
        <div class="mobilenavi"></div>
        <nav id="navigation" role="navigation">
          <div id="main-menu">
            <?php 
              if (module_exists('i18n_menu')) {
                $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
              } else {
                $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
              }
              print drupal_render($main_menu_tree);
            ?>
          </div>
        </nav>
      </div>
    </div>
  </header>


  <?php if (theme_get_setting('slideshow_display','low_nexus')): ?>
  <div class="container">
    <div class="row">
      <?php print $messages; ?>
    </div>
  </div>

  <?php 
    $slide1_image = check_plain(theme_get_setting('slide1_image','low_nexus'));
    $slide2_image = check_plain(theme_get_setting('slide2_image','low_nexus'));
    $slide3_image = check_plain(theme_get_setting('slide3_image','low_nexus'));
    $slide4_image = check_plain(theme_get_setting('slide4_image','low_nexus'));
    $slide5_image = check_plain(theme_get_setting('slide5_image','low_nexus'));
    $slide6_image = check_plain(theme_get_setting('slide6_image','low_nexus'));
    
    $slide1_url = check_plain(theme_get_setting('slide1_url','low_nexus'));
    $slide2_url = check_plain(theme_get_setting('slide2_url','low_nexus'));
    $slide3_url = check_plain(theme_get_setting('slide3_url','low_nexus'));
    $slide4_url = check_plain(theme_get_setting('slide4_url','low_nexus'));
    $slide5_url = check_plain(theme_get_setting('slide5_url','low_nexus'));
    $slide6_url = check_plain(theme_get_setting('slide6_url','low_nexus'));

    $slide1_src = 'http://lowbicycles.com/sites/default/files/home/' . $slide1_image; 
    $slide2_src = 'http://lowbicycles.com/sites/default/files/home/' . $slide2_image;
    $slide3_src = 'http://lowbicycles.com/sites/default/files/home/' . $slide3_image;
    $slide4_src = 'http://lowbicycles.com/sites/default/files/home/' . $slide4_image;
    $slide5_src = 'http://lowbicycles.com/sites/default/files/home/' . $slide5_image;
    $slide6_src = 'http://lowbicycles.com/sites/default/files/home/' . $slide6_image;
 ?>
 <style>
  html, body {
    margin:0;
    padding:0;
    height: 100%;
  }

  #page {
    height: 92%;
  } 

  .slideshow-wrapper {
    position:relative;
    width: 100%;
    height: 100%;
  }

  .slide {
    z-index: 0;
    opacity: 0;
    position: absolute;
    display: block;
    overflow: auto;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    -webkit-transition: opacity 1s; /* Safari */
    transition: opacity 1s;
  }

  .slide-on {
    opacity: 1;
  }

  .slide-1 {
    background-image: url('<?php echo $slide1_src; ?>');
  }

  .slide-2 {
    background-image: url(<?php echo $slide2_src; ?>);
  }

  .slide-3 {
    background-image: url(<?php echo $slide3_src; ?>);
  }

  .slide-4 {
    background-image: url(<?php echo $slide4_src; ?>);
  }

  .slide-5 {
    background-image: url(<?php echo $slide5_src; ?>);
  }

  .slide-6 {
    background-image: url(<?php echo $slide6_src; ?>);
  }

  .logo-handmade {
    max-width: 394px;
    z-index: 2;
    position: fixed;
    bottom: 1%;
    right: 2%;
  }
</style>
    <div class="slideshow-wrapper">
      <?php if ($slide1_url): ?>
        <a href="/<?php echo $slide1_url; ?>" class="slide slide-on slide-1">&nbsp;</a>
      <?php else: ?>
        <div class="slide slide-on slide-1"></div>
      <?php endif; ?>

      <?php if ($slide2_url): ?>
        <a href="/<?php echo $slide2_url; ?>" class="slide slide-2">&nbsp;</a>
      <?php else: ?>
        <div class="slide slide-2"></div>
      <?php endif; ?>

      <?php if ($slide3_url): ?>
        <a href="/<?php echo $slide3_url; ?>" class="slide slide-3">&nbsp;</a>
      <?php else: ?>
        <div class="slide slide-3"></div>
      <?php endif; ?>

      <?php if ($slide4_url): ?>
        <a href="/<?php echo $slide4_url; ?>" class="slide slide-4">&nbsp;</a>
      <?php else: ?>
        <div class="slide slide-4"></div>
      <?php endif; ?>

      <?php if ($slide5_url): ?>
        <a href="/<?php echo $slide5_url; ?>" class="slide slide-5">&nbsp;</a>
      <?php else: ?>
        <div class="slide slide-5"></div>
      <?php endif; ?>

      <?php if ($slide6_url): ?>
        <a href="/<?php echo $slide6_url; ?>" class="slide slide-6">&nbsp;</a>
      <?php else: ?>
        <div class="slide slide-6"></div>
      <?php endif; ?>
    </div>
  <?php endif; ?>
</div>
