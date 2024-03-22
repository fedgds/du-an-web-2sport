<?php
include '../model/search.php';
include '../model/pdo.php';

$keyw = $_GET['keyw'];
$orderBy = isset($_GET['orderby']) ? $_GET['orderby'] : null;
$listSearch = search_product($keyw, $orderBy);

// Hiển thị lại kết quả tìm kiếm dưới dạng HTML
foreach ($listSearch as $sp){
    extract($sp);
    // ... (phần hiển thị sản phẩm) ...
?>
    <div class="product-item">
                <div class="detail">
                    <a href="" class="detail-img">
                        <img src="assets/img/<?= $img ?>" alt="">
                    </a>
                    <a href="index.php?act=detail&id=<?= $id ?>" class="detail-show">CHI TIẾT</a>
                </div>
                <div class="product-describe">
                    <a href=""><p><?= $name ?></p></a>
                    <span class="price-new"><?= number_format($discount) ?>đ</span>
                    <span class="price-origin">
                        <del><?= number_format($price) ?>đ</del>
                    </span>
                </div>
                <div class="buy-cart">
                    <form action="index.php?act=addcart" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_variant" value="<?= $idVariant ?>">
                        <input type="hidden" name="ten_sp" value="<?= $name ?>">
                        <input type="hidden" name="price" value="<?= $discount ?>">
                        <input type="hidden" name="imgsp" value="<?= $img ?>">
                        <!-- <input type="hidden" name="colorsp" value="<?= $color ?>">
                        <input type="hidden" name="sizesp" value="<?= $size ?>"> -->
                        <button type="submit" class="addcart-product"><i class="fa-solid fa-cart-plus fa-shake"></i></button>
                    </form>
                    <a href="" class="buy-product"><button>MUA HÀNG</button></a>
                </div>
            </div>
            <?php } ?>

