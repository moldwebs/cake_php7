<?php $pages = $this->Paginator->numbers(array('array' => true, 'modulus' => 4))?>
<?php //echo $this->Paginator->counter('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}');?>
<?php if(!empty($pages)):?>
            <ul class="pagination clearfix li_fl">
            <?php if(!empty($pages['prev'])):?>
            <li class="pagination_previous"><a href="<?php e($pages['prev']['url'])?>" >&lt;</a></li>
            <?php endif;?>
            <?php foreach($pages['pages'] as $page):?>
                <?php if($page['active']):?>
                    <li class="current"><span><?php e($page['number'])?></span></li>
                <?php else:?>
                    <li><a href="<?php e($page['url'])?>"><?php e($page['number'])?></a></li>
                <?php endif;?>
            <?php endforeach;?>
            <?php if(!empty($pages['next'])):?>
            <li class="pagination_next"><a href="<?php e($pages['next']['url'])?>" >&gt;</a></li>
            <?php endif;?>
            </ul>
<?php endif;?>