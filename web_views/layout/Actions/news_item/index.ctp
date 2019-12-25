<h1 class="heading"> <?php e($cfg['news']['title'])?></h1>
<div id="viewmode" class="">
   <ul class="blog_list_grid blog_list clearfix">
      <?php foreach($items as $key => $item):?>
      <li class="block_blog col-lg- col-md- col-sm- col-xs- col-xxs- last-item-of-desktop-line last-in-line last-item-of-tablet-line last-item-of-mobile-line last-item-of-portrait-line">
         <?php if(!empty($item['ObjOptAttachDef']['attach'])):?>
         <div class="blog_image"><a href="<?php eurl($item['ObjItemList']['alias'])?>" rel="bookmark" title="Predefined layouts C"><img src="/getimages/580x324x1/large/<?php e($item['ObjOptAttachDef']['attach'])?>" alt="<?php eth($item['ObjItemList']['title'], 100)?>" width="580" height="324" class="hover_effect" /></a></div>
         <?php endif;?>
         <div>
            <h3 class="s_title_block"><a href="<?php eurl($item['ObjItemList']['alias'])?>" title="<?php eth($item['ObjItemList']['title'], 100)?>"><?php eth($item['ObjItemList']['title'], 100)?></a></h3>
            <p class="blok_blog_short_content"><?php eth($item['ObjItemList']['list_body'], 500)?>...<a href="<?php eurl($item['ObjItemList']['alias'])?>" class="go"><?php ___e('read more')?></a></p>
            <div class="blog_info"> <span class="date-add"><?php e(date("d.m.Y", strtotime($item['ObjItemList']['created'])))?></span> </div>
         </div>
      </li>
      <?php endforeach;?>
   </ul>
</div>

<div class="content_sortPagiBar">
   <div class="paginationBar paginationBarBottom clearfix">
      <div class="bottom-blog-pagination">
         <div class="pagination">
            <?php echo $this->telement('pages')?>
         </div>
      </div>
   </div>
</div>
