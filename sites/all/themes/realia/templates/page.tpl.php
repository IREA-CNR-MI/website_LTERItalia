  <div id="wrapper-outer" class="<?php if (!$page['triptych_bottom']): ?>no-triptych<?php endif; ?>">
<div id="wrapper">
<div id="wrapper-inner">
    <?php if ($breadcrumb): ?>
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <?php print $breadcrumb; ?>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.breadcrumb-wrapper -->
    <?php endif;?>

    <div id="header-wrapper">
        <div id="header">
            <div id="header-inner">
                <div class="container">
                    <div class="navbar">
                        <div class="navbar-inner">
                            <div class="row">
                                <div class="span4">
                                    <a href="#nav" class="hidden-desktop" id="btn-nav"><?php print t('Toggle navigation'); ?></a>

                                    <?php if ($logo): ?>
                                        <div class="logo">
                                            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
                                                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
                                            </a>
                                        </div><!-- /.logo -->
                                    <?php endif; ?>

                                    <?php if ($site_name): ?>
                                        <div class="site-name">
                                            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="brand">
                                                <?php print $site_name; ?>
                                            </a>
                                        </div><!-- /.site-name -->
                                    <?php endif; ?>

                                    <?php if ( $site_slogan ): ?>
                                      <div class="site-slogan">
                                          <span><?php print $site_slogan; ?></span>
                                      </div><!-- /.site-slogan -->
                                    <?php endif; ?>
                                </div>

                                <?php if (!empty($page['header_right'])): ?>
                                    <div class="span3 pull-right">
                                        <?php print render($page['header_right']); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($page['header_middle'])): ?>
                                    <div class="span5">
                                        <?php print render($page['header_middle']); ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                        </div>
                        <!-- /.navbar-inner -->
                    </div>
                    <!-- /.navbar -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /#header-inner -->
        </div>
        <!-- /#header -->
    </div>
    <!-- /#header-wrapper -->

    <div id="navigation">
        <div class="container">
            <?php if (!empty($page['navigation'])): ?>
            <div class="navigation-wrapper">
                <div class="navigation clearfix">
                    <?php print render($page['navigation']); ?>
                </div>
                <!-- /.navigation -->
            </div><!-- /.navigation-wrapper -->
            <?php endif; ?>
        </div>
    </div>
    <div id="map">
        <div class="container" style="position: relative;">
            <div class="row">
                <div class="span3">
                    <?php if ($page['map_sidebar']): ?>
                    <?php print render($page['map_sidebar']); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php if (!empty($page['map'])): ?>
        <?php print render($page['map']); ?>
        <?php endif; ?>
    </div>

    <div id="content">
        <div class="container">
            <?php if ($page['highlighted']): ?>
                <div class="row" id="highlighted">
                    <div class="span9">
                        <?php if ($page['highlighted']): ?>
                        <div class="highlighted"><?php print render($page['highlighted']); ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="span3">
                        <?php if ($page['highlighted_sidebar']): ?>
                        <?php print render($page['highlighted_sidebar']); ?>
                        <?php endif; ?>
                    </div>
                </div><!-- /#highlighted -->                
            <?php endif; ?>

            <div class="row">
                <?php if ($page['sidebar_first']): ?>
                <div class="sidebar span3" role="complementary">
                    <?php print render($page['sidebar_first']); ?>
                </div> <!-- /.sidebar -->
                <?php endif; ?>

                <section class="<?php print _bootstrap_content_span($columns); ?>">

                    <a id="main-content"></a>
                    <?php print render($title_prefix); ?>
                    <?php if ($title): ?>
                    <h1 class="page-header"><?php print $title; ?></h1>
                    <?php endif; ?>
                    <?php print render($title_suffix); ?>

                    <?php print $messages; ?>

                    <?php if ($tabs): ?>
                    <?php print render($tabs); ?>
                    <?php endif; ?>
                    <?php if ($page['help']): ?>
                    <div class="well"><?php print render($page['help']); ?></div>
                    <?php endif; ?>
                    <?php if ($action_links): ?>
                    <ul class="action-links"><?php print render($action_links); ?></ul>
                    <?php endif; ?>
                    <?php print render($page['content']); ?>
                </section>

                <?php if ($page['sidebar_second']): ?>
                <aside class="span3" role="complementary">
                    <?php print render($page['sidebar_second']); ?>
                </aside>  <!-- /#sidebar-second -->
                <?php endif; ?>
            </div>
            <div class="row" id="carousel">
                <?php if ($page['carousel']): ?>
                <div class="sidebar span12" role="complementary">
                    <?php print render($page['carousel']); ?>
                </div> <!-- /.sidebar -->
                <?php endif; ?>
            </div>

            <?php if ($page['bottom']): ?>
            <div class="row" id="bottom">
                <div class="span12">
                    <?php print render($page['bottom']); ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <!-- /.container -->

        <?php if ($page['triptych_bottom']): ?>
            <div class="triptych-wrapper">
                <div class="triptych">
                    <div class="container">
                        <div class="row">
                            <?php print drupal_render($page['triptych_bottom']); ?>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.triptych -->
            </div><!-- /.triptych-wrapper -->
        <?php endif; ?>
    </div>
    <!-- /#content -->
</div>
<!-- /#wrapper-inner -->

<div id="footer-wrapper">
    <div id="footer-top">
        <div id="footer-top-inner" class="container">
            <div class="row">
                <?php if ($page['bottom_quadruple_first']): ?>
                <div class="span3" role="complementary">
                    <?php print render($page['bottom_quadruple_first']); ?>
                </div><!-- /.span3 -->
                <?php endif; ?>

                <?php if ($page['bottom_quadruple_second']): ?>
                <div class="sidebar span3" role="complementary">
                    <?php print render($page['bottom_quadruple_second']); ?>
                </div><!-- /.span3 -->
                <?php endif; ?>

                <?php if ($page['bottom_quadruple_third']): ?>
                <div class="span3" role="complementary">
                    <?php print render($page['bottom_quadruple_third']); ?>
                </div><!-- /.span3 -->
                <?php endif; ?>

                <?php if ($page['bottom_quadruple_last']): ?>
                <div class="span3" role="complementary">
                    <?php print render($page['bottom_quadruple_last']); ?>
                </div><!-- /.span3 -->
                <?php endif; ?>
            </div>
        </div>
        <!-- /#footer-top-inner -->
    </div>
    <!-- /#footer-top -->

    <div id="footer" class="footer container">
        <div id="footer-inner">
            <div class="row">
                <div class="span6 copyright">
                    <?php print render($page['footer']); ?>
                </div>
                <!-- /.span6 -->

                <div class="span6 share">
                    <?php print render($page['footer_secondary']); ?>
                </div>
                <!-- /.span6 -->
            </div>
        </div>
        <!-- /#footer-inner -->
    </div>
    <!-- /#footer -->
</div>
<!-- /#footer-wrapper -->
</div>
<!-- /#wrapper-->
</div><!-- /#wrapper-outer -->
