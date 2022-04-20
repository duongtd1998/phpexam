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
    <form action="{{route('products.store')}}" method="post">
        @csrf
        Tên SP: <input type="text" name="name"><br>
        Giá: <input type="number" name="price"><br>
        Số Lượng: <input type="number" name="quantity"><br>
        Kích Thước: <input type="text" name="size"><br>
        Màu: <input type="text" name="color"><br>
        Ngày SX: <input type="date" name="mfg"><br>
        HSD: <input type="date" name="exp"><br>
        <button>Thêm SP</button>
    </form>
</body>
</html>
