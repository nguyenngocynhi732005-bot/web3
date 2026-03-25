@extends('layouts.app')
@section('content')
<h2>Top 10 bộ phim dài hơn 120 phút</h2>
<table border="1" cellpadding="10" style="margin: 0 auto;">
    <thead>
        <tr>
            <th>Tên phim</th>
            <th>Ngày phát hành</th>
            <th>Thời lượng (Runtime)</th>
        </tr>
    </thead>
    <tbody>
        @foreach($movie as $row)
        <tr>
            <td>{{ $row->movie_name }}</td>
            <td>{{ $row->release_date }}</td>
            <td>{{ $row->runtime }} phút</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection