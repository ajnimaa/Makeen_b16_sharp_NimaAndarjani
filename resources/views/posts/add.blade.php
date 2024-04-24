<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>افزودن مقاله</title>
</head>

<body>
    <h1>افزودن مقاله</h1>
    <br>
    <form action="{{ route('posts.add') }}" method="post">
        @csrf
        <input type="text" name="post_subject" placeholder="موضوع مقاله">
        <br>
        <textarea name="post_text" placeholder="متن مقاله"  cols="30" rows="10"></textarea>
        <br>
        <select name="category_id">
            <option value="دسته بندی" selected>دسته بندی</option>
            <option value="pezeshki">پزشکی</option>
            <option value="varzeshi">ورزشی</option>
            <option value="elmi">علمی</option>
            <option value="siyasi">سیاسی</option>
        </select>
        <button type="submit">ثبت</button>
    </form>
</body>

</html>
