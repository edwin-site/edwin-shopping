<?php
// $Id: page.tpl.php,v 1.1.2.2.4.2 2011/01/11 01:08:49 dvessel Exp $
global $base_url;
?>

<div id="page" class="container-12 clearfix">

  <div id="site-header" class="clearfix">
    <div id="branding" class="grid-4 clearfix">
    <?php if ($linked_logo_img): ?>
      <span id="logo" class="grid-1 alpha"><?php print $linked_logo_img; ?></span>
    <?php endif; ?>
    <?php if ($linked_site_name): ?>
      <h1 id="site-name" class="grid-3 omega"><?php print $linked_site_name; ?></h1>
    <?php endif; ?>
    <?php if ($site_slogan): ?>
      <div id="site-slogan" class="grid-3 omega"><?php print $site_slogan; ?></div>
    <?php endif; ?>
    </div>

  <?php if ($main_menu_links || $secondary_menu_links): ?>
    <div id="site-menu" class="grid-12">
      <?php print $main_menu_links; ?>
      <?php print $secondary_menu_links; ?>
    </div>
  <?php endif; ?>

  <?php if ($page['search_box']): ?>
    <div id="search-box" class="grid-6 prefix-10"><?php print render($page['search_box']); ?></div>
  <?php endif; ?>
  </div>

  <div id="site-subheader" class="prefix-1 suffix-1 clearfix">
  <?php if ($page['highlighted']): ?>
    <div id="highlighted" class="<?php print ns('grid-14', $page['header'], 7); ?>">
      <?php print render($page['highlighted']); ?>
    </div>
  <?php endif; ?>

  <?php if ($page['header']): ?>
    <div id="header-region" class="region <?php print ns('grid-14', $page['highlighted'], 7); ?> clearfix">
      <?php print render($page['header']); ?>
    </div>
  <?php endif; ?>
  </div>


  <div id="main" class="column <?php print ns('grid-12', $page['sidebar_first'], 3, $page['sidebar_second'], 3) . ' ' . ns('push-3', !$page['sidebar_first'], 3); ?>">
    <?php print $breadcrumb; ?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1 class="title" id="page-title"><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>      
    <?php if ($tabs): ?>
      <div class="tabs"><?php print render($tabs); ?></div>
    <?php endif; ?>
    <?php print $messages; ?>
    <?php print render($page['help']); ?>

    <div id="main-content" class="region clearfix">
      <?php print render($page['content']); ?>
    </div>

    <?php print $feed_icons; ?>
  </div>

<?php if ($page['sidebar_first']): ?>
  <div id="sidebar-left" class="column sidebar region grid-3 <?php print ns('pull-9', $page['sidebar_second'], 3); ?>">
    <?php print render($page['sidebar_first']); ?>
  </div>
<?php endif; ?>

<?php if ($page['sidebar_second']): ?>
  <div id="sidebar-right" class="column sidebar region grid-3">
    <?php print render($page['sidebar_second']); ?>
  </div>
<?php endif; ?>


  

</div>

<div id="footer" class="footer  clearfix">
  <div class="inner-footer container-12 clearfix">
    <div class="grid-5 suffix-1">
      <h2>About Edwin Shopping</h2>
      <p>Lorem ipsum dolor sit amet, suas gubergren an duo, prima iisque ei sed. Cum eu adipisci repudiare neglegentur. Vix alii prodesset necessitatibus eu, feugait evertitur no cum. Cum ne appetere maluisset, noster aperiam similique vim eu, sit id posse deterruisset. </p>
      <div class="newsletter clearfix">
        <input type="text" name="txt-newsletter" value="You can subscribe us for the updates here..." >
        <input type="submit" name="btn-submit" value="join" />
      </div>
    </div>
    <div class="grid-3">
      <h2>Contact Us</h2>
      <div class="contact-panel">
        <ul>
          <li class="phone">+923214076116</li>
          <li class="email">ishfaqmch@gmail.com</li>
          <li class="address">Main Boulevard, Hafeez Center, Gulberg III, Lahore</li>
        </ul>
      </div>
    </div>
    <div class="grid-3 social">
      <h2>Get Social</h2>
      <ul>
        <li><a href="#"><img src="<?php echo $base_url; ?>/sites/all/themes/edwin/images/ico-rss.png" alt="Get our RSS Feed" title="Get our RSS Feed" width="31" height="32" /></a></li>
        <li><a href="#"><img src="<?php echo $base_url; ?>/sites/all/themes/edwin/images/ico-facebook.png" alt="See us on Facebook" title="See us on Facebook" width="31" height="32" /></a></li>
        <li><a href="#"><img src="<?php echo $base_url; ?>/sites/all/themes/edwin/images/ico-twitter.png" alt="Follow Us on Twitter" title="Follow Us on Twitter" width="31" height="32" /></a></li>
        <li><a href="#"><img src="<?php echo $base_url; ?>/sites/all/themes/edwin/images/ico-linkedin.png" alt="See our profile on Linked in" title="See our profile on Linked in" width="31" height="32" /></a></li>
      </ul>
    </div>
    <div class="clear"></div>
    <div class="grid-7 footer-links">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Experties</a></li>
        <li><a href="#">Get a Free qoute</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">CONTACT US</a></li>
      </ul>
    </div>
    <div class="grid-4 prefix-1 footer-links">Edwin Shopping. &copy; 2013-2015. All rights reserved.</div>
  </div>
    <?php if ($page['footer']): ?>
      <div id="footer-region" class="region grid-14 clearfix">
        <?php print render($page['footer']); ?>
      </div>
    <?php endif; ?>
  </div>

