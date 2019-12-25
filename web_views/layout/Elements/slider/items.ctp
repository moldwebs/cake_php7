<?php if(!empty($block['data']['items'])):?>
    <link href="//fonts.googleapis.com/css?family=Raleway:800,500,400" rel="stylesheet" type="text/css" media="all" />
    <div id="rev_slider_6_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:38px;">
       <div id="rev_slider_6_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.1.6">
          <ul>
             <?php foreach($block['data']['items'] as $key => $item):?>
             <li data-title="<?php eth($item['ObjItemTree']['title'], 500)?>" data-thumb="/getimages/0x0/thumb/<?php e($item['ObjOptAttachDef']['attach'])?>">
                <a href="<?php e($item['ObjItemTree']['url'])?>">
                <img src="/getimages/0x0/large/<?php e($item['ObjOptAttachDef']['attach'])?>" />
                <div class="tp-caption NotGeneric-Title tp-resizeme" id="slide-<?php e($key)?>-layer-966" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['70','70','70','45']" data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[-105%];z:0;rX:0deg;rY:0deg;rZ:-90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="chars" data-splitout="none" data-responsive_offset="on"data-elementdelay="0.1" style="z-index: 5; white-space: nowrap;"><?php eth($item['ObjItemTree']['title'], 500)?></div>
                <div class="tp-caption NotGeneric-SubTitle tp-resizeme" id="slide-<?php e($key)?>-layer-723" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;"><?php eth($item['ObjItemTree']['body'], 500)?></div>
                </a>
             </li>
             <?php endforeach;?>
          </ul>
          <div class="tp-bannertimer tp-bottom" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>
       </div>
       <style scoped>.tp-caption.NotGeneric-Title,.NotGeneric-Title{color:rgba(255,255,255,1.00);font-size:70px;line-height:70px;font-weight:800;font-style:normal;font-family:Raleway;padding:10px 0px 10px 0;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-width:0px;border-radius:0 0 0 0px}.tp-caption.NotGeneric-SubTitle,.NotGeneric-SubTitle{color:rgba(255,255,255,1.00);font-size:13px;line-height:20px;font-weight:500;font-style:normal;font-family:Raleway;padding:0 0 0 0px;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-width:0px;border-radius:0 0 0 0px;letter-spacing:4px;text-align:left}.tp-caption.NotGeneric-Icon,.NotGeneric-Icon{color:rgba(255,255,255,1.00);font-size:30px;line-height:30px;font-weight:400;font-style:normal;font-family:Raleway;padding:0px 0px 0px 0px;text-decoration:none;background-color:rgba(0,0,0,0);border-color:rgba(255,255,255,0);border-style:solid;border-width:0px;border-radius:0px 0px 0px 0px;letter-spacing:3px;text-align:left}</style>
    </div>
<?php endif;?>
