﻿# aht-php-lesson-12

## Quản lý sản phẩm

### Yêu cầu

#### Chức năng

- Hiển thị danh sách sản phẩm
- Tạo sản phẩm mới
- Cập nhật thông tin sản phẩm
- Xoá một sản phẩm
- Xem chi tiết một sản phẩm
- Tìm kiếm sản phẩm theo tên

#### Thuộc tính

- id
- tên sản phẩm
- giá sản phẩm
- mô tả của sản phẩm
- nhà sản xuất

### Database

- id
- name
- price
- description
- provider

### MVC

#### Model

- DBConnection
- Product
  - id
  - tên sản phẩm
  - giá sản phẩm
  - mô tả của sản phẩm
  - nhà sản xuất
- ProductDB
  - getProductList
  - createProduct
  - updateProduct
  - deleteProduct
  - getProduct
  - searchProduct

#### Controller

- ProductController
  - getProductList
  - createProduct
  - updateProduct
  - deleteProduct
  - getProduct
  - searchProduct

#### View

- productList
- createProduct
- updateProduct
- deleteProduct
- viewProduct

## Tạo blog theo MVC

### Yêu cầu

#### Tính năng

- Viết một bài blog mới
- Xem danh sách các bài blog
- Chỉnh sửa một bài blog
- Xoá một bài blog
- Xem nội dung của một bài blog

#### Thành phần:

- Title: Tiêu đề
- Teaser: Phần giới thiệu
- Content: Nội dung
- Created: Ngày tạo

### MVC

#### Model

- Lớp Post: Đại diện cho một bài blog
- Lớp PostDB: Chứa các phương thức để làm việc với CSDL

#### View

- File list.php: Hiển thị danh sách các bài blog, bao gồm: Tiêu đề, ngày tạo và phần giới thiệu
- File add.php: Chứa form thêm một bài blog mới
- File edit.php: Chứa form chỉnh sửa một bài blog mới
- File delete.php: Chứa form để xoá một bài blog mới
- File view.php: Hiển thị nội dung chi tiết của một bài blog

#### Controller

- Lớp PostController: Chứa các phương thức để xử lý các thao tác của người dùng

## Notes

### 27/11

- Không cần insert dữ liệu vào tất cả các cột trong bảng
- học jquery để bắt sự kiện
- học ajax để làm API đơn giản
