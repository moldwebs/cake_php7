<?php echo $this->Form->create(false, array('type' => 'file', 'class' => 'form-horizontal '));?>
    <div style="width: 100%; min-width: 500px;" class="col-sm-12">
        <div class="box-border">
            <h3 class="product-title"><?php ___e('Buy in credit')?></h3>

            <div class="form-group required">
              <label class="col-sm-4 control-label" for="input-shipping-city"><?php ___e('Amount')?> (<?php ___e('MDL')?>)</label>
              <div class="col-sm-7">
                <input type="text" name="data[amount]" value="<?php e($credit['amount'])?>" class="form-control req" required="required">
              </div>
            </div>

            <div class="form-group required">
              <label class="col-sm-4 control-label" for="input-shipping-city"><?php ___e('Perioada')?> (<?php ___e('Luni')?>)</label>
              <div class="col-sm-7">
                <input type="number" name="data[months]" value="<?php e($credit['months'])?>" class="form-control req" required="required">
              </div>
            </div>

            <div class="form-group required">
              <label class="col-sm-4 control-label" for="input-shipping-city"><?php ___e('Rata lunara')?> (<?php ___e('MDL')?>)</label>
              <div class="col-sm-7">
                <input readonly="readonly" type="text" name="data[rate]" value="" class="form-control req" required="required">
              </div>
            </div>

            <div class="buttons">
                <div class="pull-right">
                    <input type="submit" value="<?php ___e('Submit')?>" id="button-shipping-method" class="btn btn-primary" />
                </div>
            </div>

        </div>
    </div>
</form>


<script type="text/javascript">
      $('[name="data[amount]"],[name="data[months]"]').change(function(event) {
        $.get('/shop/checkout/credit_amount?code=<?php e($_GET['code'])?>&item_id=<?php e($credit['item_id'])?>&payment=credit_simple&amount=' + $('[name="data[amount]"]').val() + '&months=' + $('[name="data[months]"]').val(), function(result){
          $('[name="data[rate]"]').val(result);
        });
      });
      $('[name="data[amount]"]').trigger('change');
</script>