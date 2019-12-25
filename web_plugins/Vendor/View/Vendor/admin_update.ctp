<meta http-equiv="refresh" content="5; URL=/admin/vendor/vendor/update?getlog=1" />
<div class="grid_16">
    <div class="nw-table">
        <form action="<?php echo $this->Html->url(array('action' => 'table_actions'))?>" method="POST">
        <div class="nw-table-title">
            <div class="fl"><?php echo $page_title?></div>
            <div class="fr">
            </div>
        </div>
        <div class="nw-table-content pd">
            <?php e(nl2br($data))?>
        </div>
        </form>
    </div>
</div>


<div class="clear"></div>
