<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head>
<?php print $head; ?>
<title><?php print $head_title; ?></title>
<?php print $styles; ?>
<?php print $scripts; ?>
<?php if ($is_front): ?>
  <script src="/sites/all/themes/low_nexus/js/theater.js"></script>
  <link rel="stylesheet" type="text/css" href="/sites/all/themes/low_nexus/css/theater.css">
<?php endif; ?>
<!--[if lt IE 9]><script src="<?php print base_path() . drupal_get_path('theme', 'nexus') . '/js/html5.js'; ?>"></script><![endif]-->
</head>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  <img src="/sites/all/themes/low_nexus/images/handmade_white.png" class="logo-handmade" />
</body>
</html>
