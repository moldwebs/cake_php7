<div id="ajax_content">
    <h1 class="heading page-heading product-listing"><span class="cat-name"><?php e($title_for_action)?>&nbsp;</span></h1>
    
    <?php if(!empty($items)):?>

    <?php $catalog_view = (empty($tpltoggle['catalog_view']) || $tpltoggle['catalog_view'] == 'grid' ? 'grid row' : 'list')?>
    <?php $catalog_view_li = (empty($tpltoggle['catalog_view']) || $tpltoggle['catalog_view'] == 'grid' ? 'col-lg-2 col-md-2 col-sm-3 col-xs-6 col-xxs-12' : 'col-xs-12')?>
    <ul class="product_list <?php e($catalog_view)?> " data-classnames="col-lg-2 col-md-2 col-sm-3 col-xs-6 col-xxs-12" data-default-view=" grid ">
       <?php foreach($items as $key => $item):?>
       <li class="ajax_block_product <?php e($catalog_view_li)?>">
          <div class="product-container" itemscope itemtype="https://schema.org/Product">
             <div class="pro_outer_box">
                <div class="pro_first_box ">
                   <a class="product_img_link" href="<?php eurl($item['ObjItemList']['alias'])?>" title="<?php eth($item['ObjItemList']['title'], 100)?>" itemprop="url"> 
                        <img class="replace-2x img-responsive front-image" src="/getimages/272x310x0/thumb/<?php e($item['ObjOptAttachDef']['attach'])?>" alt="<?php eth($item['ObjItemList']['title'], 100)?>" title="<?php eth($item['ObjItemList']['title'], 100)?>" width="272" height="310" itemprop="image" /> 
                        <?php e($this->telement('quick-type', array('item' => $item)))?>
                   </a>
                   <div class="hover_fly fly_1 clearfix">
                      <a class="_ajax_add_to_cart_button btn btn-default btn_primary" href="/users/collections/catalog_wish/<?php e($item['ObjItemList']['id'])?>" rel="nofollow" title="<?php ___e('Remove')?>">
                         <div><i class="icon-basket icon-0x icon_btn icon-mar-lr2"></i><span><?php ___e('Remove')?></span></div>
                      </a>
                   </div>
                </div>
                <div class="pro_second_box">
                   <h5 itemprop="name" class="s_title_block "><a class="product-name" href="<?php eurl($item['ObjItemList']['alias'])?>" title="<?php eth($item['ObjItemList']['title'], 100)?>" itemprop="url" ><?php eth($item['ObjItemList']['title'], 100)?></a></h5>
                   
                   <div class="price_container" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                      <?php if($item['Price']['old'] > 0):?><span class="old-price product-price"><?php e($item['Price']['html_old'])?> <?php e($item['Price']['html_currency'])?></span><?php endif;?>
                      <span itemprop="price" class="price product-price"><?php e($item['Price']['html_value'])?> <?php e($item['Price']['html_currency'])?></span>
                      <meta itemprop="priceCurrency" content="<?php e($item['Price']['html_currency'])?>" />
                   </div>
                   <!--<div class="availability product_stock_info mar_b6"> <span class="available-now hidden sm_lable"> In stock </span></div>-->
                   <div class="color-list-container hidden "></div>
                   
                   <?php e($this->telement('quick-stars', array('item' => $item)))?>

                   <div class="product-desc " itemprop="description"><?php eth($item['ObjItemList']['list_body'], 200)?></div>
                   <div class="act_box hide_cart_btn_in_grid ">
                      <a class=" btn btn-default btn_primary" href="/shop/basket/add/<?php e($item['ObjItemList']['id'])?>/0/0" rel="nofollow" title="<?php ___e('Add to cart')?>">
                         <div><i class="icon-basket icon-0x icon_btn icon-mar-lr2"></i><span><?php ___e('Add to cart')?></span></div>
                      </a>
                      <div class="act_box_inner"></div>
                   </div>
                </div>
                <div style="clear: both;"></div>
             </div>
          </div>
       </li>
       <?php endforeach;?>
    </ul>
    <div class="content_sortPagiBar">

       <div class="bottom-pagination-content clearfix">
          <div id="pagination_bottom" class="pagination clearfix">
             <?php echo $this->telement('pages')?>
          </div>
          <!--<div class="product-count hidden-xs"> Showing 1 - 9 of 10 items</div>-->
       </div>
    </div>
 <?php else:?>
    <div class="no_results"><?php ___e('No results')?></div>
 <?php endif?>
 </div>