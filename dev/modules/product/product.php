<div class="mod-product <?php if (isset($args["modifier"])) { echo 'mod-product--' . $args["modifier"]; } ?>">
    <div class="m-wrapper-img">
        <?php
            if (isset($args["modifier"]) && $args["modifier"] == "unavailable") {
                ?>
                <img class="m-img m-img--side" src="/assets/img/product-unavailable.jpg" alt="#<?= $args["id"]; ?> - <?= $args["description"]; ?> (<?= $args["price"] . $args["currency"]; ?>)">
                <?php
            }
            else {
                ?>
                <img class="m-img m-img--front js-img-front" src="/assets/img/<?= $args["img_front"]; ?>" alt="#<?= $args["id"]; ?> - <?= $args["description"]; ?> (<?= $args["price"] . $args["currency"]; ?>)">
                <img class="m-img m-img--side" src="/assets/img/<?= $args["img_side"]; ?>" alt="#<?= $args["id"]; ?> - <?= $args["description"]; ?> (<?= $args["price"] . $args["currency"]; ?>)">
                <?php
            }
        ?>
    </div>
    <div class="m-info">
        <h3 class="m-name"><span class="m-id">#<?= $args["id"]; ?></span> - <?= $args["description"]; ?></h3>
        <strong class="m-price"><?= $args["price"]; ?><span class="m-currency"><?= $args["currency"]; ?></span></strong>
    </div>
</div>
