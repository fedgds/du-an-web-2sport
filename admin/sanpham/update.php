<?php
$i = 0;
if (is_array($join_product_iddm)) {
    // extract($join_product_iddm);
}

?>
<main class="container">
    <?php include "boxleft.php" ?>
    <article>
        <div class="add-product">
            <h1>SỬA SẢN PHẨM</h1>
            <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">

                <div class="form-add">
                    <div class="left">
                        <input type="hidden" name="id" value="<?= $sanpham[0]['idProduct'] ?>">
                        <label for="">TÊN SẢN PHẨM</label><br>
                        <input type="text" name="namesp" placeholder="Nhập tên sản phẩm" value="<?= $sanpham[0]['name'] ?>"><br>
                        <br>
                        <label for="">DANH MỤC</label><br>
                        <select name="iddm" id="category">
                        <?php 
                            foreach ($selectdm as $danhmuc) {
                                ?>
                                <option value="<?= $danhmuc['id'] ?>" <?= ($join_product_iddm[0]['idCategory']==$danhmuc['id']) ?'selected':""?> ><?= $danhmuc['name'] ?></option>
                            <?php }
                        ?>
                        </select><br><br>
                        <label for="">TRẠNG THÁI</label><br>
                        <select name="status" id="status">
                            <option value="1">Hiển thị</option>
                            <option value="0">Ẩn</option>
                        </select><br><br>
                    </div>
                    <div class="right">
                            <div class="main-image">
                                <label for="fileInput5" class="main-file-input">
                                    <i class="fa-solid fa-upload"></i>
                                    <img src="../assets/img/<?= $sanpham[0]['img'] ?>" width="100%" alt="">
                                </label>
                                <input type="file" name="image" id="fileInput5" >
                            </div>
                            <div class="textarea-sp">
                                <label for="">MÔ TẢ</label><br>
                                <textarea name="des" id="des" cols="50" rows="7" placeholder="Nhập mô tả"><?= $sanpham[0]['des']?></textarea>
                            </div>
                    </div>
                </div>
                <div class="variant-wp">
                    <label for="">SẢN PHẨM BIẾN THỂ</label><br>
                    <hr>
                    <div id="container">
                        <?php foreach ($count as $row){
                            
                        ?>
                        <div class="variant-update">
                            <div class="variant-up">
                                <label for="">Màu</label></br>
                                <input type="text" list="color" name="color1[]" placeholder="Nhập màu" value="<?= $sanpham[$i]['color'] ?>">
                            </div>
                            <div class="variant-up size">
                                <label for="">Kích cỡ</label></br>
                                <input type="text" list="size" name="size1[]" placeholder="Nhập size" value="<?= $sanpham[$i]['size'] ?>">
                            </div>
                            <div class="variant-up">
                                <label for="">Giá gốc</label></br>
                                <input type="number" name="price1[]" placeholder="Nhập giá gốc" value="<?= $sanpham[$i]['price'] ?>">
                            </div>
                            <div class="variant-up">
                                <label for="">Giá khuyến mãi</label></br>
                                <input type="number" name="priceSale1[]" placeholder="Nhập giá sale" value="<?= $sanpham[$i]['discount'] ?>">
                            </div>
                            <div class="variant-up">
                                <label for="">Số lượng</label></br>
                                <input type="number" name="quantity1[]" min="1" value="<?= $sanpham[$i]['quantity'] ?>" placeholder="Nhập số lượng" >
                            </div>
                            <a style="margin-top: 18px;" href="index.php?act=deleteVariant&id=<?= $sanpham[$i]['idVariant'] ?>"><i class="fa-solid fa-trash"></i></a>
                        </div>
                        <?php $i++; } ?>
                        <div id="container-update">
                        </div>
                        <button id="btn-variant" type="button">
                            <i class="fa-solid fa-circle-plus"></i>
                        </button>
                    </div>
                    <datalist id="size">
                        <option value="39">
                        <option value="40">
                        <option value="41">
                        <option value="42">
                        <option value="43">
                        <option value="M">
                        <option value="S">
                        <option value="L">
                        <option value="XL">
                        <option value="XXL">
                    </datalist>
                    <datalist id="color">
                        <option value="blue">
                        <option value="green">
                        <option value="red">
                        <option value="white">
                        <option value="yellow">
                        <option value="black">
                    </datalist>
                </div>
                <input type="submit" class="submit" value="SỬA SẢN PHẨM" name="sua">
                <input type="reset" class="reset" value="NHẬP LẠI">
            </form>
        </div>
    </article>
</main>
<script>
    //thêm biến thể sản phẩm
    var addButton = document.getElementById("btn-variant");
    var container = document.getElementById("container-update");

    // Định nghĩa hàm xử lý sự kiện khi người dùng nhấn vào nút "Thêm"
    function addElement() {
    // Tạo một phần tử HTML mới
        var newElement = document.createElement("div");
                // Thêm class "my-class" vào phần tử div
        newElement.classList.add("variant");
        // Hiển thị phần tử div trong DOM
        // document.body.appendChild(newElement);
        newElement.innerHTML = `
            <div class="variant-in">
                <label for="">Màu</label></br>
                <input type="text" list="color" name="color[]" placeholder="Nhập màu">
            </div>
            <div class="variant-in size">
                <label for="">Kích cỡ</label></br>
                <input type="text" list="size" name="size[]" placeholder="Nhập size">
            </div>
            <div class="variant-in">
                <label for="">Giá gốc</label></br>
                <input type="number" name="price[]" placeholder="Nhập giá gốc">
            </div>
            <div class="variant-in">
                <label for="">Giá khuyến mãi</label></br>
                <input type="number" name="priceSale[]" placeholder="Nhập giá sale">
            </div>
            <div class="variant-in">
                <label for="">Số lượng</label></br>
                <input type="number" name="quantity[]" min="1" value="1" placeholder="Nhập số lượng">
            </div>
        `;

        // Thêm phần tử mới vào container
        container.appendChild(newElement);

        // Tạo nút "Xóa" và gắn sự kiện xóa khi người dùng nhấn vào
        var deleteButton = document.createElement("button");
        deleteButton.innerHTML = `<i class="fa-solid fa-trash"></i>`;
        deleteButton.addEventListener("click", function() {
            container.removeChild(newElement);
            saveState();
        });

        // Thêm nút "Xóa" vào phần tử mới
        newElement.appendChild(deleteButton);

        // Lưu trạng thái của phần tử mới vào Local Storage
        saveState();
    }

    // Gắn sự kiện "click" cho nút "Thêm" và gọi hàm addElement() khi xảy ra sự kiện
    addButton.addEventListener("click", addElement);

    // Gọi hàm khôi phục trạng thái khi trang được load lại
    restoreState();

</script>