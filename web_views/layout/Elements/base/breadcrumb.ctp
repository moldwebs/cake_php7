<?php if(!empty($cms['breadcrumbs'])):?>
<div id="breadcrumb_wrapper" class="">
   <div class="container">
      <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12 clearfix">
            <section class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">
               <ul itemprop="breadcrumb">
                  <li typeof="v:Breadcrumb"><a class="home" href="/"  rel="v:url" property="v:title"><?php ___e('Home')?></a></li>
                    <?php foreach($cms['breadcrumbs'] as $key => $val):?>
                      <li class="navigation-pipe">&gt;</li>
                      <li typeof="v:Breadcrumb" class="navigation_page"><a href="<?php e($key)?>"><?php et($val, 100)?></a></li>
                    <?php endforeach;?>
               </ul>
            </section>
         </div>
      </div>
   </div>
</div>
<?php endif;?>