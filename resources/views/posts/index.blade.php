<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>وبلاگ</title>
</head>

<body>
    <h1>وبلاگ</h1>
    <table border="1" style="width:700px">
        <thead>
            <tr>
                <th>عنوان مقاله</th>
                <th>دسته بندی</th>
                <th>متن مقاله</th>
                <th>manage</th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <th>{{$post->post_subject}}</th>
                    <th>{{$post->category_id}}</th>
                    <th>{{$post->post_text}}</th>
                    <th>
                        <button><a href="/post/edit/{{$post->id}}">ویرایش</a></button>
                        <form action="/posts/delete/{{$post->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit">حذف</button>
                        </form>
                    </th>
                </tr>
            @endforeach
        </thead>
    </table>
</body>

</html>
