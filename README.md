# aht-php-lesson-12

## Chức năng

- Hiển thị danh sách sản phẩm
- Tạo sản phẩm mới
- Cập nhật thông tin sản phẩm
- Xoá một sản phẩm
- Xem chi tiết một sản phẩm
- Tìm kiếm sản phẩm theo tên

## Thuộc tính

- id
- tên sản phẩm
- giá sản phẩm
- mô tả của sản phẩm
- nhà sản xuất

## MVC

### Model

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

### Controller

- ProductController
  - getProductList
  - createProduct
  - updateProduct
  - deleteProduct
  - getProduct
  - searchProduct

### View

- productList
- createProduct
- updateProduct
- deleteProduct
- viewProduct
