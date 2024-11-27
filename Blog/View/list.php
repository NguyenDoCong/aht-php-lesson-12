<div>
    <h2>Danh sách bài đăng</h2>
    <a href="./index.php?page=add">Thêm mới</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tiêu đề</th>
            <th>Giới thiệu</th>
            <th>Nội dung</th>
            <th>Ngày tạo</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($posts as $key => $post): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $post->title ?></td>
                <td><?php echo $post->teaser ?></td>
                <td><?php echo $post->content ?></td>
                <td><?php echo $post->created ?></td>
                <td> <a href="./index.php?page=view&id=<?php echo $post->id; ?>" class="btn btn-sm">View</a></td>
                <td> <a href="./index.php?page=delete&id=<?php echo $post->id; ?>" class="btn btn-warning btn-sm">Delete</a></td>
                <td> <a href="./index.php?page=edit&id=<?php echo $post->id; ?>" class="btn btn-sm">Update</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>