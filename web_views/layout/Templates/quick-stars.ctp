<div class="rating_box" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
  <meta itemprop="ratingValue" content="<?php e($item['RelationValue']['rating_rate'] > 0 ? $item['RelationValue']['rating_rate'] : '0')?>" />
  <span class="rating_box_inner"> 
    <?php for($i=1;$i<=5;$i++):?>
        <i class="icon-star-1 icon-small <?php e($i <= $item['RelationValue']['rating_rate'] ? 'light' : ($i - 0.5 <= $item['RelationValue']['rating_rate'] ? 'light' : ''))?>"></i>
    <?php endfor;?>
  </span>
</div>