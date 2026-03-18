<h1>{{ $title }}</h1>

<style>
    table { width: 100%; border-collapse: collapse; }
    th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
    th { background-color: #f4f4f4; }
    img { border-radius: 5px; box-shadow: 2px 2px 5px #ccc; }
</style>

<table>
    <thead>
        <tr>
            <th>Ảnh đại diện</th>
            <th>Tên bộ phim</th>
            <th>Ngày phát hành</th>
            <th>Mô tả</th>
        </tr>
    </thead>
    <tbody>
        @foreach($movies as $movie)
        <tr>
            <td>
                <img src="{{ $movie->image_link }}" alt="{{ $movie->movie_name }}" width="100">
            </td>
            <td><strong>{{ $movie->movie_name }}</strong></td>
            <td>{{ $movie->release_date }}</td>
            <td>{{ Str::limit($movie->overview, 150) }}</td>
        </tr>
        @endforeach
    </tbody>
</table>