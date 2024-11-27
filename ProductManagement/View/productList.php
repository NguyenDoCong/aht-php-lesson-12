<div>
    <h2>Danh sách sản phẩm</h2>
    <a href="./index.php?page=add">Thêm mới</a>
</div>
<div>
    <form action="" method="get">
        <input type="hidden" name="page" value="todos">
        <input type="text" id="search" name="search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
        <input type="submit" value="Search">
    </form>
    <br>
</div>
<table class="table">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Giá</th>
            <th>Mô tả</th>
            <th>Nhà cung cấp</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $key => $product): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $product->name ?></td>
                <td><?php echo $product->price ?></td>
                <td><?php echo $product->description ?></td>
                <td><?php echo $product->provider ?></td>
                <td> <a href="./index.php?page=view&id=<?php echo $product->id; ?>" class="btn btn-sm">View</a></td>
                <td> <a href="./index.php?page=delete&id=<?php echo $product->id; ?>" class="btn btn-warning btn-sm">Delete</a></td>
                <td> <a href="./index.php?page=update&id=<?php echo $product->id; ?>" class="btn btn-sm">Update</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>