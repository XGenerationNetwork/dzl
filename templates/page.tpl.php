<?php print render($page['body_top']) ?>

<?php if (!empty($logo) || !empty($site_name)): ?>
<section class="logo">
  <div class="container">
	<div class="visible-xs">
		<?php if (!empty($logo)): ?>
		<div class="logo-mobile">
			<p class="text-center"><a class="logo-brand" href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" style="padding-top:10px;" /></a></p>
		</div>
		<?php endif ?>
		<?php if (!empty($site_name)): ?>
		<div class="site-name-mobile">
			<h3 class="text-center" style="margin-bottom:0 !important;"><?php print $site_name ?><br />
			<span class="site-slogan"><?php print $site_slogan ?></span></h3>
		    <?php print render($page['logo_more']) ?>
		</div>
		<?php endif ?>
	</div>
	<div class="visible-lg visible-md visible-sm site-name-slogan">
		<?php if (!empty($logo)): ?>
		<div class="logo" style="float: left;">
			<p class="text-left"><a class="logo-brand" href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" style="padding-top:10px;" /></a></p>
		</div>
		<?php endif ?>
		<?php if (!empty($site_name)): ?>
		<div class="clear" style="float: right;">
			<h3 class="text-right" style="margin-bottom:0 !important;"><?php print $site_name ?><br />
			<span class="site-slogan"><?php print $site_slogan ?></span></h3>
			<?php print render($page['logo_more']) ?>
		</div>
		<?php endif ?>
	</div>
  </div>
</section>
<?php endif ?>	

<div class="<?php print $navbar_classes ?>">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse">
        <nav role="navigation">
          <?php print render($primary_nav) ?>
          <?php print render($secondary_nav) ?>
          <?php print render($page['navigation']) ?>
        </nav>
      </div>
    <?php endif ?>
  </div>
</div>

<?php if ($page['header']): ?>
<header class="header">
  <div class="jumbotron" style="<?php print isset($header_bg) ? 'background-image: url(' . $header_bg . ')' : '' ?>">
    <div class="container">
      <?php print render($page['header']) ?>
    </div>
  </div>
</header>
<?php endif ?>


<section class="main">
  <div class="container">
        <?php print $breadcrumb ?>
    <div class="row">
      <?php $_content_cols = 12 - 3 * !empty($page['sidebar_first']) - 3 * !empty($page['sidebar_second']) ?>
      <section class="main-col col-md-<?php print $_content_cols  ?><?php print !empty($page['sidebar_first']) ? ' col-md-push-3' : '' ?>">
        <?php print $messages ?>
        <?php print render($page['help']) ?>
        <?php print render($page['highlighted']) ?>
    <div class="action_links">
      <?php if (!empty($action_links)): ?>
      <ul class="action-links pull-right">
        <?php print render($action_links) ?>
      </ul>
      <?php endif ?>
      <?php print render($tabs) ?>
    </div>
		<?php print render($title_prefix) ?>
		<h1><?php print $title ?></h1>
		<?php print render($title_suffix) ?>
        <?php print render($page['content']) ?>
      </section>
      <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="main-col col-md-3 col-md-pull-<?php print $_content_cols  ?>">
        <?php print render($page['sidebar_first']) ?>
      </aside>
      <?php endif ?>
      <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="main-col col-md-3">
        <?php print render($page['sidebar_second']) ?>
      </aside>
      <?php endif ?>
    </div>
  </div>
</section>

<?php print render($page['content_bottom']) ?>

<section class="mid">
  <div class="container">
    <div class="row">
      <?php $_content_cols2 = 12 - 3 * !empty($page['second_sidebar_first']) - 3 * !empty($page['second_sidebar_second']) ?>
      <section class="main-col col-md-<?php print $_content_cols2  ?><?php print !empty($page['second_sidebar_first']) ? ' col-md-push-3' : '' ?>">
		<?php print render($page['mid']) ?>
      </section>
      <?php if (!empty($page['second_sidebar_first'])): ?>
      <aside class="main-col col-md-3 col-md-pull-<?php print $_content_cols2  ?>">
        <?php print render($page['second_sidebar_first']) ?>
      </aside>
      <?php endif ?>
      <?php if (!empty($page['second_sidebar_second'])): ?>
      <aside class="main-col col-md-3">
        <?php print render($page['second_sidebar_second']) ?>
      </aside>
      <?php endif ?>
    </div>
  </div>
</section>

<?php print render($page['share']) ?>

<?php if ($page['bottom']): ?>
<section class="bottom">
  <div class="container">
    <?php print render($page['bottom']) ?>
  </div>
</section>
<?php endif ?>

<footer class="footer">
  <div class="container">
    <?php print render($page['footer']) ?>
  </div>
</footer>

<?php print render($page['body_bottom']) ?>
