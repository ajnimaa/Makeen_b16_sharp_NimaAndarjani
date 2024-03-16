<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>لیست سفارشات</title>
</head>
<body>
<h1>لیست سفارشات</h1>
<table border="1" style="width:700px">
    <thead>
        <tr>
            <th>ردیف</th>
            <th>سفارش</th>
            <th>کد سفارش</th>
            <th>تاریخ تحویل سفارش</th>
            <th>روش تحویل</th>
            <th>manage</th>
        </tr>
        @foreach ($orders as $order)


        <tr>
            <th>{{$order->id}}</th>
            <th>{{$order->order_name}}</th>
            <th>{{$order->order_code}}</th>
            <th>{{$order->order_delivery_time}}</th>
            <th>{{$order->delivery_method}}</th>
            <th>
                <button><a href="/orders/edit/{{$order->id}}">ویرایش</a></button>
                <form action="/orders/delete/{{$order->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">حذف</button>
                </form>
            </th>
        </tr>
        @endforeach
</thead>
</table>
<a href="./add"><button>افزودن سفارش</button></a>
</body>
</html>
