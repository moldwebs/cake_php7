<?php if(!empty($sys_currency) && count($sys_currency) > 1):?>
   <div id="currencies-block-top">
         <div class="current">
            <i class="fa fa-money"></i> <span><?php e($cms['currency']['currency'])?></span>			
         </div>
         <ul id="first-currencies" class="currencies_ul toogle_content">
            <?php foreach($sys_currency as $key => $val):?>
            <li>
               <a href="/system/toggle/currency/<?php e($val['ModCurrency']['currency'])?>"><?php e($val['ModCurrency']['currency'])?></a>
            </li>
            <?php endforeach;?>
         </ul>
   </div>
<?php endif;?>