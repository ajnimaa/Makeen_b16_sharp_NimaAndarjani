<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>افزودن محصول</title>
</head>
<body>
    <h1>افزودن محصول</h1>
<form action="/products/add" method="post">
    @csrf
    <input type="text" name="product_name" placeholder="نام محصول">
    <br>
    <input type="text" name="product_code" placeholder="کد محصول">
    <br>
    <input type="text" name="product_price" placeholder="قیمت">
    <br>
    <input type="text" name="inventory" placeholder="موجودی">
    <br>
    <button type="submit">ثبت</button>
</form>
</body>
</html>
