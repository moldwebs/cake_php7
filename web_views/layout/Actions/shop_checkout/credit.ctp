<?php $this->extend('layout');?>

<?php
    $installment = false;
    foreach($basket['items'] as $id => $item){
      if(!empty($item['data']['Relation']['extra_1'])) foreach(Configure::read('CMS.credit_types') as $id_type => $mnth_type){
          if(in_array($id_type, $item['data']['Relation']['extra_1'])){
              $installment = $mnth_type;
              break;
              break;
          }
      }
    }
?>

<?php if($installment && count($basket['items']) > 1):?>
  <div style="padding: 20px"><b><?php ___e('installment_basket')?></b></div>
<?php endif;?>

<?php echo $this->Form->create('Credit', array('type' => 'file', 'autocomplete' => 'off', 'class' => 'form-horizontal'));?>

<div style="padding: 20px;">

<?php if($installment && count($basket['items']) == 1):?>
<div class="form-group required">
  <label class="col-sm-2 control-label" for="input-shipping-city"><?php ___e('Amount')?> (<?php ___e('MDL')?>)</label>
  <div class="col-sm-10">
    <input readonly="readonly" type="text" name="data[amount]" value="<?php e($credit['amount'])?>" class="form-control req" required="required">
  </div>
</div>

<div class="form-group required">
  <label class="col-sm-2 control-label" for="input-shipping-city"><?php ___e('Perioada')?> (<?php ___e('Luni')?>)</label>
  <div class="col-sm-10">
    <input readonly="readonly" type="number" name="data[months]" value="<?php e($installment)?>" class="form-control req" required="required">
  </div>
</div>

<div class="form-group required">
  <label class="col-sm-2 control-label" for="input-shipping-city"><?php ___e('Rata lunara')?> (<?php ___e('MDL')?>)</label>
  <div class="col-sm-10">
    <input readonly="readonly" type="text" name="data[rate]" value="<?php e(round($credit['amount']/$installment, 0))?>" class="form-control req" required="required">
  </div>
</div>
<?php else:?>
<div class="form-group required">
  <label class="col-sm-2 control-label" for="input-shipping-city"><?php ___e('Amount')?> (<?php ___e('MDL')?>)</label>
  <div class="col-sm-10">
    <input type="text" name="data[amount]" value="<?php e($credit['amount'])?>" class="form-control req" required="required">
  </div>
</div>

<div class="form-group required">
  <label class="col-sm-2 control-label" for="input-shipping-city"><?php ___e('Perioada')?> (<?php ___e('Luni')?>)</label>
  <div class="col-sm-10">
    <input type="number" name="data[months]" value="<?php e($credit['months'])?>" class="form-control req" required="required">
  </div>
</div>

<div class="form-group required">
  <label class="col-sm-2 control-label" for="input-shipping-city"><?php ___e('Rata lunara')?> (<?php ___e('MDL')?>)</label>
  <div class="col-sm-10">
    <input readonly="readonly" type="text" name="data[rate]" value="" class="form-control req" required="required">
  </div>
</div>


<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function(event) {
      $('[name="data[amount]"],[name="data[months]"]').change(function(event) {
        $.get('/shop/checkout/credit_amount?code=<?php e($_GET['code'])?>&payment=<?php e($_GET['payment'])?>&amount=' + $('[name="data[amount]"]').val() + '&months=' + $('[name="data[months]"]').val(), function(result){
          $('[name="data[rate]"]').val(result);
        });
      });
      $('[name="data[amount]"]').trigger('change');
  });
</script>

<?php endif;?>
<div class="form-group required">
  <label class="col-sm-2 control-label" for="input-shipping-city"><?php ___e('Nume')?></label>
  <div class="col-sm-10">
    <input type="text" name="data[Nume]" value="<?php e($credit['name'])?>" class="form-control req" required="required">
  </div>
</div>

<div class="form-group required">
  <label class="col-sm-2 control-label" for="input-shipping-city"><?php ___e('Telefon')?></label>
  <div class="col-sm-10">
    <input type="text" name="data[Telefon]" value="<?php e($credit['phone'])?>" class="form-control req" required="required">
  </div>
</div>

<div class="form-group required">
  <label class="col-sm-2 control-label" for="input-shipping-city"><?php ___e('Buletin 1')?></label>
  <div class="col-sm-10">
    <input type="file" name="buletin_1" class="form-control req" required="required">
  </div>
</div>

<div class="form-group required">
  <label class="col-sm-2 control-label" for="input-shipping-city"><?php ___e('Buletin 2')?></label>
  <div class="col-sm-10">
    <input type="file" name="buletin_2" class="form-control req" required="required">
  </div>
</div>


<div class="buttons">
    <div class="pull-left"><a href="javascript:history.go(-1)" class="btn btn-default"><?php ___e('Back')?></a></div>
    <div class="pull-right">
        <input type="submit" value="<?php ___e('Next')?>" id="button-shipping-method" class="btn btn-primary" />
    </div>
</div>
</div>

</form>
