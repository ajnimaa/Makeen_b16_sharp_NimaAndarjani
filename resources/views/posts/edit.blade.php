<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ویرایش مقاله</title>
</head>

<body>
    <h1>ویرایش مقاله</h1>
    <br>
    <form action="/post/edit/{{$post->id}}" method="post">
        @csrf
        <input type="text" name="post_subject" value="{{$post->post_subject}}" placeholder="موضوع مقاله">
        <br>
        <input type="text" name="post_text" value="{{$post->post_text}}" placeholder="متن مقاله">
        <br>
        <select name="category_id">
            <option value="pezeshki" {{$post->category_id == 'pezeshki' ? 'selected' : ''}}>پزشکی</option>
            <option value="varzeshi" {{$post->category_id == 'varzeshi' ? 'selected' : ''}}>ورزشی</option>
            <option value="elmi" {{$post->category_id == 'elmi' ? 'selected' : ''}}>علمی</option>
            <option value="siyasi" {{$post->category_id == 'siyasi' ? 'selected' : ''}}>سیاسی</option>
        </select>
        <button type="submit">ثبت</button>
    </form>
</body>

</html>
