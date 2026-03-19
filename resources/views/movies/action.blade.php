<!DOCTYPE html>
<html>

<head>
    <title>Movies Action</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        img {
            width: 100px;
        }
    </style>
</head>

<body>

    <h1>Danh sách phim thể loại Action</h1>

    <table>
        <tr>
            <th>Tên phim</th>
            <th>Ngày phát hành</th>
            <th>Mô tả</th>
            <th>Ảnh</th>
        </tr>

        @foreach($movies as $movie)
        <tr>
            <td>{{ $movie->movie_name }}</td>
            <td>{{ $movie->release_date }}</td>
            <td>{{ $movie->overview }}</td>
            <td>
                <img src="{{ $movie->image_link }}">
            </td>
        </tr>
        @endforeach

    </table>

</body>

</html>