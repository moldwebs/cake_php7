<?php if(!empty($menu['links'])):?>
<nav id="st_advanced_menu_wrap" role="navigation">
   <ul class="st_advanced_menu clearfix advanced_mu_level_0">
      <?php foreach($menu['links'] as $key => $val):?>
      <?php if($val['data']['css_class'] == 'categories'):?>
      <li id="st_advanced_menu_0" class="advanced_ml_level_0 menu_ver_open_lg">
         <a id="st_advanced_ma_0" href="javascript:;" class="advanced_ma_level_0 is_parent" title="<?php e($val['title'])?>" rel="nofollow"><i class="icon-menu"></i><?php e($val['title'])?></a>
         <ul class="stadvancedmenu_sub stadvancedmenu_vertical col-md-3 ">
            <?php foreach($val['child'] as $_key => $_val):?>
            <?php if(!empty($_val['child'])):?>
            <?php if(!empty($_val['data']['is_big'])):?>
            <li id="st_advanced_menu_536" class="advanced_mv_level_1">
               <a id="st_advanced_ma536" href="<?php e($_val['data']['url'])?>" class="advanced_mv_item" title="<?php e($_val['title'])?>"><?php e($_val['title'])?><i class="icon-right-dir-2"></i></a>
               <div class="stadvancedmenu_vs advanced_style_wide col-md-12">
                  <div class="row advanced_m_column_row">
                     <div id="st_advanced_menu_column_193" class="col-md-12">
                        <div id="st_advanced_menu_block_545">
                           <div class="row">
                              <?php foreach($_val['child'] as $__key => $__val):?>
                              <div class="col-md-4">
                                 <ul class="advanced_mu_level_1">
                                    <li class="advanced_ml_level_1">
                                       <a href="<?php e($__val['data']['url'])?>" title="<?php e($__val['title'])?>" class="advanced_ma_level_1 advanced_ma_item"><?php e($__val['title'])?></a>
                                       <ul class="advanced_mu_level_2 p_granditem_1">
                                          <?php foreach($__val['child'] as $___key => $___val):?>
                                          <li class="advanced_ml_level_2 granditem_0 p_granditem_1"> <a href="<?php e($___val['data']['url'])?>" title="<?php e($___val['title'])?>" class="advanced_ma_level_2 advanced_ma_item "><?php e($___val['title'])?></a></li>
                                          <?php endforeach;?>
                                       </ul>
                                    </li>
                                 </ul>
                              </div>
                              <?php endforeach;?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </li>
            <?php else:?>
            <li id="st_advanced_menu_538" class="advanced_mv_level_1">
               <a id="st_advanced_ma538" href="<?php e($_val['data']['url'])?>" class="advanced_mv_item" title="<?php e($_val['title'])?>"><?php e($_val['title'])?><i class="icon-right-dir-2"></i></a>
               <ul id="st_advanced_menu_multi_level_538" class="stadvancedmenu_vs stadvancedmenu_multi_level">
                  <?php foreach($_val['child'] as $__key => $__val):?>
                  <?php if(!empty($__val['child'])):?>
                  <li class="advanced_ml_level_1">
                     <a href="<?php e($__val['data']['url'])?>" title="<?php e($__val['title'])?>" class="advanced_ma_level_1 advanced_ma_item has_children "><?php e($__val['title'])?><span class="is_parent_icon"><b class="is_parent_icon_h"></b><b class="is_parent_icon_v"></b></span></a>
                     <ul class="advanced_mu_level_2 p_granditem_1">
                        <?php foreach($__val['child'] as $___key => $___val):?>
                        <li class="advanced_ml_level_2 granditem_0 p_granditem_1"> <a href="<?php e($___val['data']['url'])?>" title="<?php e($___val['title'])?>" class="advanced_ma_level_2 advanced_ma_item "><?php e($___val['title'])?></a></li>
                        <?php endforeach;?>
                     </ul>
                  </li>
                  <?php else:?>
                  <li class="advanced_ml_level_1"> <a href="<?php e($__val['data']['url'])?>" title="<?php e($__val['title'])?>" class="advanced_ma_level_1 advanced_ma_item "><?php e($__val['title'])?></a></li>
                  <?php endif;?>
                  <?php endforeach;?>
               </ul>
            </li>
            <?php endif;?>
            <?php else:?>
            <li id="st_advanced_menu_546" class="advanced_mv_level_1"><a id="st_advanced_ma546" href="<?php e($_val['data']['url'])?>" class="advanced_mv_item" title="<?php e($_val['title'])?>"><?php e($_val['title'])?></a></li>
            <?php endif;?>
            <?php endforeach;?>
         </ul>
      </li>
      <?php foreach($cms['languages'] as $key => $val):?>
      <li class="advanced_ml_level_0 m_alignment_0">
         <a style="color: #333333;" href="<?php e($val['url'])?>" class="advanced_ma_level_0" title="<?php e($val['title'])?>"><img src="/img/flags/<?php e($val['scode'])?>.png" /></a>
      </li>
      <?php endforeach;?>
      <?php else:?>
      <li class="advanced_ml_level_0 m_alignment_0">
         <a href="<?php e($val['data']['url'])?>" class="advanced_ma_level_0 is_parent" title="<?php e($val['title'])?>"><?php e($val['title'])?><?php if(!empty($val['child'])):?><i class="icon-down-dir-2"></i><?php endif;?></a>
         <?php if(!empty($val['child'])):?>
         <ul class="stadvancedmenu_sub stadvancedmenu_multi_level">
            <?php foreach($val['child'] as $_key => $_val):?>
            <li class="advanced_ml_level_1">
               <a href="<?php e($_val['data']['url'])?>" title="<?php e($_val['title'])?>" class="advanced_ma_level_1 advanced_ma_item has_children "><?php e($_val['title'])?></a>
               <?php if(!empty($_val['child'])):?>
               <ul class="advanced_mu_level_2 p_granditem_1">
                  <?php foreach($_val['child'] as $__key => $__val):?>
                  <li class="advanced_ml_level_2 granditem_0 p_granditem_1"> <a href="<?php e($__val['data']['url'])?>" title="<?php e($__val['title'])?>" class="advanced_ma_level_2 advanced_ma_item "><?php e($__val['title'])?></a></li>
                  <?php endforeach;?>
               </ul>
               <?php endif;?>
            </li>
            <?php endforeach;?>
         </ul>
         <?php endif;?>
      </li>
      <?php endif;?>
      <?php endforeach;?>
   </ul>
</nav>
 <?php endif;?>