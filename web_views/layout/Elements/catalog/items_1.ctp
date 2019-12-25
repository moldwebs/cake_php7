<?php if(!empty($block['data'])):?>
<div class="sliderwrap products_slider">
    <ul class="slides">
        <?php foreach($block['data'] as $item):?>
           <li class="first_item">
              <div class="pro_outer_box">
                 <div class="pro_first_box">
                    <a href="<?php eurl($item['ObjItemList']['alias'])?>" title="<?php eth($item['ObjItemList']['title'], 500)?>" class="product_image"> 
                        <img src="/getimages/270x308x0/thumb/<?php e($item['ObjOptAttachDef']['attach'])?>" alt="<?php eth($item['ObjItemList']['title'], 500)?>" height="" width="" class="replace-2x img-responsive" /> 
                        <span class="on_sale"><i>- <?php e(round(($item['Price']['old']-$item['Price']['value'])/$item['Price']['old'] * 100))?> %</i></span>
                    </a>
                    <div class="countdown_wrap countdown_timer countdown_style_0 s_countdown_timer" data-countdown="<?php e(date("Y/m/d", strtotime("+1 day")))?> 00:00:00" data-id-product="<?php e($item['ObjItemList']['id'])?>"></div>
                 </div>
                 <div class="pro_second_box">
                    <p class="s_title_block nohidden"><a href="<?php eurl($item['ObjItemList']['alias'])?>" title="<?php eth($item['ObjItemList']['title'], 500)?>"><?php eth($item['ObjItemList']['title'], 500)?></a></p>
                    <div class="price_container"> <span class="price"> <?php e($item['Price']['html_value'])?> <?php e($item['Price']['html_currency'])?> </span> <span class="old_price"><?php e($item['Price']['html_old'])?> <?php e($item['Price']['html_currency'])?></span></div>
                 </div>
              </div>
           </li>
        <?php endforeach;?>
    </ul>
 </div>
<?php endif;?>