<!DOCTYPE html>
<html>
<head>
    <title>Movies Canada</title>
</head>
<body>

    <h1>Danh sách phim Canada</h1>

    @foreach($movies as $movie)
        <p>
            Tên phim: {{ $movie->movie_name }} <br>
            Ngày phát hành: {{ $movie->release_date }} <br>
            Thời lượng: {{ $movie->runtime }} phút
        </p>
        <hr>
    @endforeach

</body>
</html>