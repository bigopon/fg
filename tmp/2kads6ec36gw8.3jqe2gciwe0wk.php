<script>var pictures = <?php echo $pictureArray; ?>;</script>
<section id="menu" data-id="<?php echo $cafeId; ?>">
    <nav id="menuBar">
        <ul>
            <?php foreach (($categories?:array()) as $category): ?>
                <li class="menuItem" data-id="<?php echo $category['categoryId']; ?>"><span><?php echo $category['categoryName']; ?></span></li>
            <?php endforeach; ?>
        </ul>
    </nav>
    <div id="carouselContainer">
        <div class="carousel">
        </div>
    </div>
    <div id="menuListContainer">
        <ul id="menuList">
            <?php foreach (($items?:array()) as $item): ?>
                <li class="item">
                    <span class="itemHeader"><?php echo $item['itemName']; ?>
                        <?php if ($item['isPopular']): ?><i class="fa fa-star" title="Recommended Dish"></i><?php endif; ?>
                        <?php if ($item['isVegetarian']): ?><img src="ui/img/icons/vegetarian.png" title="Vegetarian/Optional"/><?php endif; ?>
                    </span>
                    <span class="itemDescription"><?php echo $item['description']; ?></span>
                    <span class="itemPrice">$<?php echo $item['price']; ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

</section>
