<div>
    <div itemscope itemtype="https://schema.org/Product">
       <meta itemprop="url" content="<?php eurl($item['ObjItemList']['alias'])?>" />
       <div class="primary_block row">
          <div class="pb-left-column col-xs-12 col-sm-4 col-md-4 ">
             <div id="image-block" class="clearfix">
                <span id="view_full_size">
                    <img id="bigpic" itemprop="image" src="/getimages/367x420x0/large/<?php e($item['ObjOptAttachDef']['attach'])?>" title="<?php e($item['ObjItemList']['title'])?>" alt="<?php e($item['ObjItemList']['title'])?>" width="367" height="420" class="replace-2x"/>
                    <?php e($this->telement('quick-type', array('item' => $item)))?>
                </span>
             </div>
             <?php if(!empty($item['ObjOptAttachs']['allimages'])):?>
             <div id="views_block" class="clearfix ">
                <span class="view_scroll_spacer"><a id="view_scroll_left" class="" title="<?php ___e('Other views Previous')?>" href="javascript:;"><i class="icon-left-open-1"></i></a></span>
                <div id="thumbs_list">
                   <ul id="thumbs_list_frame">
                      <?php foreach($item['ObjOptAttachs']['allimages'] as $key => $attach):?>
                      <li id="thumbnail_<?php e($key)?>">
                        <a href="/getimages/700x800x0/large/<?php e($attach['attach'])?>" data-fancybox-group="other-views" class="fancybox <?php if($key < 1) e('shown')?> " title="<?php e($item['ObjItemList']['title'])?>">
                            <img class="replace-2x img-responsive" id="thumb_<?php e($key)?>" src="/getimages/70x80x0/thumb/<?php e($attach['attach'])?>" alt="<?php e($item['ObjItemList']['title'])?>" title="<?php e($item['ObjItemList']['title'])?>" height="138" width="120" itemprop="image" />
                        </a>
                      </li>
                      <?php endforeach;?>
                   </ul>
                </div>
                <a id="view_scroll_right" title="<?php ___e('Other views Next')?>" href="javascript:;"><i class="icon-right-open-1"></i></a>
             </div>
             <?php endif;?>
             <ul id="usefull_link_block" class="clearfix no-print"></ul>
          </div>
          <div class="pb-center-column col-xs-12 col-sm-5 col-md-5 ">
             <h1 itemprop="name" class="product_main_name"><?php e($item['ObjItemList']['title'])?></h1>
             <div class="product_info_box">
                <div class=" product_info_wrap" id="product_reference"> <span class="editable sm_lable">
                    <?php ___e('Code')?>: <?php e($item['ObjItemList']['id'])?>
                </span></div>
                <div class=" product_info_wrap" id="product_reference"> <span class="editable sm_lable">
                    <?php ___e('Brand')?>: <a href="<?php eurl($item['ObjItemTree']['alias'])?>?fltr_eq__extra_2[]=<?php e($item['ObjItemList']['extra_2'])?>"><?php e($manufacturers[$item['ObjItemList']['extra_2']])?></a>
                </span></div>
                <?php if(!empty($item['ObjItemList']['data']['wrnt'])):?>
                <div class=" product_info_wrap" id="product_reference"> <span class="editable sm_lable">
                    <?php ___e('Warranty')?>: <?php e($item['ObjItemList']['data']['wrnt'])?> <?php ___e('month(s)')?>
                </span></div>
                <?php endif;?>
             </div>
             <form id="buy_block" action="/shop/basket/add/" method="get">
                <input type="hidden" name="id" value="<?php e($item['ObjItemList']['id'])?>" />
                <div class="box-info-product">
                   <div class="content_prices clearfix">
                      <div class="price_box clearfix">
                         <p class="our_price_display fl" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                            <link itemprop="availability" href="https://schema.org/InStock"/>
                            <span id="our_price_display" content="<?php e($item['Price']['html_value'])?>"><?php e($item['Price']['html_value'])?> <?php e($item['Price']['html_currency'])?></span>
                            <meta itemprop="price" content="<?php e($item['Price']['value'])?>" />
                            <meta itemprop="priceCurrency" content="<?php e($item['Price']['html_currency'])?>" />
                         </p>

                          <?php if($item['ObjItemList']['status'] == '1'):?>

                         <?php if($item['Price']['old'] > 0):?>
                         <p id="old_price" class=" fl"><span id="old_price_display"><?php e($item['Price']['html_old'])?> <?php e($item['Price']['html_currency'])?></span></p>
                         <?php endif;?>

                         <?php
                            $installment = false;
                            if(!empty($item['Relation']['extra_1'])) foreach(Configure::read('CMS.credit_types') as $id_type => $mnth_type){
                                if(in_array($id_type, $item['Relation']['extra_1'])){
                                    $installment = $mnth_type;
                                    break;
                                }
                            }
                         ?>

                         <?php if(empty($installment)):?>
                         <div style="float: left;">&nbsp;&nbsp;&nbsp;<?php ___e('Credit')?> (12 <?php ___e('month(s)')?>):&nbsp;&nbsp;&nbsp;</div>
                         <div style="float: left;"><div class="price"><p class="our_price_display">
                           <span id="credit_box"></span> <?php e($item['Price']['html_currency'])?>/<?php ___e('month')?>
                         </p></div></div>
                         <script type="text/javascript">
                           document.addEventListener("DOMContentLoaded", function(event) {
                            $('#credit_box').load('/shop/checkout/credit_amount?payment=credit_simple&amount=<?php e($item['Price']['value'])?>&months=12');
                           });
                         </script>
                         <?php else:?>
                         <div style="float: left;">&nbsp;&nbsp;&nbsp;<?php ___e('Credit')?> (<?php e($installment)?> <?php ___e('month(s)')?>):&nbsp;&nbsp;&nbsp;</div>
                         <div style="float: left;"><div class="price"><p class="our_price_display">
                           <span id="credit_box"><?php e(round($item['Price']['value']/$installment, 0))?></span> <?php e($item['Price']['html_currency'])?>/<?php ___e('month')?>
                         </p></div></div>
                         <?php endif;?>

                         <?php endif;?>

                      </div>
                   </div>
                   <?php if($item['ObjItemList']['status'] == '1'):?>
                   <div class="box-cart-bottom">
                      <div class="qt_cart_box clearfix ">
                         <p id="quantity_wanted_p">
                            <span class="quantity_input_wrap clearfix">
                            <a href="javascript:void(0)" onclick="$(this).next().val(parseInt($(this).next().val()) - 1);if(parseInt($(this).next().val()) < 1) $(this).next().val('1')" class="product_quantity_down">-</a>
                            <input type="text" min="1" name="qnt" id="quantity_wanted" class="text" value="1" />
                            <a href="javascript:void(0)" onclick="$(this).prev().val(parseInt($(this).prev().val()) + 1);" class="product_quantity_up">+</a>
                            </span>
                         </p>
                         <div id="add_to_cart_wrap" class="">
                            <p id="add_to_cart" class="buttons_bottom_block no-print">
                                <button type="submit" name="Submit" class="btn btn-default btn_primary exclusive"> <span><?php ___e('Add to cart')?></span> </button>
                            </p>
                         </div>
                      </div>
                      <div class="buttons_bottom_block no-print">
                        <a id="wishlist_button_nopop" href="javascript:void(0)" onclick="geteval('/users/collections/catalog_wish/<?php e($item['ObjItemList']['id'])?>'); return false;" rel="nofollow" title="<?php ___e('Add to my wishlist')?>" class="addToWishlist wishlistProd_77">
                        <i class="icon-heart icon-0x icon_btn icon-mar-lr2"></i><span><?php ___e('Add to wishlist')?></span>
                        </a>
                      </div>
                      <div class="buttons_bottom_block no-print">
                        <a id="wishlist_button_nopop" href="javascript:void(0)" onclick="geteval('/users/collections/catalog_compare/<?php e($item['ObjItemList']['id'])?>/<?php e($item['ObjItemList']['base_id'])?>'); return false;" rel="nofollow" title="<?php ___e('Add to my wishlist')?>" class="addToWishlist wishlistProd_77">
                        <i class="icon-bag icon-0x icon_btn icon-mar-lr2"></i><span><?php ___e('Add to compare')?></span>
                        </a>
                      </div>
                      <div class="buttons_bottom_block no-print">
                        <a id="wishlist_button_nopop" href="javascript:void(0)" onclick="mxwin('/shop/checkout/fast/<?php e($item['ObjItemList']['id'])?>'); return false;" rel="nofollow"  class="addToWishlist wishlistProd_77">
                        <i class="icon-shop icon-0x icon_btn icon-mar-lr2"></i><span><?php ___e('Fast Order')?></span>
                        </a>
                      </div>
                      <div class="buttons_bottom_block no-print">
                        <a id="wishlist_button_nopop" href="javascript:void(0)" onclick="mxwin('/shop/checkout/creditcalc/<?php e($item['ObjItemList']['id'])?>'); return false;" rel="nofollow"  class="addToWishlist wishlistProd_77">
                        <i class="icon-shop icon-0x icon_btn icon-mar-lr2"></i><span><?php ___e('Buy in credit')?></span>
                        </a>
                      </div>
                      <div>&nbsp;</div>
                   </div>
                   <?php endif;?>
                </div>
             </form>
             <div id="product_comments_block_extra" class="no-print clearfix" >
                <div class="comments_note pull-left">
                   <div class="star_content clearfix">
                      <?php for($i=1;$i<=5;$i++):?>
                      <div class="star <?php e($i <= $item['RelationValue']['rating_rate'] ? 'star_on' : ($i - 0.5 <= $item['RelationValue']['rating_rate'] ? 'star_on' : ''))?>"></div>
                      <?php endfor;?>
                   </div>
                   <a href="#idTab5" onclick="$('a[href=\'#idTab3\']').trigger('click'); $('html, body').animate({ scrollTop: 700 }, 200); return false;" class="reviews pull-left"> (<span><?php e($item['RelationValue']['review_qnt'] > 0 ? $item['RelationValue']['review_qnt'] : '0')?></span>) </a>
                </div>
                <div class="comments_advices pull-left"> <a class="" href="#new_comment_form" onclick="$('a[href=\'#idTab3\']').trigger('click'); $('html, body').animate({ scrollTop: 700 }, 200); return false;"> <?php ___e('Write a review')?> </a></div>
             </div>
          </div>
          <div class="pb-right-column col-xs-12 col-sm-3 col-md-3">
          <?php echo $tpl->blocks('side-product')?>
          </div>
       </div>
       <div id="bottom_more_info_block" class="mar_b2">
          <div id="more_info_block" class="mar_b2">
             <ul id="more_info_tabs" class="idTabs common_tabs li_fl clearfix">
                <?php if(!empty($item['Specification'])):?><li ><a data-toggle="tab" href="#idTab2"><?php ___e('Specifications')?></a></li><?php endif;?>
                <?php if(!empty($item['ObjItemList']['body'])):?><li class="first "><a data-toggle="tab" href="#idTab1"><?php ___e('Description')?></a></li><?php endif;?>
                <?php if(!empty($item['ObjItemList']['body2'])):?><li ><a data-toggle="tab" href="#idTab4"><?php ___e('Video')?></a></li><?php endif;?>
                <li class=""><a data-toggle="tab" href="#idTab3" ><?php ___e('Reviews')?></a></li>
             </ul>
             <div style="padding: 20px;" id="more_info_sheets" class="sheets align_justify">
                <?php if(!empty($item['Specification'])):?>
                <?php $i = 0;?>
                <div id="idTab2" class="rte product_accordion  page-product-box">
                   <div class="product_accordion_title">
                      <a href="javascript:;" class="opener dlm">&nbsp;</a>
                      <div class="product_accordion_name"><?php ___e('Specifications')?></div>
                   </div>
                   <div class="pa_content">
                   <div class="col-md-6 col-xs-12">
                   <table class="table-data-sheet">
                      <?php foreach($item['Specification'] as $spec):?>

                      <?php if($i++ >= floor((count($item['Specification']) / 2)) && !is_array($spec) && 1==1):?>
                        <?php $i = 0;?>
                        </table></div><div class="col-md-6 col-xs-12"><table class="table-data-sheet">
                      <?php endif;?>

                      <?php if(!is_array($spec)):?>
                      <tr class="odd">
                         <td colspan="2"><strong class="label-big"><?php e($spec)?></strong></td>
                      </tr>
                      <?php else:?>
                      <tr class="even dott_param">
                         <td style="width: 50%; font-weight: normal;"><?php e($spec['title'])?></td>
                         <td><?php e($spec['value'])?></td>
                      </tr>
                      <?php endif;?>

                      <?php endforeach;?>
                   </table>
                   </div>
                   <div style="clear: both;"></div>
                   </div>
                </div>
                <?php endif;?>

                <?php if(!empty($item['ObjItemList']['body'])):?>
                <div id="idTab1" class="rte product_accordion  page-product-box ">
                   <div class="product_accordion_title">
                      <a href="javascript:;" class="opener dlm">&nbsp;</a>
                      <div class="product_accordion_name"><?php ___e('Description')?></div>
                   </div>
                   <div class="pa_content">
                   <div  class="rte">
                      <?php e($item['ObjItemList']['body'])?>
                      <div style="clear: both;"></div>
                   </div>
                   </div>
                </div>
                <?php endif;?>
                <?php if(!empty($item['ObjItemList']['body2'])):?>
                <div id="idTab4" class="rte product_accordion  page-product-box">
                   <div class="product_accordion_title">
                      <a href="javascript:;" class="opener dlm">&nbsp;</a>
                      <div class="product_accordion_name"><?php ___e('Video')?></div>
                   </div>
                   <div class="pa_content">
                      <?php e($item['ObjItemList']['body2'])?>
                      <div style="clear: both;"></div>
                   </div>
                </div>
                <?php endif;?>
                <div id="idTab3" class="rte product_accordion  page-product-box">
                   <div class="product_accordion_title">
                      <a href="javascript:;" class="opener dlm">&nbsp;</a>
                      <div class="product_accordion_name"><?php ___e('Reviews')?></div>
                   </div>
                   <div class="pa_content">
                      <?php e($this->telement('reviews', array('item' => $item)))?>
                      <div style="clear: both;"></div>
                   </div>
                </div>

             </div>
          </div>
       </div>

       <?php echo $tpl->blocks('product-page')?>

    </div>
 </div>