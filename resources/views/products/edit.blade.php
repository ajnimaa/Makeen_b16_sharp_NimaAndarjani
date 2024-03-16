<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ویرایش محصول</title>
</head>
<body>
    <h1>ویرایش محصول</h1>
<form action="/products/edit/{{$product->id}}" method="post">
    @csrf
    <input type="text" name="product_name" value="{{$product ->product_name}}">
    <br>
    <input type="text" name="product_code" value="{{$product ->product_code}}">
    <br>
    <input type="text" name="product_price" value="{{$product ->product_price}}">
    <br>
    <input type="text" name="inventory" value="{{$product ->inventory}}">
    <br>
    <button type="submit">ویرایش</button>
</form>
</body>
</html>
