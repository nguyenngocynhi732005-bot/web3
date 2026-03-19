<h1>Danh sách các thể loại phim</h1>
<ul>
    @foreach($genres as $genre)
        <li>
            <strong>{{ $genre->genre_name }}</strong> - {{ $genre->genre_name_vn }}
        </li>
    @endforeach
</ul>