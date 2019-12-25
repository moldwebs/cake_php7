<div class="ps-spotlight5 clearfix" id="<?php e($code)?>">
    <div class="container">
        <div class="<?php if(empty($css)):?>moduletable content_extra custom_extraslider4<?php endif;?> <?php e($css)?>">
            <?php if($title):?>
            <div class="box-title">
               <h3 class="title_block">
                  <span>
                  <?php if(!empty($block['ObjItemTree']['data']['title_url'])):?>
                    <a href="<?php eurl($block['ObjItemTree']['data']['title_url'])?>"><?php e($title)?></a>
                  <?php else:?>
                    <?php e($title)?>
                  <?php endif;?>
                  </span>
               </h3>
            </div>
            <?php endif;?>
            <?php e($body)?>
        </div>
    </div>
</div>