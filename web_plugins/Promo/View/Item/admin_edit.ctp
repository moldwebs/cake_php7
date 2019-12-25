<div class="grid_16">
    <div class="nw-table">
        <?php echo $this->Form->create('ObjItemTree', array('type' => 'file', 'class' => 'ajx_validate'));?>
        <div class="nw-table-title">
            <div class="fl"><?php echo $page_title?></div>
            <div class="fr">
                <?php echo $this->element('/admin/edit_langs')?>
            </div>
        </div>
        <div class="nw-table-content">
            <div class="tabs-left">
                <ul>
                    <li><a href="#node-1"><span><?php echo ___('Content')?></span></a></li>
                    <li><a href="#node-3"><span><?php echo ___('Attachments')?></span></a></li>
                    <li><a href="#node-2"><span><?php echo ___('Settings')?></span></a></li>
                </ul>
                <div id="node-1">
                    <?php echo $this->Form->input('parent_id', array('options' => $panels, 'label' => ___('Promo'), 'empty' => ___(' --- None --- ')));?>
                    <div class="n2 cl">
                        <?php echo $this->Layout->__input('title', array('label' => ___('Title'), 'class' => 'req'));?>
                        <?php echo $this->Form->input('code', array('label' => ___('Code')));?>
                    </div>
                    <?php echo $this->Layout->__input('url', array('label' => ___('Url')));?>
                    <?php echo $this->Layout->__input('body', array('label' => ___('Content'), 'type' => 'textarea', 'class' => 'redactor'));?>
                </div>
                <div id="node-3">
                    <?php echo $this->Layout->__images('attachments', array('label' => false));?>
                </div>
                <div id="node-2">
                    <?php echo $this->Form->input('RelationEventExpire.status_0', array('label' => ___('Expire'), 'class' => 'ui_date'));?>
                    <?php echo $this->Form->input('status', array('label' => ___('Status'), 'options' => ws_vh()));?>
                </div>
            </div>
        </div>
        <div class="nw-table-footer">
            <?php echo $this->Layout->form_save();?>
        </div>
        <?php echo $this->Form->end();?>
    </div>
</div>

<div class="clear"></div>
