<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ویرایش سفارش</title>
</head>

<body>
    <h1>ویرایش سفارش</h1>
    <form action="/orders/edit/{{ $orders->id }}" method="post">
        @csrf
        <input type="text" name="order_name" value="{{ $orders->order_name }}" placeholder="نام سفارش">
        <br>
        <input type="number" name="order_code" value="{{ $orders->order_code }}" placeholder="کد سفارش">
        <br>
        <input type="date" name="order_delivery_time" value="{{ $orders->order_delivery_time }}">
        <br>
        <select name="delivery_method">
            <option value="in person" {{ $orders->delivery_method == 'in person' ? 'selected' : '' }}>in person</option>
            <option value="not in person" {{ $orders->delivery_method == 'not in person' ? 'selected' : '' }}>not in
                person</option>
        </select>
        <br>
        <button type="submit">ثبت</button>
    </form>
</body>

</html>
