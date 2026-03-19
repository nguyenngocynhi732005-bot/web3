<!DOCTYPE html>
<html>
<head>
    <title>Bài tập Quản trị Mã nguồn mở</title>
</head>
<body>


    <h2>7.1 Danh sách thể loại phim</h2>
    <ul>
        @foreach($genres as $row)
            <li>
                {{ $row->genre_name }} - {{ $row->genre_name_vn }}
            </li>
        @endforeach
    </ul>

    <hr>

    <h2>7.2 Top 10 bộ phim có điểm bình chọn cao nhất</h2>
    <ul>
        @foreach($movies as $movie)
            <li>
                <strong>{{ $movie->movie_name }}</strong> 
                (Ngày phát hành: {{ $movie->release_date }}) 
                - Điểm: {{ $movie->vote_average }}
            </li>
        @endforeach
    </ul>
    
</body>
</html>