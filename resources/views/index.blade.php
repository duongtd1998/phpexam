<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('products.create')}}">Thêm Sản Phẩm</a>
    <table border="1" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td>Mã SP</td>
            <td>Tên SP</td>
            <td>Giá</td>
            <td>Số Lượng</td>
            <td>Kích Thước</td>
            <td>Màu</td>
            <td>Ngày Sản Xuất</td>
            <td>Hạn Sử Dụng</td>
            <td>Sửa</td>
            <td>Xóa</td>
        </tr>
        @foreach($product as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->price}}</td>
                <td>{{$value->quantity}}</td>
                <td>{{$value->size}}</td>
                <td>{{$value->color}}</td>
                <td>{{$value->mfg}}</td>
                <td>{{$value->exp}}</td>
                <td>
                    <a href="{{route('products.edit',$value)}}">
                        Cập Nhật
                    </a>
                </td>
                <td>
                    <form action="{{route('products.destroy',$value)}}" method="post">
                        @csrf
                        @method('delete')
                        <button>Xóa</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
