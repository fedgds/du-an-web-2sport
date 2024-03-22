<main class="container">
    <?php include "boxleft.php" ?>
    <article>
        <div class="add-product">
            <h1>THÊM MỚI SẢN PHẨM</h1>
            <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
                <div class="form-add">
                    <div class="left">
                        <label for="">TÊN SẢN PHẨM</label><br>
                        <input type="text" name="namesp" placeholder="Nhập tên sản phẩm"><br>
                        <br>
                        <label for="">DANH MỤC</label><br>
                        <select name="iddm" id="category">
                            <?php 
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<option value="'.$id.'">'.$name.'</option>';
                                }
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
                                <label for="fileInput5" class="main-file-input"><i class="fa-solid fa-upload"></i>Upload ảnh</label>
                                <input type="file" name="image" id="fileInput5" style="display: none;">
                            </div>
                            <div class="textarea-sp">
                                <label for="">MÔ TẢ</label><br>
                                <textarea name="des" id="des" cols="50" rows="7" placeholder="Nhập mô tả"></textarea>
                            </div>
                    </div>
                </div>
                <div class="variant-wp">
                    <label for="">SẢN PHẨM BIẾN THỂ</label><br>
                    <hr>
                    <div id="container">
                    </div>
                    <button id="btn-variant" type="button">
                        <i class="fa-solid fa-circle-plus"></i>
                    </button>
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
                <input type="submit" class="submit" value="THÊM SẢN PHẨM" name="addProduct">
                <input type="reset" class="reset" value="NHẬP LẠI">
            </form>
        </div>
    </article>
</main>
<script>
    //thêm biến thể sản phẩm
    var addButton = document.getElementById("btn-variant");
    var container = document.getElementById("container");

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

    // Hàm lưu trạng thái của các phần tử vào Local Storage
    function saveState() {
    var elements = container.innerHTML;
    localStorage.setItem("elements", elements);
    }

    // Hàm khôi phục trạng thái các phần tử từ Local Storage
    function restoreState() {
    var savedElements = localStorage.getItem("elements");
    if (savedElements) {
        container.innerHTML = savedElements;
        // Gắn lại sự kiện xóa cho các phần tử đã được khôi phục
        var deleteButtons = document.querySelectorAll("#container button");
        for (var i = 0; i < deleteButtons.length; i++) {
        deleteButtons[i].addEventListener("click", function() {
            container.removeChild(this.parentNode);
            saveState();
        });
        }
    }
    }

    // Gọi hàm khôi phục trạng thái khi trang được load lại
    restoreState();

</script>