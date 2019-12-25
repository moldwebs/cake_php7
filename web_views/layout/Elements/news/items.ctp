<?php if(!empty($block['data'])):?>
      <ul class="pro_column_list">
      <?php foreach($block['data'] as $item):?>
       <li class="clearfix ">
          <div class="pro_column_left"> <a href="<?php eurl($item['ObjItemList']['alias'])?>" title="<?php eth($item['ObjItemList']['title'], 100)?>"> <img src="/getimages/56x56x1/thumb/<?php e($item['ObjOptAttachDef']['attach'])?>" alt="<?php eth($item['ObjItemList']['title'], 100)?>" width="56" height="56"> </a></div>
          <div class="pro_column_right">
             <h4 class="s_title_block nohidden"><a href="<?php eurl($item['ObjItemList']['alias'])?>" title="<?php eth($item['ObjItemList']['title'], 100)?>"><?php eth($item['ObjItemList']['title'], 100)?></a></h4>
             <span class="date-add"><?php e(date("d.m.Y", strtotime($item['ObjItemList']['created'])))?></span>
          </div>
       </li>
      <?php endforeach;?>
      </ul>
<?php endif;?>