<?php defined('_JEXEC') or die;
include_once('includes/includes.php'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">
    <head>
        <?php echo $viewport; ?>
        <jdoc:include type="head"/>
        <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300italic,300,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    </head>
    <body class="<?php echo $bodyClass; ?>">
        <?php echo $ie_warning; ?>
        <!-- Body -->
        <div class="oh">
        <div id="wrapper">
            <div class="wrapper-inner">
                <a id="fake" href='#'></a>
                <div class="with-bg skew skew__deg-2 skew__deg-3_before-inset top_plane">
                    <div class="skew_sub-1">
                        <div class="skew_sub-2">
                            <div class="skew_bg">
                                <div class="top_wrapper_image"></div>
                            </div>
                        </div>
                    </div>
            <div class="top_wrapper">
                <!-- Top -->
                <div id="top">
                    <div class="w-container">
                                                           <!-- Logo -->
                                <div id="logo" class="span<?php echo $this->params->get('logoBlockWidth'); ?>">
                                    <a href="<?php echo JURI::base(); ?>">
                                        <?php if(isset($logo)){ ?>
                                        <img src="<?php echo $logo; ?>" alt="<?php echo $sitename; ?>">
                                        <?php } ?>
                                        <div><?php echo wrap_chars_with_span($sitename); ?></div>
                                    </a>
                                </div>
                                <jdoc:include type="modules" name="top" style="themeHtml5"/>

                    </div>
                </div>
                <?php if($this->countModules('header') && !$hideByView){ ?>
                <div id="header">
                    <div class="row-container">
                        <div class="<?php echo $containerClass; ?>">
                            <div class="<?php echo $rowClass; ?>">

                                <jdoc:include type="modules" name="header" style="themeHtml5"/>
                            </div>
                        </div>
                    </div>
                </div> 
                <?php } ?>
                
                <div id="breadcrumbs">
                    <div class="row-container">
                        <div class="<?php echo $containerClass; ?>">
                            <div class="<?php echo $rowClass; ?>">

                        <?php if($this->countModules('breadcrumbs')){ ?>
                                <jdoc:include type="modules" name="breadcrumbs" style="themeHtml5"/>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            </div>

                <?php if($this->countModules('navigation') && !$hideByView){ ?>
                    <div id="navigation" class="with-bg skew skew__deg-7 skew__deg-8_before-inset navigation_plane">
                    <div class="skew_sub-1">
                        <div class="skew_sub-2">
                            <div class="skew_bg">
                                <div class="navigation_image"></div>
                            </div>
                        </div>
                    </div>
                    <div class="skew_cnt_1">
                        <div class="row-container">
                            <div class="<?php echo $containerClass; ?>">
                                <div class="<?php echo $rowClass; ?>">
                                    <jdoc:include type="modules" name="navigation" style="themeHtml5"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                <?php } ?>

                <?php if($this->countModules('showcase') && !$hideByView){ ?>
                    <div id="showcase">
                                <jdoc:include type="modules" name="showcase" style="themeHtml5"/>
                    </div>
                <?php } ?>

                <?php if($this->countModules('feature') && !$hideByView){ ?>
                    <div id="feature" class="with-bg skew skew__deg-3">
                    <div class="skew_sub-1">
                        <div class="skew_sub-2">
                            <div class="skew_bg">
                                <div class="feature_image"></div>
                            </div>
                        </div>
                    </div>
                    <div class="skew_cnt_2">
                        <div class="row-container">
                            <div class="<?php echo $containerClass; ?>">
                             <div class="<?php echo $rowClass; ?>">
                                    <jdoc:include type="modules" name="feature" style="themeHtml5"/>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                <?php } ?>
                <?php if($this->countModules('maintop') && !$hideByView){ ?>
                    <div id="maintop" class="with-bg skew skew__deg-4">
                        <div class="skew_sub-1">
                            <div class="skew_sub-2">
                                <div class="skew_bg bg-secondary"></div>
                            </div>
                        </div>
                        <div class="skew_cnt_3">
                        <div class="row-container">
                            <div class="<?php echo $containerClass; ?>">
                             <div class="<?php echo $rowClass; ?>">
                                    <jdoc:include type="modules" name="maintop" style="themeHtml5"/>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                <?php } ?>



                <!-- Main Content row -->
                <div id="content"  class="with-bg skew skew__deg-1">
                     <div class="skew_sub-1">
                            <div class="skew_sub-2">
                                <div class="skew_bg bg-secondary"></div>
                            </div>
                     </div>
                     <div class="skew_cnt_4">
                    <?php 
                    if($this->countModules('map') && !$hideByView){ ?>
                    <!-- Map -->
                    <div id="map">
                        <jdoc:include type="modules" name="map" style="html5nosizeMap"/>
                    </div>
                    <?php }
                    $layout = $params->get('content_layout');
                    if($layout == "normal"){ ?>
                    <div class="row-container">
                        <div class="<?php echo $containerClass; ?>">
                    <?php } ?>
                            <div class="content-inner <?php echo $rowClass; ?>">
                                <?php if($this->countModules('aside-left') && !$hideByOption && $view !== 'form'){ ?>
                                <!-- Left sidebar -->
                                <div id="aside-left" class="span<?php echo $asideLeftWidth; ?>">
                                    <aside role="complementary">
                                        <jdoc:include type="modules" name="aside-left" style="html5nosize"/>
                                    </aside>
                                </div>
                                <?php } ?>
                                <div id="component" class="span<?php echo $mainContentWidth; ?>">
                                    <main role="main">
                                        <?php if($this->countModules('content-top') && !$hideByView){ ?>
                                        <!-- Content-top -->
                                        <div id="content-top" class="<?php echo $rowClass; ?>">
                                            <jdoc:include type="modules" name="content-top" style="themeHtml5"/>
                                        </div>
                                        <?php } ?>
                                        <jdoc:include type="message"/>
                                        <jdoc:include type="component"/>
                                        <?php if($this->countModules('content-bottom') && !$hideByOption && $view !== 'form'){ ?>
                                        <!-- Content-bottom -->
                                        <div id="content-bottom" class="<?php echo $rowClass; ?>">
                                            <jdoc:include type="modules" name="content-bottom" style="themeHtml5"/>
                                        </div>
                                        <?php } ?>
                                    </main>
                                </div>
                                <?php if($this->countModules('aside-right') && !$hideByOption && $view !== 'form'){ ?>
                                <!-- Right sidebar -->
                                <div id="aside-right" class="span<?php echo $asideRightWidth; ?>">
                                    <aside role="complementary">
                                        <jdoc:include type="modules" name="aside-right" style="html5nosize"/>
                                    </aside>
                                </div>
                                <?php } ?>
                            </div>
                            <?php if($layout == "normal"){ ?>
                        </div>
                    </div>
                            <?php } ?>
                            </div
                </div>
                <?php if(!$hideByView){

                    if($this->countModules('mainbottom')){
                        echo display_position('mainbottom');
                    }
                    if($this->countModules('video')){
                        echo display_position('video');
                    }
                    if($this->countModules('mainbottom-2')){
                        echo display_position('mainbottom-2');
                    }
                    if($this->countModules('mainbottom-3')){
                        echo display_position('mainbottom-3');
                    }
                    if($this->countModules('mainbottom-4')){
                        echo display_position('mainbottom-4');
                    }
                    if($this->countModules('mainbottom-5')){
                        echo display_position('mainbottom-5');
                    }
                    if($this->countModules('bottom')){
                        echo display_position('bottom');
                    }
                    if($this->countModules('footer')){
                        echo display_position('footer');
                    }
                } ?>
                <div id="push"></div>
            </div>
        </div>
        <div id="footer-wrapper">
            <div class="footer-wrapper-inner">
                <!-- Copyright -->
                <div id="copyright" role="contentinfo">
                    <div class="row-container skew_cnt">
                        <div class="<?php echo $containerClass; ?>">
                            <div class="<?php echo $rowClass; ?>">
                                <jdoc:include type="modules" name="copyright" style="themeHtml5"/>
                                <div class="copyright span<?php echo $this->params->get('footerWidth'); ?>">
                                    <?php if($this->params->get('footerLogo')){ ?>
                                    <!-- Footer Logo -->
                                    <a class="footer_logo" href="<?php echo $this->baseurl; ?>">
                                        <img src="<?php echo $footerLogo; ?>" alt="<?php echo $sitename; ?>">
                                    </a>
                                    <?php }else{ ?>
                                    <span class="siteName"><?php echo $sitename; ?></span>
                                    <?php }
                                    if($this->params->get('footerCopy')) echo '<span class="copy">&copy;</span>';
                                    if($this->params->get('footerYear')) echo '<span class="year">'.date('Y').'</span>';
                                    if($this->params->get('privacyLink')){ ?>
                                    <a class="privacy_link" rel="license" href="<?php echo $privacy_link_url; ?>">
                                        <?php echo $this->params->get('privacy_link_title'); ?>
                                    </a>
                                    <?php }
                                    if($this->params->get('termsLink')){ ?>
                                    <a class="terms_link" href="<?php echo $terms_link_url; ?>">
                                        <?php echo $this->params->get('terms_link_title'); ?>
                                    </a>
                                    <?php } ?>
                                </div>
                                <?php echo $todesktop; ?>
                                More <a  rel='nofollow' href='http://www.templatemonster.com/category.php?category=418&type=24' target='_blank'>Business Templates at TemplateMonster.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <?php echo $back_top;
        if($this->countModules('modal')){
        $doc->addScriptdeclaration('(function($){$(document).ready(function(){var o=$(\'a[href="#modal"]\');o.click(function(e){$("#modal").modal({show:true,backdrop:false});e.preventDefault()});$("#modal button.modalClose").click(function(e){$("#modal").modal("hide");e.preventDefault()});$(".modal-hide").click(function(e){$("#modal").modal("hide")})})})(jQuery);'); ?>
        <div id="modal" class="modal hide fade loginPopup">
            <div class="modal-hide"></div>
            <div class="modal_wrapper">
                <button type="button" class="close modalClose">×</button>
                <jdoc:include type="modules" name="modal" style="modal"/>
            </div>
        </div>
        <?php }
        if($this->countModules('fixed-sidebar-left')){ ?>
        <jdoc:include type="modules" name="fixed-sidebar-left" style="none"/>
        <?php }
        if($this->countModules('fixed-sidebar-right')){ ?>
        <div id="fixed-sidebar-right">
            <jdoc:include type="modules" name="fixed-sidebar-right" style="sidebar"/>
        </div>
        <?php } ?>
        <jdoc:include type="modules" name="debug" style="none"/>
    </body>
</html>