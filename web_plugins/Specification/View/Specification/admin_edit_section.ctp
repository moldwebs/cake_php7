<div class="grid_16">
    <div class="nw-table">
        <?php echo $this->Form->create('Specification', array('type' => 'file', 'class' => 'ajx_validate'));?>
        <?php echo $this->Form->input('extra_1', array('value' => '1', 'type' => 'hidden'));?>
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
                    <li><a href="#node-3"><span><?php echo ___('Settings')?></span></a></li>
                </ul>
                <div id="node-1">
                    <div class="n2 cl">
                    <?php echo $this->Layout->__input('title', array('label' => ___('Title'), 'class' => 'req'));?>
                    <?php if(!empty($bases)) echo $this->Form->input('Relation.base_id', array('options' => $bases, 'label' => ___('Related Category'), 'multiple' => 'multiple', 'class' => 'multiselect'));?>
                    </div>
                </div>
                <div id="node-3">
                    <?php echo $this->Form->input('status', array('label' => ___('Status'), 'options' => ws_vh()));?>
                    <?php echo $this->Form->input('created', array('label' => ___('Date')));?>
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
