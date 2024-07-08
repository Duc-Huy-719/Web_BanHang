@extends('admin.main')
@section('content')
<div class="admin-content-main-content">
    <div class="admin-content-main-content-order-list">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ảnh</th>
                    <th>Tên</th>
                    <th>Giá</th>
                    <th>Số Lượng</th>
                    <th>Thành Tiền</th>
                    <th>Tùy Biến</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><img style="width: 70px;" src="../image/ao-thun-Hoa-Tiet.jpg" alt=""></td>
                    <td>T-Shirt Cotton 220GSM</td>
                    <td>60,000</td>
                    <td>3</td>
                    <td>180,000</td>
                    <td>
                        <a class="delete-class" href="">Xóa</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img style="width: 70px;" src="../image/ao-thun-tay-ngan-carbon.webp" alt=""></td>
                    <td>T-Shirt Cotton 220GSM</td>
                    <td>70,000</td>
                    <td>1</td>
                    <td>70,000</td>
                    <td>
                        <a class="delete-class" href="">Xóa</a>
                    </td>
                </tr>
                <tr>
                    <td style="font-weight: 700;" colspan="5">Tổng cộng</td>
                    <td style="font-weight: 700;">250.000</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection