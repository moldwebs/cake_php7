<?php $ws_model = 'ObjItemTree'?>
<div class="grid_12">
    <div class="nw-table">
        <form action="<?php echo $this->Html->url(array('action' => 'table_actions'))?>" method="POST">
        <div class="nw-table-title">
            <div class="fl"><?php echo $page_title?></div>
            <div class="fr">
                <a href="javascript:void(0)" class="button ns-expand-all"><?php ___e('Expand All')?></a>
                <a href="javascript:void(0)" class="button ns-collapse-all"><?php ___e('Collapse All')?></a>
            </div>
        </div>
        <div class="nw-table-content pd">
        	<ol class="sortable">
                <?php foreach($items as $item):?>
                    <li id="tree_<?php e($item[$ws_model]['id'])?>" tree_parent_id="<?php e($item[$ws_model]['parent_id'])?>" class="mjs-nestedSortable-no-<?php e($item[$ws_model]['extra_1'] == '1' ? 'thisnesting' : ($item[$ws_model]['extra_1'] == '3' ? 'nesting' : ''))?>">
                        <div class="cl <?php e($item[$ws_model]['extra_1'] == '1' ? 'cl_head' : null)?>">
                            <span class="disclose fl"></span>
                            <span class="<?php e($item[$ws_model]['extra_1'] == '1' ? 'dismenu' : 'dismove')?> fl"></span>
                            <span class="fl"><?php e($item[$ws_model]['title'])?> <?php if($item[$ws_model]['extra_1'] == '1') ws_e_code($item[$ws_model]['code'])?></span>
                            <span class="disblock"><?php echo $this->Html->link('', array('action' => 'delete', $item[$ws_model]['id']), array('class' => 'ico ico_del', 'title' => ___('Delete'), 'confirm' => ___('Confirm your action.'))); ?></span>
                            <span class="disblock"><?php echo $this->Html->link('', array('action' => ($item[$ws_model]['extra_1'] == '1' ? 'edit_menu' : ($item[$ws_model]['extra_1'] == '2' ? 'edit_page' : ($item[$ws_model]['extra_1'] == '3' ? 'edit_set' : ($item[$ws_model]['extra_1'] == '5' ? 'edit_list' : 'edit')))), $item['ObjItemTree']['id']), array('class' => 'ico ico_edit', 'title' => ___('Edit'))); ?></span>
                            <span class="disblock"><?php echo $this->Html->link('', array('action' => 'status', $item[$ws_model]['id']), array('class' => 'ajx_toggle ico ico_visible' . ($item[$ws_model]['status'] == '1' ? '' : ' off'), 'title' => ___('Show/Hide'))); ?></span>
                            <span class="dissep"></span>
                            <span class="disblock"><input type="checkbox" name="data[item][]" value="<?php e($item[$ws_model]['id'])?>" /></span>
                            <?php if($item[$ws_model]['extra_1'] != '1'):?>
                                <span class="dissep"></span>
                                <span class="disblock"><a target="_blank" href="<?php e($item[$ws_model]['extra_1'] == '2' ? ws_url("/pages/{$item[$ws_model]['id']}{cms_link.ObjItemTree.{$item[$ws_model]['id']}}") : ($item[$ws_model]['extra_1'] == '3' ? 'javascript:void(0)' : ws_url($item[$ws_model]['data']['url'])))?>" class="ico ico_<?php e($item[$ws_model]['extra_1'] == '2' ? 'page' : ($item[$ws_model]['extra_1'] == '3' ? 'menu' : 'url'))?>"></a></span>
                            <?php endif;?>
                            <?php if($item[$ws_model]['extra_1'] == '5'):?>
                            <span class="dissep"></span>
                            <span class="disblock"><a href="/admin/base/list?scopefield=<?php e($item[$ws_model]['id'])?>&tb=1" class="ico ico_menu"></a></span>
                            <?php endif;?>
                            <span class="dissep"></span>
                            <span class="disblock"><?php echo $this->element('/admin/item_thumb', array('item' => $item, 'ws_model' => $ws_model))?></span>
                        </div>
                    </li>
                <?php endforeach;?>
        	</ol>
        </div>
        <div class="nw-table-footer">
            <div class="fl">
                <select class="button-select" name="data[table-action]">
                    <option><?php ___e('Choose an action')?>...</option>
                    <option value="show"><?php ___e('Show')?></option>
                    <option value="hide"><?php ___e('Hide')?></option>
                    <option value="remove"><?php ___e('Remove')?></option>
                </select>
                <input type="submit" value="<?php ___e('Apply to selected')?>" class="button">
            </div>
            <div class="fr">
                <input onclick="$.post('<?php echo $this->Html->url(array('action' => 'table_structure'))?>', {'data[tree-structure]' : serialize($('.sortable').nestedSortable('toArray', {startDepthCount: 0}))});" type="button" value="<?php ___e('Save Structure')?>" class="button primary">
            </div>
        </div>
        </form>
    </div>
</div>

<div class="clear"></div>
