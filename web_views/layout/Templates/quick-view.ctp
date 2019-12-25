<div class="product-cart">
    <a class="cart_button " href="/shop/basket/add/<?php e($item['ObjItemList']['id'])?>/0/1" title="<?php ___e('Add to cart')?>" >
    <i class="fa fa-shopping-cart"></i>
    </a>
</div>
<div class="button-container">
    <a class="add_to_compare" title="<?php ___e('Add to compare')?>" href="#" onclick="geteval('/users/collections/catalog_compare/<?php e($item['ObjItemList']['id'])?>/<?php e($item['ObjItemList']['base_id'])?>'); return false;">
    <i class="fa fa-list-ul"></i>
    </a>
    <a class="addToWishlist wishlistProd_2" title="<?php ___e('Add to wishlist')?>" href="#" onclick="geteval('/users/collections/catalog_wish/<?php e($item['ObjItemList']['id'])?>'); return false;">
    <i class="fa fa-heart"></i>
    </a>
    <!--
    <a class="quick-view" href="/sp_agood/en/electronics/2-blouse.html" title="Quick view" data-rel="/sp_agood/en/electronics/2-blouse.html">
    <i class="fa fa-search"></i>
    </a>
    -->
 </div>