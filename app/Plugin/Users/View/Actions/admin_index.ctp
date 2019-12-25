<?php $ws_model = 'ObjItemActions'?>

<div class="grid_4">
    <div class="nw-table">
        <?php echo $this->Form->create($ws_model, array('type' => 'get'));?>
        <div class="nw-table-title"><?php ___e('Filters')?></div>
        <div class="nw-table-content pd">
            <?php echo $this->Form->input('fltr_eq__user_id', array('label' => ___('User'), 'options' => $users, 'empty' => ___('All')));?>
            <?php echo $this->Form->input('fltr_eq__action', array('label' => ___('Action'), 'options' => array('create' => ___('Create'), 'edit' => ___('Edit'), 'delete' => ___('Delete')), 'empty' => ___('All')));?>
            <?php echo $this->Form->input('fltr_eqmin__created', array('label' => ___('Date Start'), 'class' => 'ui_date'));?>
            <?php echo $this->Form->input('fltr_eqmax__created', array('label' => ___('Date End') . ' (+1 day)', 'class' => 'ui_date'));?>
        </div>
        <div class="nw-table-footer">
            <?php echo $this->Form->button(___('Search'), array('type' => 'submit', 'class' => 'button primary'));?>
        </div>
        <?php echo $this->Form->end();?>
    </div>
</div>

<div class="grid_12">
    <div class="nw-table">
        <form action="<?php echo $this->Html->url(array('action' => 'table_actions'))?>" method="POST">
        <div class="nw-table-title">
            <div class="fl"><?php echo $page_title?></div>
            <div class="fr">
            </div>
        </div>
        <div class="nw-table-content pd">
            <?php if(!empty($items)):?>
            <table>
                <thead><tr>
                    <th style="width: 25px;"></th>
                	<th style="width: 150px; text-align: left;"><?php echo ___('Action');?></th>
                	<th style="text-align: left;"><?php echo $this->Paginator->sort('user_id', ___('User'));?></th>
                	<th style="width: 150px; text-align: left;"><?php echo $this->Paginator->sort('tid', ___('Type'));?></th>
                	<th style="width: 150px; text-align: left;"><?php echo $this->Paginator->sort('model', ___('Model'));?></th>
                	<th style="width: 150px; text-align: left;"><?php echo $this->Paginator->sort('foreign_key', ___('ID'));?></th>
                	<th style="width: 150px;"><?php echo $this->Paginator->sort('created', ___('Date'));?></th>
                </tr></thead>
                <tbody>
                <?php foreach ($items as $item):?>
                	<tr>
                        <td style="text-align: center;"></td>
                		<td><?php et($item[$ws_model]['action'], 60)?></td>
                		<td><?php et($item['User']['username'], 60)?></td>
                		<td><?php et($item[$ws_model]['tid'], 60)?></td>
                		<td><?php et($item[$ws_model]['model'], 60)?></td>
                		<td>
                            <a target="_blank" href="/admin/<?php et($item[$ws_model]['tid'], 60)?>/item/index?fltr_eq__id=<?php et($item[$ws_model]['foreign_key'], 60)?>"><?php et($item[$ws_model]['foreign_key'], 60)?></a>
                        </td>
                        <td style="text-align: center;">
                            <?php e(date_stl_1($item[$ws_model]['created']))?>
                        </td>
                	</tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <?php else:?>
                <?php echo $this->element('/admin/no_results')?>
            <?php endif;?>
        </div>
        <div class="nw-table-footer">
            <div class="fl">
            </div>
            <div class="fr">
                <?php echo $this->element('/admin/pages')?>
            </div>
        </div>
        </form>
    </div>
</div>

<div class="clear"></div>
