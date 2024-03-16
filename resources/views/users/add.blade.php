<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>افزودن کاربر</title>
</head>

<body>
    <h1>افزودن کاربر</h1>
    <br>
    <form action="/users/add/" method="post">
        @csrf
        <input type="text" name="name" placeholder="نام">
        <br>
        <input type="text" name="last_name" placeholder="نام خانوادگی">
        <br>
        <input type="number" maxlength="11" name="phone_number" placeholder="شماره موبایل">
        <br>
        <input type="email" name="email" placeholder="ایمیل">
        <br>
        <input type="password" name="password" placeholder="رمز عبور">
        <br>
        <select name="gender">
            <option value="male">male</option>
            <option value="female">female</option>
        </select>
        <br>
        <button type="submit">ثبت</button>
    </form>
</body>

</html>
