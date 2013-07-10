<?php
// $Id: page.tpl.php,v 1.1 2010/02/10 21:31:23 hingo Exp $
// TODO: According to Drupal Theming Guide code like this should be moved to some separate pre-processing file, for cleanliness.
// By default block sections is a consecutive list of div elemenents and are rendered top to bottom.
// Here we add </td><td> between each div, so that they become their own cells instead, and rendered left to right.
$header = preg_replace('|</div>(\s*)<div |', '</div>$1</td><td valign="top">$1<div ', $header);
$footer = preg_replace('|</div>(\s*)<div |', '</div>$1</td><td valign="top">$1<div ', $footer);

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <?php print $head ?>
  <title><?php print $head_title ?></title>
  <?php print $styles ?>
  <?php print $scripts ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
</head>

<body>

<table border="0" cellpadding="0" cellspacing="0">
  <tr>
    <?php if ($left) { ?><td rowspan="2" id="sidebar-left">
      <?php print $left ?>
    </td><?php } ?>
    <td colspan="2">
      <table border="0" cellpadding="0" cellspacing="0" id="header">
        <tr>
          <td id="logo"  valign="top">
            <?php if ($logo) { ?><a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a><?php } ?>
            <?php if ($site_name) { ?><h1 class='site-name'><a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h1><?php } ?>
            <?php if ($site_slogan) { ?><div class='site-slogan'><?php print $site_slogan ?></div><?php } ?>
          </td>
          <td valign="top"><div><?php print $header ?></div></td>
          <?php if ($secondary_links or $primary_links) { ?><td id="menu" valign="top"><?php } ?>
            <?php if (isset($secondary_links)) { ?><?php print theme('links', $secondary_links, array('class' => 'links', 'id' => 'subnavlist')) ?><?php } ?>
            <?php if (isset($primary_links)) { ?><?php print theme('links', $primary_links, array('class' => 'links', 'id' => 'navlist')) ?><?php } ?>
          <?php if (isset($secondary_links) or isset($primary_links)) { ?></td><?php } ?>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td id="content" valign="top">
      <?php if ($mission) { ?><div id="mission"><?php print $mission ?></div><?php } ?>
      <div id="main">
        <?php print $breadcrumb ?>
        <h1 class="title"><?php print $title ?></h1>
        <div class="tabs"><?php print $tabs ?></div>
        <?php if ($show_messages) { print $messages; } ?>
        <?php print $help ?>
        <?php print $content; ?>
        <?php print $feed_icons; ?>
      </div>
    </td>
    <?php if ($right) { ?><td id="sidebar-right">
      <?php print $right ?>
    </td><?php } ?>
  </tr>
  <tr>
    <td colspan="3">
        <?php print $footer ?>
    </td>
  </tr>
  <tr id="footer">
    <td colspan="3">
        <?php print $footer_message ?>
    </td>
  </tr>
</table>

<?php print $closure ?>
</body>
</html>
