<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>لیست محصولات</title>
</head>

<body>
    <h1>لیست محصولات</h1>
    <table border="1" style="width:700px">
        <thead>
            <tr>
                <th>ردیف</th>
                <th>محصول</th>
                <th>کد محصول</th>
                <th>قیمت</th>
                <th>موجودی انبار</th>
                <th>manage</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <th>{{ $product->id }}</th>
                    <th>{{ $product->product_name }}</th>
                    <th>{{ $product->product_code }}</th>
                    <th>{{ $product->product_price }}</th>
                    <th>{{ $product->inventory }}</th>
                    <th>
                        <button><a href="/products/edit/{{ $product->id }}">ویرایش</a></button>
                        <form action="/products/delete/{{ $product->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit">حذف</button>
                        </form>
                    </th>
                </tr>
            @endforeach
        </thead>
    </table>
  <a href="./add">  <button>افزودن محصول</button></a>
</body>

</html>
