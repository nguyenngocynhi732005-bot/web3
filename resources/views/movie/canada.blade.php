@extends('layouts.app')

@section('content')

<h2>Danh sách phim Canada</h2>

<table class="main-table">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên phim</th>
            <th>Ngày phát hành</th>
            <th>Thời lượng (phút)</th>
        </tr>
    </thead>
    <tbody>
        @foreach($movies as $index => $movie)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td><strong>{{ $movie->movie_name }}</strong></td>
            <td>{{ $movie->release_date }}</td>
            <td>{{ $movie->runtime }} phút</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection