<?php if(!empty($cms['languages']) && count($cms['languages']) > 1):?>
     <?php foreach($cms['languages'] as $key => $val):?>
        <div style="line-height: 25px;"><a href="<?php e($val['url'])?>"><img src="/img/flags/<?php e($val['scode'])?>.png" /></a></div>
     <?php endforeach;?>
<?php endif;?>
