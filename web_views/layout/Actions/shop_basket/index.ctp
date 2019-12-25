<div>
    <h1 id="cart_title" class="page-heading"><?php echo $title_for_action; ?></h1>
    <!--
    <ul class="step clearfix" id="order_step">
       <li class="step_current first"> <span>1. Summary</span></li>
       <li class="step_todo second"> <span>2. Sign in</span></li>
       <li class="step_todo third"> <span>3. Address</span></li>
       <li class="step_todo four"> <span>4. Shipping</span></li>
       <li id="step_end" class="step_todo last"> <span>5. Payment</span></li>
    </ul>
    -->
    <?php if(empty($basket['items'])):?>
    <p id="emptyCartWarning" class="alert alert-warning "><?php ___e('Your shopping cart is empty.')?></p>
    <?php else:?>
    <div id="order-detail-content" class="table_block">
       <table id="cart_summary" class="table table-bordered resp_table stock-management-on">
          <thead>
             <tr>
                 <th class="cart_product first_item"><?php ___e('Product')?></th>
                 <th class="cart_description item"><?php ___e('Description')?></th>
                 <th class="cart_unit item text-right"><?php ___e('Unit price')?></th>
                 <th class="cart_quantity item text-center"><?php ___e('Qty')?></th>
                 <th class="cart_delete last_item">&nbsp;</th>
                 <th style="width: 120px;" class="cart_total item text-right"><?php ___e('Total')?></th>
             </tr>
          </thead>
          <tbody>
            <?php foreach($basket['items'] as $id => $item):?>
             <tr class="cart_item last_item first_item address_0 odd">
                <td class="cart_product">
                   <div class="mobile_table_content"> <a href="<?php eurl($item['data']['ObjItemList']['alias'])?>"><img src="/getimages/45x51x0/thumb/<?php e($item['data']['ObjOptAttachDef']['attach'])?>" width="45" height="51" class="replace-2x" /></a></div>
                </td>
                <td class="cart_description">
                   <div class="mobile_table_content">
                      <p class="product-name s_title_block"><a href="<?php eurl($item['data']['ObjItemList']['alias'])?>"><?php e(!empty($item['data']['ObjItemList']['rel_id']) ? $item['data']['ObjItemList']['orig_title'] : $item['data']['ObjItemList']['title'])?></a></p>
                      <div class="cart_ref"><?php ___e('Code')?>: <?php e($item['data']['ObjItemList']['code'])?></div>
                        <?php if(!empty($item['infos'])) foreach($item['infos'] as $key => $val):?>
                             <div class="cart_ref"><?php e($key)?> : <?php e($val)?></div>
                        <?php endforeach;?>
            			<?php if(!empty($item['data']['ObjItemList']['rel_id'])) foreach($item['data']['Specification'] as $key => $val):?>
        			         <div class="cart_ref"><?php e($key)?> : <?php e($val)?></div>
                        <?php endforeach;?>
                   </div>
                </td>
                <td class="cart_unit">
                   <div class="mobile_table_content">
                      <ul class="price text-center" >
                         <li class="price"><?php e($item['html_price'])?> <?php e($item['html_currency'])?></li>
                      </ul>
                   </div>
                </td>
                <td class="cart_quantity text-center">
                   <div class="mobile_table_content">
                      <div class="cart_quantity_button clearfix"> 
                          <a href="javascript:void(0)" onclick="$(this).next().val(parseInt($(this).next().val()) - 1).trigger('change');;if(parseInt($(this).next().val()) < 1) $(this).next().val('1')" rel="nofollow" class="cart_quantity_down">-</a> 
                          <input size="2" type="text" onclick="select()" onchange="window.location = '/shop/basket/qnt/<?php e($id)?>/' + this.value" id="data_qnt_<?php e($id)?>" name="data[qnt][<?php e($id)?>]" value="<?php e($item['qnt'])?>" autocomplete="off" class="cart_quantity_input form-control grey" /> 
                          <a href="javascript:void(0)" onclick="$(this).prev().val(parseInt($(this).prev().val()) + 1).trigger('change');;" rel="nofollow" class="cart_quantity_up">+</a>
                      </div>
                   </div>
                </td>
                <td class="cart_delete text-center">
                   <div class="mobile_table_content">
                      <div> <a rel="nofollow" title="Delete" class="cart_quantity_delete" href="/shop/basket/delete/<?php e($id)?>"><i class="icon-cancel icon-small"></i></a></div>
                   </div>
                </td>
                <td class="cart_total">
                   <div class="mobile_table_content"> <span class="price" > <?php e($item['html_price_total'])?> <?php e($item['html_currency'])?> </span></div>
                </td>
             </tr>
             <?php endforeach;?>
          </tbody>
       </table>
       <div class="clearfix">
              <!--
          <div id="cart_voucher" class="cart_voucher mar_b1">
              <form method="POST" action="/shop/basket/update">
                <fieldset>
                   <p class="cart_voucher_title"><?php ___e('Use Coupon Code')?></p>
                   <input  type="text" id="discount_name" name="data[coupon]" value="" placeholder="<?php ___e('Enter your coupon here')?>" class="discount_name form-control" />
                   <button type="submit" name="submitAddDiscount" class="btn btn-default">OK</button>
                </fieldset>
             </form>
          </div>
             -->
             <table id="cart_summary_total" class="table table-bordered">
             <tbody>
                  <?php if(!empty($basket['extra'])):?>
                  <tr>
                     <td><strong><?php ___e('Sub-Total')?>:</strong></td>
                     <td class="price"><?php e($basket['html_sub_price'])?> <?php e($basket['html_currency'])?></td>
                  </tr>
                  <?php foreach($basket['extra'] as $id => $item):?>
                  <tr>
                     <td><strong><?php ___e($item['title'])?>:</strong></td>
                     <td class="price"><?php e($item['html_price'])?> <?php e($item['html_currency'])?></td>
                  </tr>
                  <?php endforeach;?>
                  <?php endif;?>
                  <tr>
                     <td><strong><?php ___e('Total')?>:</strong></td>
                     <td class="price"><?php e($basket['html_price'])?> <?php e($basket['html_currency'])?></td>
                  </tr>
             </tbody>
          </table>
       </div>
    </div>
    <div>&nbsp;</div>
    <p class="cart_navigation clearfix"> 
        <a href="<?php e($basket_back)?>" class="pull-left btn btn-default"> <?php ___e('Continue shopping')?> </a> 
        <a href="/shop/checkout/index" class="pull-right btn btn-default standard-checkout"> <?php ___e('Proceed to checkout')?> </a>
    </p>
    <div class="clear"></div>
    <div class="cart_navigation_extra">
    </div>
    <?php endif;?>
 </div>