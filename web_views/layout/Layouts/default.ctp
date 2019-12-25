<?php
  $logo = $cfg['base']['logo'] ? $cfg['base']['logo'] : 'logo.png';
  if(date("n") == 12 || date("n") == 1) $logo = 'clicmd-ny-alpha.png';
?>
<!DOCTYPE HTML>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en-us">
<![endif]--> <!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8 ie7" lang="en-us">
<![endif]--> <!--[if IE 8]>
<html class="no-js lt-ie9 ie8" lang="en-us">
<![endif]--> <!--[if gt IE 8]>
<html class="no-js ie9" lang="en-us">
<![endif]-->
<html lang="en-us">
<head>
  <?php echo $tpl->telement('tpl_head');?>
  <meta name="robots" content="index,follow" />
  <meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <link rel="apple-touch-icon" sizes="57x57" href="/thirteenth/modules/stthemeeditor/img/touch-icon-iphone-57.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="/thirteenth/modules/stthemeeditor/img/touch-icon-iphone-72.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="/thirteenth/modules/stthemeeditor/img/touch-icon-iphone-114.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="/thirteenth/modules/stthemeeditor/img/touch-icon-iphone-144.png" />
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto|Fjalla+One" type="text/css" media="all" />
  <link rel="stylesheet" href="/themes/transformer/cache/v_181_6c4755f0cb9b3888c0157d15864b398d_all.css?v=234234" type="text/css" media="all" />
  <link href="/thirteenth/modules/stthemeeditor/views/css/customer-s13.css?47d00337b61" rel="stylesheet" type="text/css" media="all" />
  <link href="/css/default.css" rel="stylesheet" type="text/css" media="all" />
</head>
<?php if($uri == '/' && 1==2):?>
<body id="index" class="index show-left-column hide-right-column lang_en slide_lr_column ">
<?php else:?>
<body id="cms" class="cms cms-1 cms-delivery hide-left-column hide-right-column lang_en slide_lr_column ">
<?php endif;?>
  <!--[if lt IE 9]>
  <p class="alert alert-warning">Please upgrade to Internet Explorer version 9 or download Firefox, Opera, Safari or Chrome.</p>
  <![endif]-->
  <div id="body_wrapper">
     <header id="page_header" class=" ">
        <?php echo $tpl->promo('top-index');?>
        <section id="mobile_bar" class="animated fast">
           <div class="container">
              <div id="mobile_bar_container" class=" mobile_bar_center_layout">
                 <div id="mobile_bar_left">
                    <div id="mobile_bar_left_inner"><a id="stmobileadvancedmenu_tri" class="mobile_bar_tri" href="javascript:;" title="Menu"> <i class="icon-menu icon-1x"></i> <span class="mobile_bar_tri_text">Menu</span> </a></div>
                 </div>
                 <div id="mobile_bar_center"> <a id="mobile_header_logo" href="<?php eurl('/')?>" title="<?php e($cfg['base']['title'])?>"> <img class="logo replace-2x" src="<?php e($logo)?>" data-2x="<?php e($logo)?>" alt="<?php e($cfg['base']['title'])?>" height="28"/> </a></div>
                 <div id="mobile_bar_right">
                    <div id="mobile_bar_right_inner"><a id="shopping_cart_mobile" href="javascript:;" rel="nofollow" class="shopping_cart mobile_bar_tri"> <i class="icon-basket icon-1x icon_btn"></i> <span class="mobile_bar_tri_text"><?php ___e('Cart')?></span> <span class="ajax_cart_quantity amount_circle constantly_show"><?php e($basket_data['qnt'])?></span> </a></div>
                 </div>
              </div>
           </div>
        </section>
        <div class="hidden-md hidden-lg">
           <div>&nbsp;</div>
           <div style="text-align: center;">
             <h4 style="text-transform: uppercase; font-weight: bold;"><span><a href="javascript:void(0)" onclick="$('#stmobileadvancedmenu_tri').click();if(!$('#parent_mobile_menu').parent().hasClass('active')) $('#parent_mobile_menu').click();" >
               :::::::::::::
               <?php ___e('Products Catalog')?>
               :::::::::::::
             </a></span></h4>
           </div>
        </div>
        <section id="header" class=" animated fast">
           <div class="wide_container">
              <div class="container header_container">
                 <div class="row">
                    <div id="logo_wrapper" class="col-sm-12 col-md-4">
                       <div id="header_logo_inner"> <a id="header_logo" href="<?php eurl('/')?>" title="<?php e($cfg['base']['title'])?>"> <img class="logo replace-2x" src="<?php e($logo)?>" data-2x="<?php e($logo)?>" alt="<?php e($cfg['base']['title'])?>" style="height: 45px; margin-top: -2px; margin-left: 30px;" /> </a></div>
                       <!--
                       <div style="position: absolute; left: 20px; top: 0; height: 50px;">
                            <?php echo $tpl->element('base/language');?>
                       </div>
                       -->
                    </div>
                    <div id="header_right" class="col-sm-12 col-md-8 text-right">
                       <div id="header_right_inner" class="clearfix">
                          <div id="pc_displayTop_65" class="dynhook" data-hook="displayTop" data-module="65">
                             <div class="loadingempty"></div>
                          </div>
                          <div id="header_user_info" class="header_user_info clearfix top_bar_item">
                            <?php echo $tpl->menu('top-account');?>
                          </div>
                          <div id="search_block_top" class="search_block_mod clearfix">
                            <?php echo $tpl->element('catalog/search');?>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </section>
        <section id="top_extra" class="main_menu_has_widgets_1">
           <div id="st_advanced_menu_container" class="animated fast">
              <div class="container">
                 <div class="container_inner clearfix">
                    <div id="main_menu_widgets" class="clearfix">
                       <?php echo $tpl->element('shop/basket');?>
                    </div>
                    <?php echo $tpl->menu('top-navigation');?>
                 </div>
              </div>
           </div>
        </section>
        <?php if($uri != '/'):?>
            <?php echo $tpl->element('base/breadcrumb');?>
        <?php endif;?>
     </header>
     <div class="main_content_area">
        <?php if($uri == '/'):?>
            <div class="hidden-xs hidden-sm"><?php echo $tpl->slider('index')?></div>
        <?php endif;?>

        <div class="columns-container wide_container">
           <div id="columns" class="container">
              <div class="row">
                 <?php if($tpl->blocks('side', true)):?>
                 <div id="left_column" class="column col-xxs-8 col-xs-6 col-sm-3 col-md-3">
                    <?php echo $tpl->blocks('side')?>
                 </div>
                 <div style="min-height: 300px;" id="center_column" class="center_column col-xs-12 col-sm-9 col-md-9">
                 <?php else:?>
                 <div style="min-height: 300px;" id="center_column" class="center_column col-xs-12 col-sm-12 col-md-12">
                 <?php endif;?>
                    <?php if($uri == '/'):?>
                        <?php echo $tpl->blocks('index')?>
                    <?php else:?>
                        <?php echo $this->fetch('content'); ?>
                    <?php endif;?>
                 </div>
              </div>
           </div>
        </div>

        <?php if($uri == '/'):?>
            <?php echo $tpl->blocks('index-footer')?>
        <?php endif;?>


        <div class="main_content_area_footer">
           <div class="wide_container"></div>
        </div>
     </div>
     <footer id="footer" class="footer-container">
        <section id="footer-top">
           <div class="wide_container">
              <div class="container">
                 <div class="row">
                    <?php echo $tpl->element('users/newsletters')?>
                 </div>
              </div>
           </div>
        </section>
        <section id="footer-primary">
           <div class="wide_container">
              <div class="container">
                 <div class="row">
                    <?php echo $tpl->blocks('footer')?>
                 </div>
              </div>
           </div>
        </section>
        <div id="footer_info" class="bottom-footer ">
           <div class="wide_container">
              <div class="container">
                 <div class="row" >
                    <div class="col-xs-12 col-sm-12 clearfix">
                       <aside id="footer_bottom_right">
                          <section id="multilink_16" class="stlinkgroups_links_footer_bottom ">
                             <ul class="li_fl clearfix custom_links_list">
                                <?php echo $tpl->menu('footer-menu');?>
                             </ul>
                          </section>
                       </aside>
                       <aside id="footer_bottom_left"> <span id="copyright_text"><?php e($cfg['base']['copyright'])?></span> </aside>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </footer>
  </div>
  <div id="rightbar" class="">
     <div id="rightbar_inner" class="clearfix rightbar_2">
        <div id="rightbar_cart" class="rightbar_wrap">
            <a id="rightbar-shopping_cart" href="/shop/basket/" class="rightbar_tri icon_wrap" >
            <i class="icon-basket icon_btn icon-0x"></i>
            <span class="icon_text"><?php ___e('Cart')?></span>
            <span class="ajax_cart_quantity amount_circle <?php e(empty($basket_data['qnt']) ? 'simple_hidden' : '')?> "><?php e($basket_data['qnt'])?></span>
            </a>
        </div>
        <?php if(!empty($fltr_manufacturers) || 1==1):?>
        <div id="switch_left_column_wrap" class="visible-xs"> <a href="javascript:;" id="switch_left_column" data-column="left_column" class="icon_wrap" ><i class="icon-right-open-1 icon-0x"></i><span class="icon_text"><?php ___e('Filters')?></span></a></div>
        <?php endif;?>
        <div id="to_top_wrap">
           <div id="to_top"><a href="#top_bar" class="icon_wrap disabled" title="Back to top"><i class="icon-up-open-2 icon-0x"></i><span class="icon_text"><?php ___e('Top')?></span></a></div>
        </div>
        <?php if(empty($fltr_manufacturers) && 1==2):?>
        <div id="to_top_wrap">
           <div id="to_top">
            <form id="searchbox_mobile_bar_1" method="get" action="/catalog" >
                <div class="searchbox_inner"> 
                    <input style="display: inline-block; width: 60%;" class="search_query form-control" type="text" name="fltr_lk__title" value="<?php e($_GET['fltr_lk__title'])?>" placeholder="<?php ___e('Product search')?>" autocomplete="off" />
                    <a style="display: inline-block;" href="javascript:$('#searchbox_mobile_bar_1').submit();" rel="nofollow" id="" class="submit_searchbox icon_wrap"><i class="icon-search-1 icon-0x"></i><span class="icon_text"><?php ___e('Search')?></span></a>
                </div>
            </form>            
           </div>
        </div>
        <?php endif;?>
     </div>
  </div>
  <div class="st-side">
    <?php echo $tpl->menu('top-navigation', 'mobile');?>
    <div id="stmobileadvancedmenu" class="st-side-content">
        <ul class="mo_advanced_mu_level_0">
             <li class="mo_advanced_ml_level_0 mo_advanced_ml_column">------------------------------------------------------------------</li>
        </ul>
    </div>
    <?php echo $tpl->menu('top-account', 'mobile');?>
    <div id="stmobileadvancedmenu" class="st-side-content">
        <ul class="mo_advanced_mu_level_0">
             <li class="mo_advanced_ml_level_0 mo_advanced_ml_column">------------------------------------------------------------------</li>
             <?php foreach($cms['languages'] as $key => $val):?>
                <li class="mo_advanced_ml_level_0 mo_advanced_ml_column"> <a href="<?php e($val['url'])?>" class="mo_advanced_ma_level_0"><?php e($val['title'])?></a></li>
             <?php endforeach;?>
        </ul>
    </div>
    <?php echo $tpl->element('shop/basket-mobile');?>
    <?php echo $tpl->element('catalog/search-mobile');?>
  </div>
  <div id="st-side-close"><i class="icon-cancel-2 close-st-side"></i></div>
  <div id="st-side-overlay"></div>

  <script type="text/javascript" src="/js/default.js"></script>
  <script type="text/javascript" src="/js/js0.js"></script>
  <script type="text/javascript" src="/js/js1.js"></script>

  <?php echo $tpl->telement('tpl_footer');?>

  <style>
    .ui-menu .ui-menu{margin-top:-3px;position:absolute;}
    .ui-menu .ui-menu-item{margin:0;padding:0;width:100%;}
    .ui-menu .ui-menu-divider{margin:5px -2px 5px -2px;height:0;line-height:0;border-width:1px 0 0 0;}
    .ui-menu .ui-menu-item a{text-decoration:none;display:block;padding:2px .4em;line-height:1.5;min-height:0;font-weight:normal;}
    .ui-menu .ui-state-disabled{font-weight:normal;margin:.4em 0 .2em;line-height:1.5;}
    .ui-menu .ui-state-disabled a{cursor:default;}
    .ui-menu-icons{position:relative;}.ui-menu-icons .ui-menu-item a{position:relative;padding-left:2em;}
    .ui-menu .ui-icon{position:absolute;top:.2em;left:.2em;}
    .ui-menu .ui-menu-icon{position:static;float:right;}
    .ui-widget-content a{

    }
    .ui-autocomplete{position:absolute;top:0;left:-100px;cursor:default; min-width: 400px;}
    .ui-helper-hidden-accessible{display:none;}
    .ui-autocomplete .ui-state-focus{
        border: none;
        background: none;
        cursor: pointer;
        color: #BE112F;
    }

    ._ajax_add_to_cart_button{
        padding: 0;
    }

    .btn-primary{
        background-color: #28B9B2;
        border-color: #28B9B2;
    }
    .form-control{
        max-width: 600px;
    }
    .s_title_block{
        height: 3em;
    }
    .table-data-sheet tr.dott_param {
        background: url(/img/dots_g.gif) repeat-x 0 100% !important;
        overflow: hidden;
    }
    .stadvancedmenu_vs{
        background-color: #EEEEEE;
    }
    ._advanced_mu_level_2 {
        background-color: #DDDDDD !important;
    }
    .stadvancedmenu_vertical {
        opacity: 0.9;
    }
    .countdown_timer {
        padding-top: 10px;
    }
  </style>
    <script>
        $("select.form-control,input[type='radio'],input[type='checkbox']").not(".not_uniform").uniform();
    </script>
</body>
</html>