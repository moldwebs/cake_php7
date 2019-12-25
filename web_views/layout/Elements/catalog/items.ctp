<?php if(!empty($block['data'])):?>
 <div class="sliderwrap products_slider">
    <ul class="slides">
       <?php foreach($block['data'] as $item):?>
       <li class="ajax_block_product first_item">
          <div class="pro_outer_box">
             <div class="pro_first_box ">
                <a href="<?php eurl($item['ObjItemList']['alias'])?>" title="<?php eth($item['ObjItemList']['title'], 500)?>" class="product_image">
                    <img src="/getimages/272x310x0/thumb/<?php e($item['ObjOptAttachDef']['attach'])?>" width="272" height="310" alt="<?php eth($item['ObjItemList']['title'], 500)?>" title="<?php eth($item['ObjItemList']['title'], 500)?>" class="replace-2x img-responsive front-image" />
                    <?php e($this->telement('quick-type', array('item' => $item)))?>
                </a>
                <div class="hover_fly fly_1 clearfix">
                   <a class="_ajax_add_to_cart_button btn btn-default btn_primary" href="/shop/basket/add/<?php e($item['ObjItemList']['id'])?>/0/1" rel="nofollow" title="<?php ___e('Add to cart')?>" >
                      <div><i class="icon-basket icon-0x icon_btn icon-mar-lr2"></i><span><?php ___e('Add to cart')?></span></div>
                   </a>
                </div>
             </div>
             <div class="pro_second_box">
                <p class="s_title_block "><a href="<?php eurl($item['ObjItemList']['alias'])?>" title="<?php eth($item['ObjItemList']['title'], 500)?>"><?php eth($item['ObjItemList']['title'], 500)?></a></p>
                <div class="price_container"> 
                <?php if($item['Price']['old'] > 0):?><span class="old-price product-price"><?php e($item['Price']['html_old'])?> <?php e($item['Price']['html_currency'])?></span><?php endif;?>
                <span class="price"> <?php e($item['Price']['html_value'])?> <?php e($item['Price']['html_currency'])?> </span>
                </div>
                <div class="rating_box">
                   <span class="rating_box_inner"> 
                    <?php for($i=1;$i<=5;$i++):?>
                        <i class="icon-star-1 icon-small <?php e($i <= $item['RelationValue']['rating_rate'] ? 'light' : ($i - 0.5 <= $item['RelationValue']['rating_rate'] ? 'light' : ''))?>"></i> 
                    <?php endfor;?>
                    </span>
                </div>
             </div>
          </div>
       </li>
       <?php endforeach;?>
    </ul>
 </div>
<?php endif;?>