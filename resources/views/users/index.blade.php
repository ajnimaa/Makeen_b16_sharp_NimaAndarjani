<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>لیست کاربران</title>
</head>
<body>
    <h1>لیست کاربران</h1>
    <table border="1" style="width:700px">
        <thead>
            <tr>
                <th>ردیف</th>
                <th>نام</th>
                <th>نام خانوادگی</th>
                <th>شماره موبایل</th>
                <th>ایمیل</th>
                <th>جنسیت</th>
                <th>manage</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <th>{{$user->id}}</th>
                    <th>{{$user->name}}</th>
                    <th>{{$user->last_name}}</th>
                    <th>{{$user->phone_number}}</th>
                    <th>{{$user->email}}</th>
                    <th>{{$user->gender}}</th>
                    <th>
                        <button><a href="/users/edit/{{$user->id}}">ویرایش</a></button>
                        <form action="/users/delete/{{$user->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit">حذف</button>
                        </form>
                    </th>
                </tr>
            @endforeach
        </thead>
    </table>
    <a href="./add"><button>افزودن کاربر</button></a>
</body>
</html>
