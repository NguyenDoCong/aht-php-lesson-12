<h2>Cập nhật thông tin sản phẩm</h2>
<form method="post" action="./index.php?page=update">
    <input type="hidden" name="id" value="<?php echo $product["id"]; ?>" />
    <div class="form-group">
        <label>Tên sản phẩm: <?php echo $product["name"]; ?></label>
    </div>
    <div class="form-group">
        <label>Giá: <?php echo $product["price"]; ?></label>
    </div>
    <div class="form-group">
        <label>Mô tả: <?php echo $product["description"]; ?></label>
    </div>
    <div class="form-group">
        <label>Nhà cung cấp: <?php echo $product["provider"]; ?></label>
    </div>
</form>