@extends('admin.main')
@section('content')
<div class="admin-content-main-content-product-list">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Ảnh</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá Bán</th>
                <th>Giá Giảm</th>
                <th>Ngày Đăng</th>
                <th>Tùy Chỉnh</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><img style="width: 70px;" src="{{asset('backend/asset/image/product1.jpg')}}" alt=""></td>
                <td>Áo Phao Nam Siêu Nhẹ</td>
                <td>550,000</td>
                <td>530,000</td>
                <td>2024-08-01</td>
                <td>
                    <a class="edit-class" href="">Sửa</a>
                    |
                    <a class="delete-class" href="">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td><img style="width: 70px;" src="{{asset('backend/asset/image/product2.jpg')}}" alt="">
                </td>
                <td>Áo sơ mi Tencel tay lỡ</td>
                <td>800,000</td>
                <td>550,000</td>
                <td>2024-08-02</td>
                <td>
                    <a class="edit-class" href="">Sửa</a>
                    |
                    <a class="delete-class" href="">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td><img style="width: 70px;" src="{{asset('backend/asset/image/product3.jpg')}}" alt=""></td>
                <td>Áo phao cổ lông trắng</td>
                <td>620,000</td>
                <td>590,000</td>
                <td>2024-08-03</td>
                <td>
                    <a class="edit-class" href="">Sửa</a>
                    |
                    <a class="delete-class" href="">Xóa</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection