<?php $reviews = $tpl->requestAction('/'.Configure::read('Config.tid').'/review/get_full_list/' . $item['ObjItemList']['id'])?>

<?php if(!empty($reviews['items'])):?>
    <div id="review">
    <?php foreach($reviews['items'] as $_item):?>
        <table class="table table-striped table-bordered">
          <tr>
            <td style="width: 50%;"><strong><?php e($_item['ObjOptReview']['username'])?></strong></td>
            <td class="text-right"><?php e(date("d.m.Y", strtotime($_item['ObjOptReview']['created'])))?></td>
          </tr>
          <tr>
            <td colspan="2">
                <p><?php e($_item['ObjOptReview']['comment'])?></p>
                <?php foreach($_item['ObjOptReview']['data']['rating'] as $key => $val):?>
                <?php e($reviews['rating_types'][$key])?>
                    <?php for($i=1;$i<=5;$i++):?>
                        <span class="fa fa-stack"><i class="fa <?php e($i <= $val ? 'fa-star fa-stack-1x' : ($i - 0.5 <= $val ? 'fa-star fa-stack-1x' : 'fa-star-o fa-stack-1x'))?>"></i></span>
                    <?php endfor;?>
                <?php endforeach;?>
            </td>
          </tr>
        </table>
        <div class="text-right"></div>
    <?php endforeach;?>
    </div>
<?php endif;?>


<form action="/<?php e(Configure::read('Config.tid'))?>/review/add/<?php e($cms['active_item'])?>" method="POST" enctype="multipart/form-data" class="form-horizontal ajx_validate">
    <h2><?php ___e('Write a review')?></h2>
    
    <?php if(!$this->Session->check('Auth.User.id')):?>
    <div class="form-group required">
       <div class="col-sm-12">
          <label class="control-label" for="input-name"><?php ___e('Your Name')?></label>
          <input type="text" name="data[username]" value="" required="required" id="input-name" class="form-control" />
       </div>
    </div>
    <div class="form-group required">
       <div class="col-sm-12">
          <label class="control-label" for="input-name"><?php ___e('Security Code')?></label>
          <input type="text" name="data[captcha]" value="" required="required" id="input-name" class="form-control" />
          <br /><img src="/system/captcha" />
       </div>
    </div>
    <?php endif;?>
    
    <div class="form-group required">
       <div class="col-sm-12">
          <label class="control-label" for="input-review"><?php ___e('Your Review')?></label>
          <textarea name="data[comment]" rows="5" id="input-review" required="required" class="form-control"></textarea>
       </div>
    </div>
    
    <?php if(!empty($reviews['rating_types'])):?>
    <div class="form-group required">
    	<?php foreach($reviews['rating_types'] as $key => $val):?>
            <label class="control-label"><?php e($val)?></label>
            &nbsp;&nbsp;&nbsp; <?php ___e('Bad')?>&nbsp;
            <input type="radio" name="data[data][rating][<?php e($key)?>]" value="1" />
            &nbsp;
            <input type="radio" name="data[data][rating][<?php e($key)?>]" value="2" />
            &nbsp;
            <input type="radio" name="data[data][rating][<?php e($key)?>]" value="3" />
            &nbsp;
            <input type="radio" name="data[data][rating][<?php e($key)?>]" value="4" />
            &nbsp;
            <input type="radio" name="data[data][rating][<?php e($key)?>]" value="5" checked="checked" />
            &nbsp;<?php ___e('Good')?>
        <?php endforeach;?>
    </div>
    <?php endif;?>
    
    
    <div class="buttons">
       <div class="pull-right">
          <button type="submit" id="button-review" class="btn btn-primary"><?php ___e('Save')?></button>
       </div>
    </div>
</form>
