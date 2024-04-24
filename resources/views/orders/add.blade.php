<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>افزودن سفارش</title>
</head>
<body>
<h1>افزودن سفارش</h1>
<form action="{{ route('orders.add') }}" method="post">
    @csrf
    <input type="text" name="order_name" placeholder="نام سفارش">
    <br>
    <input type="number" name="order_code" placeholder="کد سفارش">
<br>
<input type="date" name="order_delivery_time">
<br>
<select name="delivery_method">
    <option value="in person">in person</option>
    <option value="not in person">not in person</option>
</select>
<br>
<button type="submit">ثبت</button>
</form>
</body>
</html>
