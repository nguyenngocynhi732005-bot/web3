<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách phim Canada</title>
</head>
<body style="font-family: Arial, sans-serif; padding: 20px;">

    <h2>Danh sách các bộ phim của Canada</h2>
    
    <ul>
        @foreach($movies as $phim)
            <li style="margin-bottom: 15px;">
                <strong>Tên phim:</strong> {{ $phim->movie_name }} <br>
                <strong>Ngày phát hành:</strong> {{ $phim->release_date }} <br>
                <strong>Thời lượng:</strong> {{ $phim->runtime }} phút
            </li>
        @endforeach
    </ul>

</body>
</html>