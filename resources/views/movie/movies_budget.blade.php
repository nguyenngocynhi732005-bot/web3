@extends('layouts.app')
@section('content')
<h2>Top 10 bộ phim có doanh thu cao nhất</h2>
<table border="1" cellpadding="10" style="margin: 0 auto;">
    <thead>
        <tr>
            <th>Tên phim</th>
            <th>Ngày phát hành</th>
            <th>Doanh thu (Budget)</th>
        </tr>
    </thead>
    <tbody>
        @foreach($movie as $row)
        <tr>
            <td>{{ $row->movie_name }}</td>
            <td>{{ $row->release_date }}</td>
            <td>{{ number_format($row->budget) }} $</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection