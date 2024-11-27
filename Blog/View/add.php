<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Thêm bài đăng mới</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label>Tên</label>
                    <input type="text" class="form-control" name="title" placeholder="Nhập tên" required>
                </div>
                <div class="form-group">
                    <label>Tóm tắt</label>
                    <input type="text" class="form-control" name="teaser" placeholder="Nhập giá" required>
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <textarea type="text" class="form-control" name="content" placeholder="Mô tả" required></textarea>
                </div>
                <div class="form-group">
                    <label>Ngày tạo</label>
                    <input type="date" class="form-control" name="created" placeholder="Nhà cung cấp" required>
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>