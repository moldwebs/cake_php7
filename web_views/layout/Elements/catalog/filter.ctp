<?php if(empty($block['data'])) $block['data'] = $tpl->get('/catalog/specification/get_list/active')?>
<?php if(!empty($block['data']) || 1==1):?>
<div id="layered_block_left" class="block">
   <p class="title_block"><?php ___e('Filters')?></p>
   <a class="visible-xs" style="position: absolute; right: 10px; top: 8px;" onclick="$('#switch_left_column').click();" href="javascript:void(0)">X</a>
   <div class="block_content">
      <?php echo $this->Form->create(false, array('type' => 'get', 'id' => 'layered_form', 'class' => 'pjax', 'url' => $this->here));?>
         <input type="hidden" name="fltr_lk__title" value="<?php e($_GET["fltr_lk__title"])?>" />
         <!--<input type="hidden" name="fltr_eq__base_id" value="<?php e($_GET["fltr_eq__base_id"])?>" />-->
         <input type="hidden" name="fltr_eqorrel__extra_1" value="<?php e($_GET["fltr_eqorrel__extra_1"])?>" />
         <div>

        <?php if(!empty($base)) $bases = $tpl->get('/catalog/base/get_list/' . $base['ObjItemTree']['id']); else $bases = $tpl->get('/catalog/base/get_list');?>
        <?php if(!empty($bases)):?>
        <div class="list-group-item"><strong><?php ___e('Category')?></strong></div>
        <div class="list-group-item">
            <?php foreach($bases as $key => $val):?>
            <label class="checkbox">
                <?php if(!empty($_GET["fltr_eqorrel__extra_1"])):?>
                <a href="<?php eurl($val['ObjItemTree']['alias'])?>?fltr_eqorrel__extra_1=<?php e($_GET["fltr_eqorrel__extra_1"])?>"><?php e($val['ObjItemTree']['title'])?></a>
                <?php elseif(!empty($_GET["fltr_lk__title"])):?>
                <a href="<?php eurl($val['ObjItemTree']['alias'])?>?fltr_lk__title=<?php e($_GET["fltr_lk__title"])?>"><?php e($val['ObjItemTree']['title'])?></a>
                <?php else:?>
                <a href="<?php eurl($val['ObjItemTree']['alias'])?>"><?php e($val['ObjItemTree']['title'])?></a>
                <?php endif;?>
            </label>
            <?php endforeach;?>
        </div>
        <?php endif;?>


        <div class="list-group-item"><strong><?php ___e('Price')?></strong></div>
        <div class="list-group-item slider-range-box">
    		<input type="hidden" name="fltr_eqmin__price_conv" value="<?php e($_GET["fltr_eqmin__price_conv"])?>" />
            <input type="hidden" name="fltr_eqmax__price_conv" value="<?php e($_GET["fltr_eqmax__price_conv"])?>" />
            <div data-change-min="fltr_eqmin__price_conv" data-change-max="fltr_eqmax__price_conv" data-label-reasult="" data-min="0" data-max="<?php e(!empty($base['ObjItemTree']['data']['fltr_price_max']) ? $base['ObjItemTree']['data']['fltr_price_max'] : $fltr_max_price)?>" data-unit="<?php e(Configure::read('Obj.currency.title'))?>" class="slider-range" data-value-min="<?php e($_GET["fltr_eqmin__price_conv"])?>" data-value-max="<?php e($_GET["fltr_eqmax__price_conv"])?>"></div>
            <div class="range-values"></div>
            <div class="range-values-textbox">
    		<input type="text" id="fltr_eqmin__price_conv"  /> <?php e(Configure::read('Obj.currency.title'))?>
    		-
            <input type="text" id="fltr_eqmax__price_conv"  /> <?php e(Configure::read('Obj.currency.title'))?>
            </div>
        </div>


        <?php if(!empty($fltr_manufacturers)):?>
        <div class="list-group-item"><strong><?php ___e('Manufacturer')?></strong></div>
        <div class="list-group-item">
            <?php foreach($fltr_manufacturers as $key => $val):?>
            <label class="checkbox">
            <input type="checkbox" id="fltr_eq__extra_2_<?php e($key)?>" value="<?php e($key)?>" name="fltr_eq__extra_2[]" <?php e(in_array($key, $_GET["fltr_eq__extra_2"]) ? 'checked="checked"' : null)?> />
            <a href="<?php e($this->here)?>?fltr_eq__extra_2[]=<?php e($key)?>"><?php e($val)?></a> <span class="count">(<?php e($fltr_manufacturers_count[$key])?>)</span></label>
            <?php endforeach;?>
        </div>
        <?php endif;?>

        <?php if(!empty($block['data'])):?>

        	<?php foreach($block['data'] as $specif):?>
                <?php if($specif['Specification']['data']['in_filter'] != '1') continue;?>
                <?php if($specif['Specification']['tp_fltr'] == 'select'):?>
                    <div class="list-group-item"><strong><?php e($specif['Specification']['ctitle'])?></strong></div>
                    <div class="list-group-item">
                            <?php foreach($specif['SpecificationValue'] as $key => $val):?>
                            <label class="checkbox">
                            <input type="checkbox" id="<?php e("fltr_relval__specification{$specif['Specification']['id']}")?>_<?php e($key)?>" value="<?php e($key)?>" name="<?php e("fltr_relval__specification{$specif['Specification']['id']}")?>[]" <?php e(in_array($key, $_GET["fltr_relval__specification{$specif['Specification']['id']}"]) ? 'checked="checked"' : null)?> />
                            <?php e($val)?> <!--<span class="count">(<?php e($specif['SpecificationCount'][$key])?>)</span>--></label>
                            <?php endforeach;?>
                    </div>
                <?php elseif($specif['Specification']['tp_fltr'] == 'color'):?>
                    <div class="list-group-item"><strong><?php e($specif['Specification']['ctitle'])?></strong></div>
                    <div class="list-group-item">
                            <?php foreach($specif['SpecificationValueImage'] as $key => $val):?>
                            <li>
                                <input type="checkbox" id="<?php e("fltr_relval__specification{$specif['Specification']['id']}")?>_<?php e($key)?>" value="<?php e($key)?>" name="<?php e("fltr_relval__specification{$specif['Specification']['id']}")?>[]" <?php e(in_array($key, $_GET["fltr_relval__specification{$specif['Specification']['id']}"]) ? 'checked="checked"' : null)?> />
                                <label style="background: #<?php e($val['color'])?>;" for="<?php e("fltr_relval__specification{$specif['Specification']['id']}")?>_<?php e($key)?>">
                                <span class="button"></span>
                                </label>
                            </li>
                            <?php endforeach;?>
                    </div>
                <?php elseif($specif['Specification']['tp_fltr'] == 'range'):?>
                    <?php if(empty($specif['SpecificationMaxValue'])) continue;?>
                    <div class="list-group-item"><strong><?php e($specif['Specification']['title'])?></strong></div>
                    <div class="list-group-item slider-range-box">
                        <input type="hidden" name="fltr_relvalmin__specification<?php e($specif['Specification']['id'])?>" value="<?php e($_GET["fltr_relvalmin__specification{$specif['Specification']['id']}"])?>" />
            			<input type="hidden" name="fltr_relvalmax__specification<?php e($specif['Specification']['id'])?>" value="<?php e($_GET["fltr_relvalmax__specification{$specif['Specification']['id']}"])?>" />
                        <div data-change-min="fltr_relvalmin__specification<?php e($specif['Specification']['id'])?>" data-change-max="fltr_relvalmax__specification<?php e($specif['Specification']['id'])?>" data-label-reasult="" data-min="0" data-max="<?php e(!empty($specif['Specification']['data']['fltr_range_max']) ? $specif['Specification']['data']['fltr_range_max'] : (!empty($specif['SpecificationMaxValue']) ? $specif['SpecificationMaxValue'] : 10000))?>" data-unit="<?php e($specif['Specification']['measure'])?>" class="slider-range" data-value-min="<?php e($_GET["fltr_relvalmin__specification{$specif['Specification']['id']}"])?>" data-value-max="<?php e($_GET["fltr_relvalmax__specification{$specif['Specification']['id']}"])?>"></div>
                        <div class="range-values"></div>
                        <div class="range-values-textbox">
                		<input type="text" id="fltr_relvalmin__specification<?php e($specif['Specification']['id'])?>" /> <?php e($specif['Specification']['measure'])?>
                		-
                        <input type="text" id="fltr_relvalmax__specification<?php e($specif['Specification']['id'])?>" /> <?php e($specif['Specification']['measure'])?>
                        </div>
                    </div>
                <?php endif;?>
            <?php endforeach;?>

        <?php endif;?>

         </div>
      </form>
   </div>
   <div id="layered_ajax_loader" style="display: none;">
      <div id="layered_ajax_loader_inner">
         <p> <i class="icon-spin5 animate-spin"></i> <br />Loading...</p>
      </div>
   </div>
</div>
<style>
.list-group-item.slider-range-box .range-values-textbox{
    text-align: center;
    padding-top: 5px;
}
.list-group-item.slider-range-box .range-values-textbox input {
    width: 50px;
    padding: 0;
    margin: 2px;
}
.list-group-item.slider-range-box .range-values{
    display: none;
}
.list-group-item {
    max-height: 250px;
    overflow-y: auto;
}
</style>
<?php endif;?>