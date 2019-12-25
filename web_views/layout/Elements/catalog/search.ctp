<?php //if(empty($block['data'])) $block['data'] = $tpl->get('/catalog/base/get_tree')?>
<form id="searchbox" method="get" action="/catalog" >
    <div class="searchbox_inner">
       <input autocomplete="off" type="text" name="fltr_lk__title" value="<?php e($_GET['fltr_lk__title'])?>" placeholder="<?php ___e('Product search')?>" class="search_query form-control ui_autocomplete_catalog" rel_url="/catalog/item/get_autocomplete" />
       <a href="javascript:$('#searchbox').submit();" title="<?php ___e('Search')?>" rel="nofollow" class="submit_searchbox icon_wrap"><i class="icon-search-1 icon-0x"></i><span class="icon_text"><?php ___e('Search')?></span></a>
    </div>
 </form>