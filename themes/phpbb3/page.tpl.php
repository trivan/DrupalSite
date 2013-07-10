<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language ?>" xml:lang="<?php print $language ?>">

<head>
  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
<script src="<?php print base_path() . path_to_theme() ?>\js\dw_event.js" type="text/javascript"></script>
<script src="<?php print base_path() . path_to_theme() ?>\js\dw_cookies.js" type="text/javascript"></script>
<script src="<?php print base_path() . path_to_theme() ?>\js\dw_sizerdx.js" type="text/javascript"></script>
<script type="text/javascript">
dw_Event.add( window, 'load', dw_fontSizerDX.init );
</script>
</head>

<body>
<div class="head">
<table border="0" cellpadding="0" cellspacing="0" id="header">
  <tr>
    <td id="logo">
      <?php if ($logo) { ?><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a><?php } ?>
      <table><tr><td>
      <?php if ($site_name) { ?><h1 class='site-name'><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h1><?php } ?>
    </td></tr><tr><td><?php if ($site_slogan) { ?><div class='site-slogan'><?php print $site_slogan ?></div><?php } ?>
    </td></tr></table>
    </td>
    <td id="menu">
      <?php if (isset($secondary_links)) { ?><?php print theme('links', $secondary_links, array('class' =>'links', 'id' => 'subnavlist')) ?><?php } ?>
      <?php if (isset($primary_links)) { ?><?php print theme('links', $primary_links, array('class' =>'links', 'id' => 'navlist')) ?><?php } ?>
      <?php print $search_box ?>
    </td>
  </tr> 
</table>	
</div>
<br>
<div class="navbar">
<table><tr><td width=100%><?php print $breadcrumb; ?></td>
<td >
<div id="sizer">
<a class="increase" href="#" title="Increase text size"><img src="<?php print base_path() . path_to_theme() ?>\images\plus.gif" border="0"></a>
<a class="reset" href="#" title="Restore default font-sizes"><img src="<?php print base_path() . path_to_theme() ?>\images\reset.gif" border="0"></a>
<a class="decrease" href="#" title="Decrease text size"><img src="<?php print base_path() . path_to_theme() ?>\images\minus.gif" border="0"></a>
</div>
</td></tr></table>
<img src="<?php print base_path() . path_to_theme() ?>\images\hr.png" ><br>
<? print $messages; ?>
</div>
<p align="right">
<a NAME="top">Welcome! </a><? echo"It is currently:"; echo date("d/m/y"); ?> <? echo date ("h:i:s"); ?></p>		
<table border="0" cellpadding="0" cellspacing="0" id="content">
  <tr>
    <?php if ($sidebar_left) { ?><td id="sidebar-left">
      <?php print $sidebar_left ?>
    </td><?php } ?>
    <td valign="top">
      <div id="main">
        <h1 class="title"><?php print $title ?></h1>
        <div class="tabs"><?php print $tabs ?></div>
        <?php print $help ?>
        <?php print $content; ?>
        <?php print $feed_icons; ?>
      </div>
    </td>
    <?php if ($sidebar_right) { ?><td id="sidebar-right">
      <?php print $sidebar_right ?>
    </td><?php } ?>
  </tr>
</table>
<br>	
<div id="footer">
<table><tr><td align="left"><a href="<?php print $base_path ?>">Home | </a></td><td align="middle"><a href="#top">Back to top!</a>
<tr><td><?php print $footer_message ?></td></tr></table>
</div>
<? //plz keep copy rights, no harm :P ?>
<div class="copyright">Designed by: Besher Al-Halabi &copy | Powered by:<a href="http:\\www.drupal.org" >Drupal</a> &copy 2008</div>
</body>
</html>
