<h2>Xem thông tin bài đăng</h2>
<form method="post" action="./index.php?page=update">
    <input type="hidden" name="id" value="<?php echo $post["id"]; ?>" />
    <div class="form-group">
        <label><strong>Tên: </strong><?php echo $post["title"]; ?></label>
    </div>
    <div class="form-group">
        <label><strong>Tóm tắt: </strong><?php echo $post["teaser"]; ?></label>
    </div>
    <div class="form-group">
        <label><strong>Nội dung: </strong><?php echo $post["content"]; ?></label>
    </div>
    <div class="form-group">
        <label><strong>Ngày: </strong><?php echo $post["created"]; ?></label>
    </div>
</form>