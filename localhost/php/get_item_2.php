<?php
       $single = get_single_random();
       foreach ($single as $singles): ?>
      <div class="single-product">
      <div class="pro-img">
            <a href="product.php?id=<?php echo $singles["id"]?>">
                <img class="primary-img" src="<?php echo $singles["image"] ?>" alt="single-product">
            </a>
        </div>
        <div class="pro-content">
            <h4><a href="product.php?id=<?php echo $singles["id"]?>"><?php echo $singles["name"] ?></a></h4>
            <p><span class="price"><?php echo $singles["cost"] ?></span></p>
        </div>
    </div>
<?php endforeach; ?>