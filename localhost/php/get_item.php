<?php
    $single = get_single_all();
    foreach ($single as $singles): ?>
    <div id="<?php echo $singles["id"] ?>" class="single-product">
        <div class="pro-img">
                <a href="product.php?id=<?php echo $singles["id"]?>">
                    <img class="primary-img" src="<?php echo $singles["image"] ?>" alt="single-product">
                </a>
            </div>
            <div class="pro-content">
                <h4><a href="product.php?id=<?php echo $singles["id"]?>"><?php echo $singles["name"] ?></a></h4>
                <p><span class="price"><?php echo $singles["cost"] ?></span></p>
            <div class="pro-actions">
                <div class="actions-secondary">
                    <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Приобрести</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>