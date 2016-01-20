<!doctype html>
<html lang="<?php print $language->language ?>" class="no-js">
  <head profile="<?php print $grddl_profile ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php print $head ?>
    <title><?php print $head_title ?></title>
    <?php print $styles ?>
    <?php print $scripts ?>
	<!--[if IE 9]>
	<link type="text/css" rel="stylesheet" href="/sites/all/themes/dzl/ie9-noanimations.css">
	<![endif]-->
	<script src="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.7.2.js"></script>
	<script>
		Modernizr.load({
		  test: Modernizr.cssanimations,
		  nope: '/sites/all/themes/keuka/ie9-noanimations.css'
		});
	</script>
  </head>
  <body class="<?php print $classes ?>"<?php print $attributes ?>>
    <?php print $page_top ?>
    <?php print $page ?>
    <?php print $page_bottom ?>
  </body>
</html>
