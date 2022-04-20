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
<form action="{{route('products.update',$product)}}" method="post">
    @csrf
    @method('put')
        Tên SP: <input type="text" name="name" value="{{$product->name}}"><br>
        Giá: <input type="number" name="price" value="{{$product->price}}"><br>
        Số Lượng: <input type="number" name="quantity" value="{{$product->quantity}}"><br>
        Kích Thước: <input type="text" name="size" value="{{$product->size}}"><br>
        Màu: <input type="text" name="color" value="{{$product->color}}"><br>
        Ngày SX: <input type="date" name="mfg" value="{{$product->mfg}}"><br>
        HSD: <input type="date" name="exp" value="{{$product->exp}}"><br>
    <button>Cập Nhật</button>
</form>
</body>
</html>
