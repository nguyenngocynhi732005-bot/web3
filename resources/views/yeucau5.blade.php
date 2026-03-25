@extends('layouts.app')

@section('content')

<h2>Danh sách các bộ phim của Canada</h2>

<table class="main-table">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên bộ phim</th>
            <th>Ngày phát hành</th>
            <th class="text-right">Thời lượng (phút)</th>
        </tr>
    </thead>
    <tbody>
        @foreach($movies as $index => $phim)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td><strong>{{ $phim->movie_name }}</strong></td>
            <td>{{ $phim->release_date }}</td>
            <td class="text-right">
                <span class="badge">{{ $phim->runtime }} phút</span>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div style="margin-top: 20px;">
    <a href="{{ url('/') }}" style="text-decoration: none; color: #007bff;">← Quay lại trang chủ</a>
</div>

@endsection