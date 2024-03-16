<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ویرایش کاربر</title>
</head>

<body>
    <h1>ویرایش کاربر</h1>
    <br>
    <form action="/users/edit/{{ $users->id }}" method="post">
        @csrf
        <input type="text" name="name" value="{{ $users->name }}" placeholder="نام">
        <br>
        <input type="text" name="last_name" value="{{ $users->last_name }}" placeholder="نام خانوادگی">
        <br>
        <input type="number" name="phone_number" value="{{ $users->phone_number }}" placeholder="شماره موبایل">
        <br>
        <input type="email" name="email" value="{{ $users->email }}" placeholder="ایمیل">
        <br>
        <select name="gender">
            <option value="male" {{$users->gender == 'male' ? 'selected' : ''}}>male</option>
            <option value="female" {{$users->gender == 'female' ? 'selected' : ''}}>female</option>
        </select>
        <br>
        <button type="submit">ثبت</button>
    </form>
</body>

</html>
