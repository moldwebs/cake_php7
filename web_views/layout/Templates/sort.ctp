<ul class="display">
 <li class="grid <?php e($tpltoggle['catalog_view'] == 'grid' || empty($tpltoggle['catalog_view']) ? 'selected' : null)?>"><a rel="nofollow" href="/system/toggle/catalog_view/grid" title="Grid"></a></li>
 <li class="list <?php e($tpltoggle['catalog_view'] == 'list' ? 'selected' : null)?>"><a rel="nofollow" href="/system/toggle/catalog_view/list" title="List"></a></li>
</ul>
<form id="productsSortForm" action="" class="productsSortForm">
 <div class="select selector1">
    <label for="selectProductSort"><?php ___e('Sort by')?></label> 
     <select style="display: inline-block; width: inherit;" id="_selectProductSort" class="selectProductSort form-control " onchange="window.location = this.value">
        <option <?php if($tpltoggle['catalog_order'] == 'created_desc' || empty($tpltoggle['catalog_order'])) echo 'selected="selected"'?> value="/system/toggle/catalog_order/created_desc"><?php ___e('--')?></option>
        <option <?php if($tpltoggle['catalog_order'] == 'price_asc') echo 'selected="selected"'?> value="/system/toggle/catalog_order/price_asc"><?php ___e('Price: Lowest first')?></option>
        <option <?php if($tpltoggle['catalog_order'] == 'price_desc') echo 'selected="selected"'?> value="/system/toggle/catalog_order/price_desc"><?php ___e('Price: Highest first')?></option>
        <option <?php if($tpltoggle['catalog_order'] == 'title_asc') echo 'selected="selected"'?> value="/system/toggle/catalog_order/title_asc"><?php ___e('Product Name: A to Z')?></option>
        <option <?php if($tpltoggle['catalog_order'] == 'title_desc') echo 'selected="selected"'?> value="/system/toggle/catalog_order/title_desc"><?php ___e('Product Name: Z to A')?></option>
     </select>
 </div>
</form>
<form action="" method="get" class="nbrItemPage hidden-xs">
 <div class="selector1">
    <label for="nb_item"> <?php ___e('Show')?> </label>
     <select style="display: inline-block; width: inherit;" name="n" id="_nb_item" class="form-control " onchange="window.location = this.value">
        <option <?php if($tpltoggle['catalog_limit'] == '12' || empty($tpltoggle['catalog_limit'])) echo 'selected="selected"'?> value="/system/toggle/catalog_limit/12">12</option>
        <option <?php if($tpltoggle['catalog_limit'] == '28' || empty($tpltoggle['catalog_limit'])) echo 'selected="selected"'?> value="/system/toggle/catalog_limit/28">28</option>
        <option <?php if($tpltoggle['catalog_limit'] == '56' || empty($tpltoggle['catalog_limit'])) echo 'selected="selected"'?> value="/system/toggle/catalog_limit/56">56</option>
     </select>
 </div>
</form>
<script>
    $("select.form-control,input[type='radio'],input[type='checkbox']").not(".not_uniform").uniform();
</script>