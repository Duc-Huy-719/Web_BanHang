@extends('admin.main')
@section('content')
<div class="admin-content-main-content-order-list">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Địa Chỉ</th>
                <th>Ghi Chú</th>
                <th>Chi Tiết</th>
                <th>Ngày</th>
                <th>Trạng Thái</th>
                <th>Tùy Biến</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Trần Văn Trung</td>
                <td>0934214356</td>
                <td>tvtrung100@gmail.com</td>
                <td>68, Hàm Nghi, Đà Nẵng</td>
                <td>Giao nhanh</td>
                <td>
                    <a class="edit-class" href="/admin/order_detail">Chi tiết</a>
                </td>
                <td>02/08/2024</td>
                <td><a class="confirm-order" href="">Đã xác nhận</a></td>
                <td>
                    <a class="delete-class" href="">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Nguyễn Văn Cường</td>
                <td>0912678890</td>
                <td>cuongnv123@gmail.com</td>
                <td>89, Hàm Nghi, Đà Nẵng</td>
                <td>Giao chậm</td>
                <td>
                    <a class="edit-class" href="/admin/order_detail">Chi tiết</a>
                </td>
                <td>03/08/2024</td>
                <td><a class="non-confirm-order" href="">Chưa xác nhận</a></td>
                <td>
                    <a class="delete-class" href="">Xóa</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection