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
                <td><img style="width: 70px;" src="{{asset('backend/asset/image/ao-thun-Hoa-Tiet.jpg')}}" alt=""></td>
                <td>T-Shirt Cotton 220GSM</td>
                <td>120,000</td>
                <td>60,000</td>
                <td>2024-06-23</td>
                <td>
                    <a class="edit-class" href="">Sửa</a>
                    |
                    <a class="delete-class" href="">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td><img style="width: 70px;" src="{{asset('backend/asset/image/AoThunTayNganPhoiDay.webp')}}" alt="">
                </td>
                <td>T-Shirt Cotton 220GSM</td>
                <td>120,000</td>
                <td>60,000</td>
                <td>2024-06-23</td>
                <td>
                    <a class="edit-class" href="">Sửa</a>
                    |
                    <a class="delete-class" href="">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td><img style="width: 70px;" src="{{asset('backend/asset/image/AoThunKhongCo.jpg')}}" alt=""></td>
                <td>T-Shirt Cotton 220GSM</td>
                <td>120,000</td>
                <td>60,000</td>
                <td>2024-06-23</td>
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